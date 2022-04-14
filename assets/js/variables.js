export class ContactVars {
    // constructor(contactName, contactEmail, contactMessage, contactNameErr, contactEmailErr, contactMsgErr, contactNameValid, contactEmailValid, contactMessageValid) {
    //     // Get input fields
    //     this.contactName = contactName
    //     this.contactEmail = contactEmail
    //     this.contactMessage = contactMessage
    //     // this.contactNameErr = contactNameErr
    //     // this.contactEmailErr = contactEmailErr
    //     // this.contactMsgErr = contactMsgErr
    //     // this.contactForm = contactForm
    //     // this.contactNameValid = contactNameValid
    //     // this.contactEmailValid = contactEmailValid
    //     // this.contactMessageValid = contactMessageValid
    // }
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
    // constructor(loginEmail, loginPassword) {
    //     this.loginEmail = loginEmail
    //     this.loginPassword = loginPassword
    // }

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
    // constructor(firstName, lastName, email, password) {
    //     this.firstName = firstName
    //     this.lastName = lasttName
    //     this.email = email
    //     this.password = password
    // }

    static firstName = document.getElementById("firstName");
    static laststName = document.getElementById("lastName");
    static email = document.getElementById("registrationEmail");
    static password = document.getElementById("registrationPassword");
}