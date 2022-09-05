let products = new Map([
    ["Fresa", { unit: "lb", pricePerUnit: 18, image: "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.cuerpomente.com%2Fmedio%2F2021%2F02%2F11%2Fpropiedades-y-beneficios-de-la-fresa_8e0ffc75_1200x1200.jpg&f=1&nofb=1" }],
    ["Banano", { unit: "lb", pricePerUnit: 3.50, image: "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.Xk73XPNck4cxqmAfg07E5AHaE9%26pid%3DApi&f=1" }],
    ["Piña", { unit: "unidad", pricePerUnit: 14.65, image: "https://mistrettasproduce.com/wp-content/uploads/2020/06/pineapples.jpg" }],
    ["Manzana Fuji", { unit: "lb", pricePerUnit: 9.90, image: "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.6OQQ6X0NPveqwRO3x97VwQHaHa%26pid%3DApi&f=1" }],
    ["Manzana Gala", { unit: "lb", pricePerUnit: 12.20, image: "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.lacajadelahuerta.com%2F251-large_default%2Fmanzana-royal-gala.jpg&f=1&nofb=1" }],
    ["Pera", { unit: "lb", pricePerUnit: 14.90, image: "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.0iMXXbPNS3UInsZ5YnkgzgHaE8%26pid%3DApi&f=1" }],
    ["Uvas Verdes", { unit: "lb", pricePerUnit: 21.70, image: "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.rVBpozL6gvJKMzBdhA67iAHaF-%26pid%3DApi&f=1" }],
    ["Uvas Rojas", { unit: "lb", pricePerUnit: 21.75, image: "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwallpapercave.com%2Fwp%2Fwp3997770.jpg&f=1&nofb=1" }],
    ["Tomate Manzano", { unit: "lb", pricePerUnit: 7.90, image: "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fgreens.com.gt%2Fwp-content%2Fuploads%2F2020%2F04%2FTomate-Manzano.jpg&f=1&nofb=1" }],
    ["Tomate de Cocina", { unit: "lb", pricePerUnit: 5.80, image: "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fnaranjomarket.com%2Fwp-content%2Fuploads%2F2020%2F05%2Ftomateportada-1.jpg&f=1&nofb=1" }],
    ["Pepino", { unit: "unidad", pricePerUnit: 4.30, image: "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2F3.bp.blogspot.com%2F-mag-DV4hvHo%2FUYyUimG5vZI%2FAAAAAAAACzI%2FcOye8HC5ygU%2Fs1600%2FCucumber.jpg&f=1&nofb=1" }],
    ["Berenjena", { unit: "unidad", pricePerUnit: 8.25, image: "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fusercontent2.hubstatic.com%2F6361711_f520.jpg&f=1&nofb=1" }],
    ["Granada", { unit: "lb", pricePerUnit: 42.50, image: "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi0.wp.com%2Fwww.theayurveda.org%2Fwp-content%2Fuploads%2F2015%2F06%2FRipe-pomegranate-fruit.jpg&f=1&nofb=1" }],
    ["Kiwi", { unit: "lb", pricePerUnit: 25.50, image: "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.bewellnaturallyguide.com%2Fwp-content%2Fuploads%2F2013%2F01%2Ffruit-3253464_1920.jpg&f=1&nofb=1" }],
]);

let store = new Vuex.Store({
    state: {
        cart: new Map(JSON.parse(localStorage.getItem("cart") ?? "[]"))
    },
    mutations: {
        addToCart(/** @type {{ cart: Map<string, number>;}} */state, product) {
            if (!state.cart.has(product.name)) state.cart.set(product.name, 0);

            let currAmount = state.cart.get(product.name);
            let newAmount = currAmount + product.amount;
            if (newAmount > 0) {
                state.cart.set(product.name, newAmount);
            } else {
                state.cart.delete(product.name);
            }

            state.cart = new Map(Array.from(state.cart).sort((a, b) => b[1] - a[1]));

            localStorage.setItem("cart", JSON.stringify(Array.from(state.cart)));
        },
        updateCart(state, product) {
            if (!state.cart.has(product.name)) state.cart.set(product.name, 0);

            let newAmount = product.amount;
            if (newAmount > 0) {
                state.cart.set(product.name, newAmount);
            } else {
                state.cart.delete(product.name);
            }

            state.cart = new Map(Array.from(state.cart).sort((a, b) => b[1] - a[1]));

            localStorage.setItem("cart", JSON.stringify(Array.from(state.cart)));
        },
    }
});

