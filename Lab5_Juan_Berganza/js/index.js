let Lista = Vue.component("lista", {
    template: `
<v-data-iterator
    :items="catalogue"
    item-key="name"
    :items-per-page="10"
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
                        <p><em>Q.{{item.pricePerUnit.toFixed(2)}} por {{item.unit}}</em></p>
                        <p>{{item.description}}</p>
                        <p><b>Total: {{(item.pricePerUnit * item.amount).toFixed(2)}}</b></p>
                    </v-card-text>
                    <v-card-actions>
                        <v-row>
                            <v-col cols="2">
                                <v-btn icon @click="item.amount <= 1 ? item.amount = 1 : item.amount--"><v-icon>mdi-minus</v-icon></v-btn>
                            </v-col>
                            <v-col cols="6">
                                <v-text-field dense v-model="item.amount" type="number" :suffix="item.unit"></v-text-field>
                            </v-col>
                            <v-col cols="2">
                                <v-btn icon @click="item.amount++"><v-icon>mdi-plus</v-icon></v-btn>
                            </v-col>
                            <v-col cols="2">
                                <v-btn icon @click="addToCart(item); item.amount = 1; $emit('addedtocart');"><v-icon>mdi-cart-plus</v-icon></v-btn>
                            </v-col>
                        </v-row>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
    </template>
</v-data-iterator>`,
    data: () => ({
        catalogue: Array.from(products).map(([key, value]) => ({ ...value, name: key, amount: 1 })),
    }),
    methods: {
        ...Vuex.mapMutations(["addToCart"])
    }
});

let app = new Vue({
    el: "#app",
    vuetify: new Vuetify(),
    store: store,
    data: {
        addedToCart: false
    },
});