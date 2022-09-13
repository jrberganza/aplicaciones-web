<template>
    <header>
        <div class="logo">
            <a href="index.html"><img src="@/assets/musicportal.png" alt="Music Portal"></a>
        </div>
        <nav id="navigation-menu">
            <v-btn @click="" class="nav-icon" block plain><img src="@/assets/hamburger.svg" alt="Navegación"></v-btn>
            <router-link to="/" class="menu-option">Home</router-link>
            <router-link to="/#intro" class="menu-option">Introducción</router-link>
            <router-link to="/#grammys" class="menu-option">GRAMMYs 2022</router-link>
            <router-link to="/#fantano" class="menu-option">Top 10 Fantano</router-link>
            <router-link to="/contact" class="menu-option">Contáctame</router-link>
        </nav>
    </header>
</template>

<style>
header {
    display: grid;
    grid-template-columns: 20% auto;
    grid-template-rows: auto auto;
    height: 200px;
    background-color: #3E3F3A;
}

.logo {
    position: relative;
    background-color: #3E3F3A;
    overflow: hidden;
}

.logo img {
    float: right;
    height: 100%;
}

nav {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    align-items: end;

    grid-row: 2;
    grid-column: 1 / 3;

    background-color: #373834;
}

nav a.menu-option {
    display: inline-block;
    padding: 10px 20px;
    height: fit-content;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 14px;

    text-align: center;

    color: white;
    text-decoration: none;

    text-transform: uppercase;
}

nav a.menu-option:hover {
    background-color: rgba(255, 255, 255, 0.05);
}

.nav-icon {
    display: none;
}

.nav-icon img {
    width: auto;
    height: 30px;
    padding: 5px 0px;
}

@media only screen and (max-width: 800px) {
    header {
        display: block;
        height: auto;
    }

    .logo {
        height: 100px;
    }

    .logo img {
        position: absolute;
        left: -85px;
        float: none;
    }

    nav {
        display: block;
        overflow: hidden;

        transition: height 0.5s linear;
    }

    nav.closed {
        height: 40px;
    }

    nav a.menu-option {
        display: block;
        padding-top: 10px;
    }

    nav .nav-icon {
        display: block;
        text-align: center;
    }
}
</style>

<script>
import { RouterLink } from 'vue-router';
import { VBtn } from 'vuetify';

export default {
    name: 'PageHeader',
    data: () => ({
        //
    }),
    components: {
        RouterLink,
        VBtn
    }
}
</script>