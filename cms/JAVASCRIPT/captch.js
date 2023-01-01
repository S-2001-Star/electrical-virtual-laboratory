// // var code;
// // function createCaptcha() {
// //   //clear the contents of captcha div first 
// //   document.getElementById('captcha').innerHTML = "";
// //   var charsArray =
// //   "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
// //   var lengthOtp = 6;
// //   var captcha = [];
// //   for (var i = 0; i < lengthOtp; i++) {
// //     //below code will not allow Repetition of Characters
// //     var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
// //     if (captcha.indexOf(charsArray[index]) == -1)
// //       captcha.push(charsArray[index]);
// //     else i--;
// //   }
// //   var canv = document.createElement("canvas");
// //   canv.id = "captcha";
// //   canv.width = 100;
// //   canv.height = 50;
// //   // let captcha = text.fontsize(50)
// //   var ctx = canv.getContext("2d");
// //   ctx.font = "1.5vw Poppins";
// //   // let captcha = ctx.fontsize(5);
// //   ctx.strokeText(captcha.join(""), 5, 30);
// //   //storing captcha so that can validate you can save it somewhere else according to your specific requirements
// //   code = captcha.join("");
// //   document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
// //   document.getElementById("captcha").style.fontfamily = "Impact,Charcoal,sans-serif";
// //   document.getElementById("captcha").style.fontfamily = "7em";

// // }
// // function validateCaptcha() {
// //   event.preventDefault();
// //   debugger
// //   if (document.getElementById("cpatchaTextBox").value == code) {
// //     alert("Valid Captcha")
// //   }else{
// //     alert("Invalid Captcha. try Again");
// //     createCaptcha();
// //   }
// // }



// (function(){
//   const fonts = ["cursive"];
//   let captchaValue = "";
//   function gencaptcha()
//   {
//       let value = btoa(Math.random()*1000000000);
//       value = value.substr(0,5 + Math.random()*5);
//       captchaValue = value;
//   }

//   function setcaptcha()
//   {
//       let html = captchaValue.split("").map((char)=>{
//           const rotate = -20 + Math.trunc(Math.random()*30);
//           const font = Math.trunc(Math.random()*fonts.length);
//           return`<span
//           style="
//           transform:rotate(${rotate}deg);
//           font-family:${font[font]};
//           "
//          >${char} </span>`;
//       }).join("");
//       document.querySelector(".login_form #captcha .preview").innerHTML = html;
//   }

//   function initCaptcha()
//   {
//       document.querySelector(".login_form #captcha .captcha_refersh").addEventListener("click",function(){
//           gencaptcha();
//           setcaptcha();
//       });

//       gencaptcha();
//       setcaptcha();
//   }
//   initCaptcha();

//   document.querySelector(".login_form #form_button").addEventListener("click",function(){
//       let inputcaptchavalue = document.querySelector(".login_form #captcha input").value;

//       if (inputcaptchavalue === captchaValue) 
//       {
//           // swal("","Log in","success");
//           alert("Log in success");
//       }
//       else
//       {
//           // swal("Invalid Captcha");
//           alert("Invalid Captcha");
//       }
//   });
// })();




var captcha;
function generate() {

	// Clear old input
	document.getElementById("submit").value = "";

	// Access the element to store
	// the generated captcha
	captcha = document.getElementById("image");
	var uniquechar = "";

	const randomchar =
"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@$#&";

	// Generate captcha for length of
	// 5 with random character
	for (let i = 1; i < 6; i++) {
		uniquechar += randomchar.charAt(
			Math.random() * randomchar.length)
	}

	// Store generated input
	captcha.innerHTML = uniquechar;
}

function printmsg() {
	const usr_input = document
		.getElementById("submit").value;
	
	// Check whether the input is equal
	// to generated captcha or not
	if (usr_input == captcha.innerHTML) {
		var s = document.getElementById("key")
			.innerHTML = "Matched";
		generate();
	}
	else {
		var s = document.getElementById("key")
			.innerHTML = "not Matched";
		generate();
	}
}
const input = document.getElementById('submit');

if (submit.placeholder) {
	submit.addEventListener('focus', (e) => {
		submit.placeholder = '';
  });
} else {
  submit.placeholder.preventDefault()
};