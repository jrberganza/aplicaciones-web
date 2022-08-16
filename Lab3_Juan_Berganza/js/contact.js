let contactForm = document.getElementById("contact-form");
let nameInput = document.getElementById("name-input");
let lastNameInput = document.getElementById("lastname-input");
let genderInput = document.getElementById("gender-input");
let ageInput = document.getElementById("age-input");
let emailInput = document.getElementById("email-input");
let telephoneInput = document.getElementById("telephone-input");
let commentsArea = document.getElementById("comments-area");
let submitButton = document.getElementById("submit-button");

submitButton.onclick = function (e) {
    var valid = contactForm.checkValidity();
    if (valid) {
        e.preventDefault();

        let dialog;

        if (ageInput.value < 18) {
            nameInput.setAttribute("disabled", true);
            lastNameInput.setAttribute("disabled", true);
            genderInput.setAttribute("disabled", true);
            ageInput.setAttribute("disabled", true);
            emailInput.setAttribute("disabled", true);
            telephoneInput.setAttribute("disabled", true);
            commentsArea.setAttribute("disabled", true);
            submitButton.setAttribute("disabled", true);

            dialog = swal(`Hola, ${nameInput.value} ${lastNameInput.value}`, "Usted no puede recibir información porque no cumple con la mayoría de edad", "error");
        } else {
            dialog = swal(`Bienvenido, ${nameInput.value} ${lastNameInput.value}`, `En breve le enviaremos un correo electrónico con información a ${emailInput.value}`, "success");
        }

        dialog.then((response) => {
            if (response) {
                location.href = "../index.html";
            }
        });

        return false;
    } else {
        return true;
    }
}