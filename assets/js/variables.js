export class ContactVars {
    constructor(contactName, contactEmail, contactMessage, contactNameErr, contactEmailErr, contactMsgErr, contactNameValid, contactEmailValid, contactMessageValid) {
        // Get input fields
        this.contactName = contactName
        this.contactEmail = contactEmail
        this.contactMessage = contactMessage
        this.contactNameErr = contactNameErr
        this.contactEmailErr = contactEmailErr
        this.contactMsgErr = contactMsgErr
        this.contactForm = contactForm
        this.contactNameValid = contactNameValid
        this.contactEmailValid = contactEmailValid
        this.contactMessageValid = contactMessageValid
    }
    // Input fields
    static contactName = document.getElementById("contactName");
    static contactEmail = document.getElementById("contactEmail");
    static contactMessage = document.getElementById("contactMessage");
    
    // Error fields
    static contactNameErr = document.querySelector(".contactNameInvalid");
    static contactEmailErr = document.querySelector(".contactEmailInvalid");
    static contactMsgErr = document.querySelector(".contactMessageInvalid");
    
    // Form
    static contactForm = document.getElementById("contactForm");
    
    // IsValid
    static contactNameValid = false;
    static contactEmailValid = false;
    static contactMessageValid = false;
}

export class LoginVars {
    constructor(loginEmail, loginPassword) {
        this.loginEmail = loginEmail
        this.loginPassword = loginPassword
    }

    // Input fields
    static loginEmail = document.getElementById("loginEmail");
    static loginPassword = document.getElementById("loginPassword");

    // Error fields
    static loginEmailErr = document.querySelector(".loginEmailInvalid");
    static loginPasswordErr = document.querySelector(".loginPasswordInvalid");

    // IsValid
    static loginEmailValid = false;
    static loginPasswordValid = false;
}