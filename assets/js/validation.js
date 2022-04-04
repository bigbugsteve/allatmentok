// TODO validációk
export default class ValidateFields {
      static validateName(e) {
        console.log("hello validate name", e.target.value)
        if(e.target.value.length > 3) {
          return true;
        } else {
          return false
        }
      }
      static validateEmail(e) {
        console.log("hello world", e.target.value)
      }
      static validatePassword(e) {
        console.log("hello world", e.target.value)
      }
      static validateMessage(e) {
        console.log("hello world", e.target.value)
      }
      static validateContactForm(name, email, msg) {
        if(name === true && email === true && msg === true)
        document.getElementById("contactSendBtn").disabled = false;
          // sendBtn.ariaDisabled = false;
      }
}