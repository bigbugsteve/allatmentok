import ValidateFields from './validation.js';

const contactName = document.getElementById("contactName");

contactName.addEventListener("change", function(e){ValidateFields.validateName(e)})

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

	var szoveg = document.getElementById("szoveg");
	if (szoveg) {
		if (szoveg.value.length==0) {
			rendben = false;
			szoveg.style.background = '#f99';
			fokusz = szoveg;
		} else {
			szoveg.style.background = '#9f9';
		}
	}

	var email = document.getElementById("email");
	if (email) {
		var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; //online segítség: https://regex101.com/
		if (!checkPattern.test(email.value)) {
			rendben = false;
			email.style.background = '#f99';
			fokusz = email;
		} else {
			email.style.background = '#9f9';
		}
	}

	var nev = document.getElementById("nev");
	if (nev) {
		if (nev.value.length<5) {
			rendben = false;
			nev.style.background = '#f99';
			fokusz = nev;
		} else {
			nev.style.background = '#9f9';
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