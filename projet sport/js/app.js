function toggleMenu() {
  const navbar = document.querySelector(".navbar");
  const burger = document.querySelector(".burger");
  burger.addEventListener("click", (e) => {
    navbar.classList.toggle("show-nav");
  });
}
toggleMenu();
function changeColorOnScroll() {
  const navbar = document.querySelector("nav");
  window.onscroll = () => {
    if (window.scrollY > 300) {
      navbar.classList.add("nav-active");
    } else {
      navbar.classList.remove("nav-active");
    }
  };
}
changeColorOnScroll();
if (
  window.location.href.indexOf(
    "file:///Users/othmanem1/Desktop/Gym-Project/html/contact.php"
  ) != -1
) {
  document.getElementById("myForm").addEventListener("submit", validForm);

  function validForm(e) {
    let nom = document.getElementById("nom");
    let prenom = document.getElementById("prenom");
    let telephone = document.getElementById("number");
    let email = document.getElementById("email");

    let myRegex = /^[a-zA-Z]+$/;
    let myRegexNumb = /^[.0-9 ]+$/;
    let myRegexMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (nom.value === "") {
      errorName.innerHTML = "Saisie ton Prenom";
      errorName.style.color = " red";
      e.preventDefault();
    } else if (!myRegex.test(nom.value)) {
      errorName.innerHTML = "Pas de chiffre dans ton prenom!!";
      errorName.style.color = "red";
      e.preventDefault();
    } else {
      errorName.innerHTML = "Bravo!!";
      errorName.style.color = "green";
    }
    if (prenom.value === "") {
      errorFirstName.innerHTML = "Saisie ton Nom";
      errorFirstName.style.color = " red";
      e.preventDefault();
    } else if (!myRegex.test(prenom.value)) {
      errorFirstName.innerHTML = "Pas de chiffre dans ton nom!!";
      errorFirstName.style.color = "red";
      e.preventDefault();
    } else {
      errorFirstName.innerHTML = "Bravo!!";
      errorFirstName.style.color = "green";
    }
    if (telephone.value === "") {
      errorTel.innerHTML = "Saisie ton numero de tel";
      errorTel.style.color = " red";
      e.preventDefault();
    } else if (!myRegexNumb.test(telephone.value)) {
      errorTel.innerHTML = "Pas de lettre dans ton 06!!";
      errorTel.style.color = "red";
      e.preventDefault();
    } else {
      errorTel.innerHTML = "Bravo!!";
      errorTel.style.color = "green";
    }
    if (email.value === "") {
      errorEmail.innerHTML = "Saisie ton e-mail";
      errorEmail.style.color = " red";
      e.preventDefault();
    } else if (!myRegexMail.test(email.value)) {
      errorEmail.innerHTML = "e-mail non valide";
      errorEmail.style.color = "red";
      e.preventDefault();
    } else {
      errorEmail.innerHTML = "Bravo!!";
      errorEmail.style.color = "green";
    }
  }
  validForm();
}
