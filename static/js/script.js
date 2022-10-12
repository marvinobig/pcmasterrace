const password = document.getElementById("password");
const repeat_password = document.getElementById("conPassword");

const form = document.getElementById("registerForm");
form.addEventListener("submit", validatePassword);

function validatePassword(e) {
  e.preventDefault();

  if (password.value != repeat_password.value) {
    alert("Passwords Need To Match");
  }
}
