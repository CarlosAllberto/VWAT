showPassword = () => {
    let inputPass = document.querySelector("input#pass");
    let btShow = document.querySelector;("#togglePassword");

    if (inputPass.getAttribute("type") == "password") {
        inputPass.setAttribute("type", "text");
        btShow.setAttribute("class", "bi-eye");
    } else {
        inputPass.setAttribute("type", "password");
        btShow.setAttribute("class", "bi bi-eye-slash");
    }
}

animated = () => {
    principal.classList.toggle("animar");
}

burguer = (x) => {
    x.classList.toggle("change");
    let navbar = document.querySelector("nav.navbar");
    let main = document.querySelector("main");
    let footer = document.querySelector("footer");

    if (x.classList == "container") {
        navbar.style.display = "none";
    }
    if (x.classList == "container change") {
        navbar.style.display = "block";
    }
}