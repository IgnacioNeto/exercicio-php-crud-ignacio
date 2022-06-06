// Acessando todos os links com a classe excluir
const links = document.querySelectorAll('.excluir');

for (let i = 0; i < links.length; i++ ) {
links[i].addEventListener("click", function(event) {
    event.preventDefault();

    let resposta = confirm("Deseja realmente excluir?");
    if(resposta == true) {
    location.href = links[i].getAttribute('href');
    }
});
}
// _______________________________________________________________
function pegarNota(){
    let nota1 = document.getElementById('primeira').value;
    let nota2 = document.getElementById('segunda').value;

    nota1 = parseFloat(nota1);
    nota2 = parseFloat(nota2);

    let resultado = ((nota1 + nota2)/2).toFixed(1);

    document.getElementById('media').value = resultado;
    situacaoNota = verSituacao(resultado);
    document.getElementById('situacao').value = novoResultado;

}
// _______________________________________________________________
function verSituacao(resultado) {
    if(resultado >=7) {
        novoResultado = "Aprovado";

    } else {
        novoResultado = "Reprovado";
    }
    return novoResultado;
}


// _______________________________________________________________
