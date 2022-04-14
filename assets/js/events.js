import {ContactVars, LoginVars, RegVars} from "./variables.js";
import ValidateFields from './validation.js';

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
        ContactVars.nameValid && ContactVars.nameErr?.classList.remove("visible");
        // const formValid = ValidateFields.validateForm(ContactVars.nameValid, ContactVars.contactEmailValid, ContactVars.contactMessageValid);
        contactFormValidation();
    });
    const contactEmailEvent = ContactVars.email?.addEventListener("input", (e) => {
        ContactVars.emailValid = ValidateFields.validateEmail(e);
        ContactVars.emailValid && ContactVars.emailErr?.classList.remove("visible");
        // ValidateFields.validateContactForm(ContactVars.nameValid, ContactVars.emailValid, ContactVars.messageValid);
        contactFormValidation();
    });
    const contactMessageEvent = ContactVars.message?.addEventListener("input", (e) => {
        ContactVars.messageValid = ValidateFields.validateMessage(e);
        ContactVars.messageValid && ContactVars.messageErr?.classList.remove("visible");
        // ValidateFields.validateContactForm(ContactVars.nameValid, ContactVars.emailValid, ContactVars.messageValid);
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
        LoginVars.emailValid && LoginVars.emailErr?.classList.remove("visible");
        loginFormValidation()
        // ValidateFields.validateContactForm(LoginVars.loginEmailValid, LoginVars.LoginPasswordageValid);
    })
    const loginPasswordEvent = LoginVars.password?.addEventListener("input", (e) => {
        LoginVars.passwordValid = ValidateFields.validatePassword(e);
        LoginVars.passwordValid && LoginVars.passwordErr?.classList.remove("visible");
        loginFormValidation()
        // ValidateFields.validateContactForm(LoginVars.loginEmailValid, LoginVars.LoginPasswordageValid);
    })

    // REGISTRATION
    const registrationFormValidation = () => {
        const isFormValid = ValidateFields.validateForm(RegVars.firstNameValid, RegVars.lastNameValid, RegVars.emailValid, RegVars.passwordValid)
        if(isFormValid === true) {
            RegVars.regBtn.disabled = false
        } else {
            RegVars.regBtn.disabled = true
        }   
    }
    const registrationEmailEvent = RegVars.email?.addEventListener("input", (e) => {
        RegVars.emailValid = ValidateFields.validateEmail(e);
        RegVars.emailValid && RegVars.emailErr?.classList.remove("visible");
        registrationFormValidation()
        // ValidateFields.validateContactForm(LoginVars.loginEmailValid, LoginVars.LoginPasswordageValid);
    })
    const registrationFnEvent = RegVars.firstName?.addEventListener("input", (e) => {
        RegVars.firstNameValid = ValidateFields.validateName(e);
        RegVars.firstNameValid && RegVars.firstNameErr.classList.remove("visible");
        registrationFormValidation()
    })
    const registrationLnEvent = RegVars.lastName?.addEventListener("input", (e) => {
        RegVars.lastNameValid = ValidateFields.validateName(e);
        RegVars.lastNameValid && RegVars.lastNameErr.classList.remove("visible");
        registrationFormValidation()
    })
    const registrationPasswordEvent = RegVars.password?.addEventListener("input", (e) => {
        console.log("event")
        RegVars.passwordValid = ValidateFields.validatePassword(e);
        RegVars.passwordValid && RegVars.passwordErr.classList.remove("visible");
        registrationFormValidation()
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

RegVars.email?.addEventListener("blur", (e) => {
    if(RegVars.emailValid === false) {
        console.log("MI?")
        RegVars.emailErr?.classList.add("visible");
    } else {
        console.log("MI?2")
        RegVars.emailErr?.classList.remove("visible");
    }
});
RegVars.firstName?.addEventListener("blur", (e) => {
    if(RegVars.firstNameValid === false) {
        RegVars.firstNameErr?.classList.add("visible");
    } else {
        RegVars.firstNameErr?.classList.remove("visible");
    }
});
RegVars.lastName?.addEventListener("blur", (e) => {
    if(RegVars.lastNameValid === false) {
        RegVars.lastNameErr?.classList.add("visible");
    } else {
        RegVars.lastNameErr?.classList.remove("visible");
    }
});
RegVars.password?.addEventListener("blur", (e) => {
    console.log("blur")
    if(RegVars.passwordValid === false) {
        RegVars.passwordErr?.classList.add("visible");
    } else {
        RegVars.passwordErr?.classList.remove("visible");
    }
});