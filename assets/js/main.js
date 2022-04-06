import ValidateFields from './validation.js';

// Get input fields
const contactName = document.getElementById("contactName"); // TODO deklarálni a fieldeket
const contactEmail = document.getElementById("contactEmail");
const contactMessage = document.getElementById("contactMessage");

const contactNameErr = document.querySelector(".contactNameInvalid");
const contactEmailErr = document.querySelector(".contactEmailInvalid");
// Forms 
const contactForm = document.getElementById("contactForm");

let contactNameValid = false;
let contactEmailValid = false;
let contactMessageValid = true;

// Event listeners
contactName.addEventListener("input", function(e){
	contactNameValid = ValidateFields.validateName(e);
	contactNameValid && contactNameErr.classList.remove("visible");
	ValidateFields.validateContactForm(contactNameValid, contactEmailValid, contactMessageValid);
});
contactEmail.addEventListener("input", function(e){
	contactEmailValid = ValidateFields.validateEmail(e);
	contactEmailValid && contactEmailErr.classList.remove("visible");
	ValidateFields.validateContactForm(contactNameValid, contactEmailValid, contactMessageValid);
});

contactName.addEventListener("blur", function(e){
	if(contactNameValid === false) {
		contactNameErr.classList.add("visible");
	} else {
		contactNameErr.classList.remove("visible");
	}
});
contactEmail.addEventListener("blur", function(e){
	if(contactEmailValid === false) {
		contactEmailErr.classList.add("visible");
	} else {
		contactEmailErr.classList.remove("visible");
	}
});

// TODO hozzáadni az eventlistenert
contactEmail.addEventListener("input", function(e){ValidateFields.validateEmail(e)}) // TODO hozzáadni az eventlistenert
contactMessage.addEventListener("input", function(e){ValidateFields.validateMessage(e)}) // TODO hozzáadni az eventlistenert

window.onload = function() {
	var kuld = document.getElementById("kuld");
	if (kuld) {
		kuld.disabled = true;
	}
};

const fetchApi = async () => {
	console.log('Helloo')
	const res = await fetch('http://localhost/allatmentok/contact_all.php').then(res => res.json()).then(res => console.log(res))
}

function ellenoriz() {
	var rendben = true;
	var fokusz = null;

	var contactMessage = document.getElementById("contactMessage");
	if (contactMessage) {
		if (contactMessage.value.length==0) {
			rendben = false;
			contactMessage.style.background = '#f99';
			fokusz = contactMessage;
		} else {
			contactMessage.style.background = '#9f9';
		}
	}

	var contactEmail = document.getElementById("contactEmail");
	if (contactEmail) {
		var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; //online segítség: https://regex101.com/
		if (!checkPattern.test(email.value)) {
			rendben = false;
			contactEmail.style.background = '#f99';
			fokusz = contactEmail;
		} else {
			contactEmail.style.background = '#9f9';
		}
	}

	var contactName = document.getElementById("contactName");
	if (contactName) {
		if (contactName.value.length<5) {
			rendben = false;
			contactName.style.background = '#f99';
			fokusz = contactName;
		} else {
			contactName.style.background = '#9f9';
		}
	}

	if (fokusz) {
		fokusz.focus();
	}

	var kuld = document.getElementById("kuld");
	if (kuld) {
		kuld.disabled = !rendben;
	}

	return rendben;
}