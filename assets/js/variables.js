export class ContactVars {
    // Input fields
    static name = document.getElementById("contactName");
    static email = document.getElementById("contactEmail");
    static message = document.getElementById("contactMessage");
    
    // Error fields
    static nameErr = document.querySelector(".contactNameInvalid");
    static emailErr = document.querySelector(".contactEmailInvalid");
    static messageErr = document.querySelector(".contactMessageInvalid");
    
    // Form
    static contactForm = document.getElementById("contactForm");
    
    // IsValid
    static nameValid = false;
    static emailValid = false;
    static messageValid = false;

    // Send button
    static sendBtn = document.getElementById("contactSendBtn");
}

export class LoginVars {
    // Input fields
    static email = document.getElementById("loginEmail");
    static password = document.getElementById("loginPassword");

    // Error fields
    static emailErr = document.querySelector(".loginEmailInvalid");
    static passwordErr = document.querySelector(".loginPasswordInvalid");

    // IsValid
    static emailValid = false;
    static passwordValid = false;

    // Login button
    static loginBtn = document.getElementById("loginButton");
}

export class RegVars {
    // Input fields
    static firstName = document.getElementById("firstName");
    static lastName = document.getElementById("lastName");
    static email = document.getElementById("registrationEmail");
    static password = document.getElementById("registrationPassword");

    // Error fields
    static firstNameErr = document.querySelector(".firstNameInvalid");
    static lastNameErr = document.querySelector(".lastNameInvalid");
    static emailErr = document.querySelector(".registrationEmailInvalid");
    static passwordErr = document.querySelector(".registrationPasswordInvalid");

    // IsValid
    static firstNameValid = false;
    static lastNameValid = false;
    static emailValid = false;
    static passwordValid = false;

    // Reg button
    static regBtn = document.getElementById("registrationButton");
}