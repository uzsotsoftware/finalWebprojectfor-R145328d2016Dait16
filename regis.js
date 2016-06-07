$(document).ready(function() {
$("#register").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var gender = $("#gender").val();
var  medicalaidinsurer= $("#medicalaidinsurer").val();
var MedicalAidscheme= $("#MedicalAidscheme").val();
var  occupation= $("#occupation").val();
var  nationaIDNumber= $("#nationaIDNumber").val();
var password = $("#password").val();
var cpassword = $("#cpassword").val();
if (name == '' || email == '' ||gender == '' || medicalaidinsurer == ''|| MedicalAidscheme== '' ||occupation  == ''||nationaIDNumber ==''||password == '' || cpassword == '') {
alert("Please fill all fields...!!!!!!");
} else if ((password.length) < 4) {
alert("Password should at least 4 character in length...!!!!!!");
}else if ((cpassword.length) < 4) {
alert("Password should at least 4 character in length...!!!!!!");
} else if (!(password).match(cpassword)) {
alert("Your passwords don't match. Try again?");
} else {
$.post("register.php", {
name1: name,
email1: email,
password1: password
}, function(data) {
if (data == 'You have Successfully Registered.....') {
$("form")[0].reset();
}
alert(data);
});
}
});
});