<script>
import { VRow, VCol, VCard, VImg, VCardTitle, VCardActions, VCardText, VBtn, VIcon, VTextField } from 'vuetify/components';

export default {
  data: () => ({
    catalogue: [{ name: "Pera", amount: 1, description: "Se denomina pera al fruto de distintas especies del género Pyrus, integrado por árboles caducifolios conocidos comúnmente como perales. Sin embargo, cuando se trata del fruto comestible, se hace referencia mayormente al producido por el llamado peral común (Pyrus communis). La pera es una fruta jugosa, carnosa y una de las más importantes producidas en las regiones templadas.", unit: "lb", pricePerUnit: 14.90, image: "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.0iMXXbPNS3UInsZ5YnkgzgHaE8%26pid%3DApi&f=1" }],
  }),
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
              <VTextField dense v-model="item.amount" type="number" :suffix="item.unit"></VTextField>
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