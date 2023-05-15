let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

// ....................................menu.........menu......menu...........................
const loginForm = document.getElementById("login-form");
const sendOtpBtn = document.getElementById("send-otp-btn");

// Function to generate and send OTP to user's phone
function sendOtp() {
	const phone = document.getElementById("phone").value;
	
	// Perform phone number validation here
	// Example: check if phone number is valid and belongs to the user
	
	// Generate and send OTP using a third-party service or API
	
	alert("OTP sent to " + phone);
}

sendOtpBtn.addEventListener("click", function() {
	sendOtp();
});

loginForm.addEventListener("submit", function(event) {
	event.preventDefault();
	
	const otp = document.getElementById("otp").value;
	
	// Perform OTP verification here
	// Example: check if OTP is correct
	
	alert("Login successful!");
	// Redirect to dashboard page
	window.location.href = "dashboard.html";
});

  