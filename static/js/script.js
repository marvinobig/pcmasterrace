const password = document.getElementById("password");
const repeat_password = document.getElementById("conPassword");

const form = document.getElementById("registerForm");

if (form) form.addEventListener("submit", validatePassword);

function validatePassword(e) {
  if (password.value != repeat_password.value) {
    e.preventDefault();
    alert("Passwords Need To Match");
  }
}
