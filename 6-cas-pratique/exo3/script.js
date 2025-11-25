document.getElementById('submitForm').addEventListener('submit', function(event) {

    let isValid = true;

    // Récupération des éléments
    const firstnameInput = document.getElementById('firstname');
    const errMsgFirstname = document.getElementById('errMsgFirstname');
    const lastnameInput = document.getElementById('lastname');
    const errMsgLastname = document.getElementById('errMsgLastname');

    const emailInput = document.getElementById('email');
    const errMsgEmail = document.getElementById('errMsgEmail');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    const sexMInput = document.getElementById('sex-male');
    const sexFInput = document.getElementById('sex-female');
    const errMsgSex = document.getElementById('errMsgSex');

    const dateInput = document.getElementById('date');
    const errMsgDate = document.getElementById('errMsgDate');
    const inputDateValue = dateInput.value;

    const ageInput = document.getElementById('age');
    const errMsgAge = document.getElementById('errMsgAge');

    // Validation du prénom
    if (firstnameInput.value.trim() === '') {
        isValid = false;
        firstnameInput.classList.add('input-error');
        firstnameInput.classList.remove('input-valid');
        errMsgFirstname.textContent = "Le prénom est obligatoire.";
        errMsgFirstname.hidden = false;
    } else {
        firstnameInput.classList.remove('input-error');
        firstnameInput.classList.add('input-valid');
        errMsgFirstname.hidden = true;
    }
    // Validation du nom
    if (lastnameInput.value.trim() === '') {
        isValid = false;
        lastnameInput.classList.add('input-error');
        lastnameInput.classList.remove('input-valid');
        errMsgLastname.textContent = "Le nom est obligatoire.";
        errMsgLastname.hidden = false;
    } else {
        lastnameInput.classList.remove('input-error');
        lastnameInput.classList.add('input-valid');
        errMsgLastname.hidden = true;
    }
    // --- Validation de l'Email ---
    if (emailInput.value.trim() === '' || !emailRegex.test(emailInput.value.trim())) {
        isValid = false;
        emailInput.classList.add('input-error');
        errMsgEmail.classList.remove('input-valid');
        errMsgEmail.textContent = "Le mail est obligatoire.";
        errMsgEmail.hidden = false;
    } else {
        emailInput.classList.remove('input-error');
        emailInput.classList.add('input-valid');
        errMsgEmail.hidden = true;
    }
    // Validation du sexe
    if (!sexMInput.checked && !sexFInput.checked) {
        isValid = false;
        errMsgSex.textContent = "Le choix du sexe est obligatoire.";
        errMsgSex.hidden = false;
    } else {
        errMsgSex.hidden = true;
    }
    // Validation de la date de naissance
    if (inputDateValue === "") {
        errMsgDate.textContent = "La date de naissance est obligatoire.";
        errMsgDate.hidden = false;
    } else {
        const inputDate = new Date(inputDateValue);
        const today = new Date();
        today.setHours(0, 0, 0, 0);

        if (inputDate >= today) {
            errMsgDate.textContent = "La date doit être antérieure à aujourd'hui.";
            errMsgDate.hidden = false;
        } else {
            errMsgDate.hidden = true;
        }
    }
    // Validation de l'age
    if (ageInput.value.trim() === '' || isNaN(ageInput.value) || parseInt(ageInput.value) < 10 || parseInt(ageInput.value) > 99) {
        isValid = false;
        ageInput.classList.add('input-error');
        ageInput.classList.remove('input-valid');
        errMsgAge.textContent = "L'âge est obligatoire.";
        errMsgAge.hidden = false;
    } else {
        ageInput.classList.remove('input-error');
        ageInput.classList.add('input-valid');
        errMsgAge.hidden = true;
    }

    // Empêche l'envoi si le formulaire n'est pas valide
    if (!isValid) {
        event.preventDefault();
    }
});
