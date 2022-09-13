<template>
    <footer>
        <div class="footer-left">&copy; Juan Berganza 2022</div>
        <div class="footer-right">
            <strong>Número de teléfono:</strong> 5234-1234<br>
            <strong>Correo:</strong> prueba@example.com<br>
            <a href="https://github.com/jrberganza" class="social-link">
                <v-icon>mdi-github</v-icon>
            </a>
        </div>
    </footer>
</template>

<style>
footer {
    display: grid;
    grid-template-columns: auto auto;

    box-sizing: border-box;
    padding: 25px 15% 5px 15%;

    background-color: #eee;
    color: #3E3F3A;
}

.footer-right {
    text-align: right;
}

.social-link {
    display: inline-block;
    padding: 4px 0px;
}

@media only screen and (max-width: 800px) {
    footer {
        display: block;
        padding: 15px 20px 5px 20px;
    }

    .footer-right {
        padding-top: 10px;
    }
}
</style>

<script>
import { VIcon } from 'vuetify';

export default {
    name: 'PageFooter',
    components: {
        VIcon
    }
}
</script>