const btShow = document.querySelector("#showPassword");
showPassword = () => {
    let inputPass = document.querySelector("input#password");
    let eyePassword = document.querySelector("#eyePassword")
    if (inputPass.getAttribute("type") == "password") {
        inputPass.setAttribute("type", "text");
        eyePassword.setAttribute("class", "bi bi-eye-slash");
    } else {
        inputPass.setAttribute("type", "password");
        eyePassword.setAttribute("class", "bi bi-eye");
    }
}
btShow.addEventListener("click", () => {
    showPassword();
})

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

const sidebar = document.querySelector("#sidebar");
sidebar.addEventListener("click", () => {
    let address = document.querySelectorAll(".sidebar__address");
    sidebar.style.width = "13rem";
    address.forEach(e => {
        e.style.display = "block";
    });
});