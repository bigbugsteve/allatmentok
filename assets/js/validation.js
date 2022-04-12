// TODO validációk
export default class ValidateFields {
      static validateName(e) {
        // console.log("hello validate name", e.target.value)
        if(e.target.value.length > 3) {
          return true;
        } else {
          return false
        }
      }
      static validateEmail(e) {
        if(e.target.value.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
          return true;
        } else {
          return false;
        }
      }
      static validateMessage(e) {
        if(e.target.value.length > 19) {
          return true;
        } else {
          return false
        }
      }
      static validatePassword(e) {
        if(e.target.value.length < 6) {
          return false
        } else {
          return true
        }
      }
      static validateContactForm(name, email, msg) {
        if(name === true && email === true && msg === true)
        document.getElementById("contactSendBtn").disabled = false;
          // sendBtn.ariaDisabled = false;
      }
}