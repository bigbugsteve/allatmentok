import {ContactVars, LoginVars} from "./variables.js";
import ValidateFields from './validation.js';

// ====== Event listeners ====== 
    // CONTACT
    const contactNameEvent = ContactVars.contactName?.addEventListener("input", (e) => {
        ContactVars.contactNameValid = ValidateFields.validateName(e);
        ContactVars.contactNameValid && ContactVars.contactNameErr.classList.remove("visible");
        ValidateFields.validateContactForm(ContactVars.contactNameValid, ContactVars.contactEmailValid, ContactVars.contactMessageValid);
    });
    const contactEmailEvent = ContactVars.contactEmail?.addEventListener("input", (e) => {
        ContactVars.contactEmailValid = ValidateFields.validateEmail(e);
        ContactVars.contactEmailValid && ContactVars.contactEmailErr.classList.remove("visible");
        ValidateFields.validateContactForm(ContactVars.contactNameValid, ContactVars.contactEmailValid, ContactVars.contactMessageValid);
    });
    const contactMessageEvent = ContactVars.contactMessage?.addEventListener("input", (e) => {
        ContactVars.contactMessageValid = ValidateFields.validateMessage(e);
        ContactVars.contactMessageValid && ContactVars.contactMsgErr.classList.remove("visible");
        ValidateFields.validateContactForm(ContactVars.contactNameValid, ContactVars.contactEmailValid, ContactVars.contactMessageValid);
    });
    // LOGIN
    const loginEmailEvent = LoginVars.loginEmail?.addEventListener("input", (e) => {
        LoginVars.loginEmailValid = ValidateFields.validateEmail(e);
        LoginVars.loginEmailValid && LoginVars.loginEmailErr.classList.remove("visible");
        // ValidateFields.validateContactForm(LoginVars.loginEmailValid, LoginVars.LoginPasswordageValid);
    })
    const loginPasswordEvent = LoginVars.loginPassword?.addEventListener("input", (e) => {
        LoginVars.loginPasswordValid = ValidateFields.validatePassword(e);
        LoginVars.loginPasswordValid && LoginVars.loginPasswordErr.classList.remove("visible");
        // ValidateFields.validateContactForm(LoginVars.loginEmailValid, LoginVars.LoginPasswordageValid);
    })


// ====== BLUR Events ======
ContactVars.contactName?.addEventListener("blur", (e) => {
	if(ContactVars.contactNameValid === false) {
		ContactVars.contactNameErr.classList.add("visible");
	} else {
		ContactVars.contactNameErr.classList.remove("visible");
	}
});
ContactVars.contactEmail?.addEventListener("blur", (e) => {
	if(ContactVars.contactEmailValid === false) {
		ContactVars.contactEmailErr.classList.add("visible");
	} else {
		ContactVars.contactEmailErr.classList.remove("visible");
	}
});
ContactVars.contactMessage?.addEventListener("blur", (e) => {
    if(ContactVars.contactMessageValid === false) {
        ContactVars.contactMsgErr.classList.add("visible");
	} else {
        ContactVars.contactMsgErr.classList.remove("visible");
	}
});
LoginVars.loginEmail?.addEventListener("blur", (e) => {
    if(LoginVars.loginEmailValid === false) {
        LoginVars.loginEmailErr.classList.add("visible");
    } else {
        LoginVars.loginEmailErr.classList.remove("visible");
    }
});
LoginVars.loginPassword?.addEventListener("blur", (e) => {
    if(LoginVars.loginPasswordValid === false) {
        LoginVars.loginPasswordErr.classList.add("visible");
    } else {
        LoginVars.loginPasswordErr.classList.remove("visible");
    }
});