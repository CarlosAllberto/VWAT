const TextWrite = () => {
    let texto = document.querySelector(".textWrite");
    let textoArray = texto.innerHTML.split("");
    texto.innerHTML = "";
    textoArray.forEach((letra, i) => {
        setTimeout(() => {
            texto.innerHTML += letra;
        }, 75 * i);
    });

}