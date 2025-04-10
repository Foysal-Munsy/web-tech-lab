document.getElementById("aForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const errors = [];
  const name = document.getElementById("uName").value;

  const errorList = document.getElementById("errorList");
  errorList.innerHTML = "";

  // Name validation
  const nameRegex = /^[A-Za-z.\-\s]+$/;
  if (!nameRegex.test(name)) {
    errors.push("Enter a valid name.");
  }

  // Email validation
  const email = document.getElementById("uEmail").value;
  const validEmail =
    email.endsWith("@gmail.com") ||
    email.endsWith("@yahoo.com") ||
    email.endsWith("@hotmail.com");
  if (!validEmail) {
    errors.push("Enter a valid email.");
  }

  // Password validation
  const passRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

  const pass = document.getElementById("pass").value;
  const conPass = document.getElementById("conPass").value;
  if (pass != conPass) {
    errors.push("Password is not match");
  }
  if (!passRegex.test(pass || conPass)) {
    errors.push("Enter a valid pass.");
  }

  //   date of birth
  const dob = document.getElementById("dob").value;
  const birthDate = new Date(dob);
  const today = new Date();
  let age = today.getFullYear() - birthDate.getFullYear();
  //   console.log(age);
  if (age < 18) {
    errors.push("Your age is under 18.");
  }

  //   country validation
  const country = document.getElementById("country").value;
  if (country === "") {
    errors.push("Select at least one country");
  }
  //   console.log(country);

  //   check box
  const checkbox = document.getElementById("box");
  const isChecked = checkbox.checked;
  if (isChecked === false) {
    errors.push("check the box first");
  }
  console.log(isChecked);
  // Show errors
  errors.forEach((err) => {
    const li = document.createElement("li");
    li.innerText = err;
    errorList.appendChild(li);
  });

  if (errors.length === 0) {
    alert("Form submitted successfully!");
  }
});
