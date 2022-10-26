<script>
import axios from 'axios';
import { VRow, VCol, VCard, VImg, VCardTitle, VCardActions, VCardText, VBtn, VIcon, VTextField } from 'vuetify/components';

export default {
  data: () => ({
    catalogue: [],
  }),
  methods: {
    addToCart(item) {
      axios.post('/product/user', { id: item.id, amount: item.amount })
    }
  },
  async mounted() {
    let res = await axios.get("/products");

    this.catalogue = res.data.map(v => ({ ...v, amount: 1 }));
  },
  components: { VRow, VCol, VCard, VImg, VCardTitle, VCardActions, VCardText, VBtn, VIcon, VTextField }
}
</script>

<template>
  <VRow>
    <VCol v-for="item in catalogue" :key="item.name" cols="12" sm="6" md="4" lg="3">
      <VCard>
        <VImg height="150" :src="item.image"></VImg>
        <VCardTitle>
          <h4>{{ item.name }}</h4>
        </VCardTitle>
        <VCardText>
          <p><em>Q.{{ item.pricePerUnit.toFixed(2) }} por {{ item.unit }}</em></p>
          <p>{{ item.description }}</p>
          <p><b>Total: {{ (item.pricePerUnit * item.amount).toFixed(2) }}</b></p>
        </VCardText>
        <VCardActions>
          <VRow>
            <VCol cols="2">
              <VBtn icon @click="item.amount <= 1 ? item.amount = 1 : item.amount--">
                <VIcon>mdi-minus</VIcon>
              </VBtn>
            </VCol>
            <VCol cols="6">
              <VTextField dense v-model="item.amount" :suffix="item.unit"></VTextField>
            </VCol>
            <VCol cols="2">
              <VBtn icon @click="item.amount++">
                <VIcon>mdi-plus</VIcon>
              </VBtn>
            </VCol>
            <VCol cols="2">
              <VBtn icon @click="addToCart(item); item.amount = 1; $emit('addedtocart');">
                <VIcon>mdi-cart-plus</VIcon>
              </VBtn>
            </VCol>
          </VRow>
        </VCardActions>
      </VCard>
    </VCol>
  </VRow>
</template>