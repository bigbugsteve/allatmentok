import {ContactVars, LoginVars} from "./variables.js";
import ValidateFields from './validation.js';

console.log("ContactVars.contactName", ContactVars.contactName)
// ====== Event listeners ====== 
    // CONTACT
    const contactFormValidation = () => {
        const isFormValid = ValidateFields.validateForm(ContactVars.nameValid, ContactVars.emailValid, ContactVars.messageValid)
        if(isFormValid === true) {
            ContactVars.sendBtn.disabled = false
        } else {
            ContactVars.sendBtn.disabled = true
        }   
    }
    const contactNameEvent = ContactVars.name?.addEventListener("input", (e) => {
        ContactVars.nameValid = ValidateFields.validateName(e);
        ContactVars.nameValid && ContactVars.nameErr.classList.remove("visible");
        const formValid = ValidateFields.validateContactForm(ContactVars.nameValid, ContactVars.contactEmailValid, ContactVars.contactMessageValid);
        contactFormValidation();
    });
    const contactEmailEvent = ContactVars.email?.addEventListener("input", (e) => {
        ContactVars.emailValid = ValidateFields.validateEmail(e);
        ContactVars.emailValid && ContactVars.emailErr.classList.remove("visible");
        ValidateFields.validateContactForm(ContactVars.nameValid, ContactVars.emailValid, ContactVars.messageValid);
        contactFormValidation();
    });
    const contactMessageEvent = ContactVars.message?.addEventListener("input", (e) => {
        ContactVars.messageValid = ValidateFields.validateMessage(e);
        ContactVars.messageValid && ContactVars.messageErr.classList.remove("visible");
        ValidateFields.validateContactForm(ContactVars.nameValid, ContactVars.emailValid, ContactVars.messageValid);
        contactFormValidation();
    });

    // LOGIN
    const loginFormValidation = () => {
        const isFormValid = ValidateFields.validateForm(LoginVars.emailValid, LoginVars.passwordValid)
        if(isFormValid === true) {
            LoginVars.loginBtn.disabled = false
        } else {
            LoginVars.loginBtn.disabled = true
        }   
    }
    const loginEmailEvent = LoginVars.email?.addEventListener("input", (e) => {
        LoginVars.emailValid = ValidateFields.validateEmail(e);
        LoginVars.emailValid && LoginVars.emailErr.classList.remove("visible");
        loginFormValidation()
        // ValidateFields.validateContactForm(LoginVars.loginEmailValid, LoginVars.LoginPasswordageValid);
    })
    const loginPasswordEvent = LoginVars.password?.addEventListener("input", (e) => {
        LoginVars.passwordValid = ValidateFields.validatePassword(e);
        LoginVars.passwordValid && LoginVars.passwordErr.classList.remove("visible");
        loginFormValidation()
        // ValidateFields.validateContactForm(LoginVars.loginEmailValid, LoginVars.LoginPasswordageValid);
    })


// ====== BLUR Events ======
ContactVars.name?.addEventListener("blur", (e) => {
	if(ContactVars.nameValid === false) {
		ContactVars.nameErr.classList.add("visible");
	} else {
		ContactVars.nameErr.classList.remove("visible");
	}
});
ContactVars.email?.addEventListener("blur", (e) => {
	if(ContactVars.emailValid === false) {
		ContactVars.emailErr.classList.add("visible");
	} else {
		ContactVars.emailErr.classList.remove("visible");
	}
});
ContactVars.message?.addEventListener("blur", (e) => {
    if(ContactVars.messageValid === false) {
        ContactVars.messageErr.classList.add("visible");
	} else {
        ContactVars.messageErr.classList.remove("visible");
	}
});
LoginVars.email?.addEventListener("blur", (e) => {
    if(LoginVars.emailValid === false) {
        LoginVars.emailErr.classList.add("visible");
    } else {
        LoginVars.emailErr.classList.remove("visible");
    }
});
LoginVars.password?.addEventListener("blur", (e) => {
    if(LoginVars.passwordValid === false) {
        LoginVars.passwordErr.classList.add("visible");
    } else {
        LoginVars.passwordErr.classList.remove("visible");
    }
});