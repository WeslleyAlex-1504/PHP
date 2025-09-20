document.addEventListener("DOMContentLoaded", () => {
    const botao = document.querySelector("#gatilho")

    botao.addEventListener("click", buscarDados)
})

async function buscarDados () {
    const resultado = await fetch("http://localhost:8000/evento",{
        headers: {"Accept": "application/json"}
    });
    const corpo = await resultado.json();

    const cabecalho = document.querySelector("#info-evento");

    cabecalho.textContent = corpo.message;
}