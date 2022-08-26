const TextWriter = () => {
    let texto = document.querySelector(".textWriter");
    let textoArray = texto.innerHTML.split("");
    texto.innerHTML = "";
    textoArray.forEach((letra, i) => {
        setTimeout(() => {
            texto.innerHTML += letra;
        }, 110 * i);
    });
}

var body = document.getElementsByTagName("body")[0];

body.addEventListener("load", TextWriter(), false);