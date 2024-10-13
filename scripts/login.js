let signUpButton = document.getElementById("signUpButton");
let signInButton = document.getElementById("signInButton");
let nameField = document.getElementById("nameField");
let title = document.getElementById("title");

signInButton.onclick = () => {
  nameField.style.maxHeight = "0";
  title.innerHTML = "Sign in";
  signUpButton.classList.add("disable");
  signInButton.classList.remove("disable");
};

signUpButton.onclick = () => {
  nameField.style.maxHeight = "60px";
  title.innerHTML = "Sign up";
  signUpButton.classList.remove("disable");
  signInButton.classList.add("disable");
};
