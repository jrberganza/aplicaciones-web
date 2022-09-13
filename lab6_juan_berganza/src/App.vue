<template>
  <v-app>
    <page-header />
    <v-main>
      <router-view />
    </v-main>
    <page-footer />
  </v-app>
</template>

<script>
import { RouterView } from 'vue-router';
import PageHeader from '@/components/PageHeader.vue'
import PageFooter from '@/components/PageFooter.vue'
import { VMain } from 'vuetify'

export default {
  name: 'App',

  data: () => ({
    //
  }),
  components: {
    PageHeader,
    PageFooter,
    VMain,
    RouterView
  }
};
</script>
