let Carrito = Vue.component("carrito", {
    template: `
<v-data-iterator
    :items="cart"
    item-key="name"
    :items-per-page="5"
>
    <template v-slot:default="{ items }">
        <v-row>
            <v-col v-for="item in items" :key="item.name" cols="12" sm="6" md="4" lg="3">
                <v-card>
                    <v-img
                        height="150"
                        :src="item.image"
                    ></v-img>
                    <v-card-title>
                        <h4>{{item.name}}</h4>
                    </v-card-title>
                    <v-card-text>
                        Q.{{item.pricePerUnit.toFixed(2)}} por {{item.unit}}<br />
                        <b>Total: {{(item.pricePerUnit * item.amount).toFixed(2)}}</b>
                    </v-card-text>
                    <v-card-actions>
                        <v-row>
                            <v-col cols="2">
                                <v-btn icon @click="item.amount <= 0 ? item.amount = 0 : item.amount--; updateCart(item)"><v-icon>mdi-minus</v-icon></v-btn>
                            </v-col>
                            <v-col cols="8">
                                <v-text-field dense v-model="item.amount" type="number" :suffix="item.unit" @input="updateCart(item)"></v-text-field>
                            </v-col>
                            <v-col cols="2">
                                <v-btn icon @click="item.amount++; updateCart(item)"><v-icon>mdi-plus</v-icon></v-btn>
                            </v-col>
                        </v-row>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
    </template>
</v-data-iterator>`,
    data: () => ({
    }),
    computed: {
        cart: {
            get() {
                let cart = new Map();
                for (let [key, value] of this.$store.state.cart) {
                    let prod = products.get(key);
                    if (prod) {
                        cart.set(key, { ...prod, amount: value });
                    }
                }
                return Array.from(cart).map(([key, value]) => ({ ...value, name: key }));
            },
            set(items) {
                this.updateCart(items);
            }
        },
    },
    methods: {
        ...Vuex.mapMutations(["updateCart"])
    }
});

let app = new Vue({
    el: "#app",
    vuetify: new Vuetify(),
    store: store,
    data: {},
    methods: {
    }
});