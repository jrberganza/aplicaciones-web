<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Carrito from '../Components/Carrito.vue';
import Lista from '../Components/Lista.vue';
import { VApp, VMain, VIcon, VBtn, VSnackbar } from 'vuetify/components';
</script>

<template>

  <Head title="disFruta" />

  <VApp>
    <header>
      <div class="logo">
        <img src="../../images/disFruta.png" alt="disFruta" />
      </div>
    </header>
    <!-- Está afuera del header para que funcione el position: sticky; -->
    <nav id="navigation-menu">
      <a href="/" class="nav-button">
        <VIcon large color="teal">mdi-home</VIcon>
      </a>
    </nav>
    <VMain>
      <section>
        <h1>Carrito de compras</h1>
        <Carrito></Carrito>
      </section>
    </VMain>
    <footer>
      <div class="footer-left">&copy; Juan Berganza 2022</div>
      <div class="footer-right">
        <strong>Número de teléfono:</strong> 5234-1234<br>
        <strong>Correo:</strong> juan@disfruta.com.gt<br>
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="social-link">
          <VIcon>mdi-twitter</VIcon>
        </a>
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="social-link">
          <VIcon>mdi-instagram</VIcon>
        </a>
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="social-link">
          <VIcon>mdi-facebook</VIcon>
        </a>
      </div>
    </footer>
  </VApp>
</template>

<style>
*,
::after,
::before {
  box-sizing: border-box;
}

html,
body {
  margin: 0;
  padding: 0;

  font-family: Arial, Helvetica, sans-serif;
}

a {
  color: #26A69A;
}

.logo {
  padding-top: 50px;
  padding-bottom: 25px;
  height: 175px;
  text-align: center;
  background-color: #E0F2F1;
}

.logo img {
  display: inline-block;
  height: 100%;
}

nav {
  display: block;
  padding: 5px;
  text-align: right;
  background-color: white;

  top: 0px;
  position: sticky;
  z-index: 1000;
}

nav .nav-button {
  display: inline-block;
  text-decoration: none;
  padding: 5px;
}

nav .nav-button:hover {
  background-color: rgba(0, 0, 0, 0.05);
  border-radius: 10px;
}

main section {
  padding: 10px 20px;
}

h1 {
  margin-top: 0px;
  margin-bottom: 10px;

  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 28px;
}

footer {
  display: grid;
  grid-template-columns: auto auto;

  padding: 25px 15% 10px 15%;

  background-color: #eee;
  color: #3E3F3A;
}

.footer-right {
  text-align: right;
}

.social-link {
  display: inline-block;
  padding: 4px 0px;
  text-decoration: none;
}

@media only screen and (max-width: 800px) {
  footer {
    display: block;
    padding: 20px 20px 10px 20px;
  }

  .footer-right {
    padding-top: 10px;
  }
}
</style>