import ValidateFields from './validation.js';

const contactName = document.getElementById("contactName"); // TODO deklarálni a fieldeket

contactName.addEventListener("change", function(e){ValidateFields.validateName(e)}) // TODO hozzáadni az eventlistenert

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