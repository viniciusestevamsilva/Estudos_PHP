// Quando o DOM  estiver totalmente carregado
document.addEventListener('DOMContentLoaded', function() {

    // Seleciona o formulario
    const form = document.getElementById('meuFormulario');

    // Ouvinte para o e envio do formulario
    form.addEventListener('submit', function(event) {
        // Pega o valor do campo de texto
        const mensagem = document.getElementById('mensagem').value.trim();

        // Verifica se o campo está vazio
        if (mensagem === "") {
            alert("Por favor, digite uma mensagem antes de enviar.");
            event.preventDefault(); // Impede o envio do formulario
            return;
        }

        // Pergunta se o usuario quer mesmo enviar
        const confirmar = confirm("Deseja realmente enviar esta mensagem?");
        if (!confirmar) {
            event.preventDefault(); // Cancela o envio
        }
    });
});