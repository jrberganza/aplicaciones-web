let submitButton = document.getElementById("submit-button");

let app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    data: {
        valid: false,
        ageAlert: {
            show: false,
            type: "error",
            text: "",
        },
        inputs: {
            name: "",
            lastName: "",
            gender: "notspecified",
            age: "",
            email: "",
            telephone: "",
            comments: ""
        },
        genderItems: [
            { text: "No quiero especificar", value: "notspecified" },
            { text: "Hombre", value: "male" },
            { text: "Mujer", value: "female" },
            { text: "Otro", value: "other" }
        ],
        rules: {
            required: v => !!v || "Este campo es requerido",
            age: {
                format: v => !!v.match(/^\d+$/) || "Ingresa un número de dos dígitos",
                length: v => (parseInt(v, 10) > 9 && parseInt(v, 10) < 100) || "Ingresa un número de dos dígitos",
            },
            email: {
                format: v => !!v.match(/^.+?@.+?\..+?/) || "Ingrese una dirección de correo válida",
            },
            telephone: {
                format: v => !!v.match(/^\d+$/) || "Ingrese un número de teléfono sin guiones",
                length: v => v.length == 8 || 'El número de teléfono debe tener 8 dígitos',
            }
        },
        contactsHeaders: [
            { text: 'Nombre(s)', value: 'name' },
            { text: 'Apellido(s)', value: 'lastName' },
            { text: 'Género', value: 'gender' },
            { text: 'Edad', value: 'age' },
            { text: 'Correo', value: 'email' },
            { text: 'Teléfono', value: 'telephone' },
        ],
        contacts: JSON.parse(window.sessionStorage.getItem("contacts") ?? "[]"),
    },
    watch: {
        contacts: (n, o) => window.sessionStorage.setItem("contacts", JSON.stringify(n)),
    },
    methods: {
        submit() {
            if (parseInt(this.inputs.age, 10) < 18) {
                this.ageAlert.type = "error";
                this.ageAlert.text = `Hola, ${this.inputs.name} ${this.inputs.lastName}. Usted no puede recibir información porque no cumple con la mayoría de edad`;
                this.ageAlert.show = true;

                this.valid = false;
            } else {
                this.ageAlert.type = "success";
                this.ageAlert.text = `Bienvenido, ${this.inputs.name} ${this.inputs.lastName}. En breve le enviaremos un correo electrónico con información a ${this.inputs.email}`;
                this.ageAlert.show = true;

                this.contacts.push({ ...this.inputs });
            }
        },
        getReadableGender(gender) {
            if (gender == "notspecified") {
                return "No especificado"
            } else if (gender == "male") {
                return "Hombre"
            } else if (gender == "female") {
                return "Mujer"
            } else if (gender == "other") {
                return "Otro"
            } else {
                return "-"
            }
        },
        getAgeColor(age) {
            if (age < 35) {
                return "light-blue"
            } else {
                return "grey"
            }
        }
    }
});