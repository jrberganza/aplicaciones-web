<template>
  <div class="contact">
    <section>
      <h1>Contáctame</h1>
      <v-form ref="contact-form" v-model="valid">
        <v-text-field ref="name" v-model="inputs.name" :rules="[rules.required]" label="Nombre(s)">
        </v-text-field>
        <v-text-field ref="lastName" v-model="inputs.lastName" :rules="[rules.required]" label="Apellido(s)">
        </v-text-field>
        <v-select ref="gender" v-model="inputs.gender" :items="genderItems" label="Género"></v-select>
        <v-text-field ref="age" v-model="inputs.age" :rules="[rules.required, rules.age.format, rules.age.length]"
          label="Edad"></v-text-field>
        <v-text-field ref="email" v-model="inputs.email" :rules="[rules.required, rules.email.format]"
          label="Correo electrónico"></v-text-field>
        <v-text-field ref="telephone" v-model="inputs.telephone"
          :rules="[rules.required, rules.telephone.format, rules.telephone.length]" label="Número de teléfono"
          prefix="+502" maxlength="8"></v-text-field>
        <v-textarea ref="comments" v-model="inputs.comments" :rules="[rules.required]" label="Comentarios"></v-textarea>
        <v-alert v-model="ageAlert.show" :type="ageAlert.type" dark border="top" transition="slide-y-transition"
          dismissible>
          {{ageAlert.text}}
        </v-alert>
        <v-btn ref="submit-button" type="submit" :disabled="!valid" @click.prevent="submit">
          submit
        </v-btn>
      </v-form>
    </section>
    <section>
      <v-data-table :headers="contactsHeaders" :items="contacts" :items-per-page="10">
        <template v-slot:item.gender="{ item }">
          {{ getReadableGender(item.gender) }}
        </template>
        <template v-slot:item.age="{ item }">
          <v-chip :color="getAgeColor(item.age)" dark>
            {{ item.age }}
          </v-chip>
        </template>
      </v-data-table>
    </section>
  </div>
</template>

<style>
.contact section {
  padding: 20px;
}

h1 {
  margin-top: 10px;
  margin-bottom: 10px;

  font-family: Calibri;
  font-size: 28px;
}
</style>

<script>
import { VForm, VTextField, VSelect, VTextarea, VAlert, VBtn, VDataTable, VChip } from 'vuetify';

export default {
  name: 'Contact',
  data: () => ({
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
    contacts: JSON.parse(window.localStorage.getItem("contacts") || "[]"),
  }),
  watch: {
    contacts: (n, o) => window.localStorage.setItem("contacts", JSON.stringify(n)),
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
  },
  components: { VForm, VTextField, VSelect, VTextarea, VAlert, VBtn, VDataTable, VChip }
}
</script>