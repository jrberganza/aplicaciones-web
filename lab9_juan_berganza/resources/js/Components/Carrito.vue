<script>
import axios from 'axios';
import { VRow, VCol, VImg, VCardTitle, VCardText, VCardActions, VBtn, VTextField } from 'vuetify/components';

export default {
  data: () => ({
    cart: [],
  }),
  methods: {
    async updateCart(item) {
      let res = await axios.post('/product/user', { id: item.id, amount: item.amount });
      this.getCart();
    },
    async getCart() {
      let res = await axios.get("/product/user");

      this.cart = res.data;
    }
  },
  mounted() {
    this.getCart();
  },
  components: { VRow, VCol, VImg, VCardTitle, VCardText, VCardActions, VBtn, VTextField }
}
</script>

<template>
  <VRow>
    <VCol v-for="item in cart" :key="item.name" cols="12" sm="6" md="4" lg="3">
      <VCard>
        <VImg height="150" :src="item.image"></VImg>
        <VCardTitle>
          <h4>{{ item.name }}</h4>
        </VCardTitle>
        <VCardText>
          <p><em>Q.{{ item.pricePerUnit.toFixed(2) }} por {{ item.unit }}</em></p>
          <p><b>Total: {{ (item.pricePerUnit * item.amount).toFixed(2) }}</b></p>
        </VCardText>
        <VCardActions>
          <VRow>
            <VCol cols="2">
              <VBtn icon @click="item.amount <= 0 ? item.amount = 0 : item.amount--">
                <VIcon>mdi-minus</VIcon>
              </VBtn>
            </VCol>
            <VCol cols="6">
              <VTextField dense v-model="item.amount" :suffix="item.unit">
              </VTextField>
            </VCol>
            <VCol cols="2">
              <VBtn icon @click="item.amount++">
                <VIcon>mdi-plus</VIcon>
              </VBtn>
            </VCol>
            <VCol cols="2">
              <VBtn icon @click="updateCart(item)">
                <VIcon>mdi-cart-plus</VIcon>
              </VBtn>
            </VCol>
          </VRow>
        </VCardActions>
      </VCard>
    </VCol>
  </VRow>
</template>