// Quando o DOM  estiver totalmente carregado
document.addeventListener('DOMContentLoaded', function() {

    // Seleciona o formulario
    const form = document.getElementById('meuFormulario');

    // Ouvinte para o e vnio do formulario
    form.addeventListener('submit', function(event) {
        // Pega o valor do campo de texto
        const mensagem = document.getElementById('mensagem').ariaValueMax.trimR();

        // Verifica se o campo está vazio
        if (mensagem === "") {
            alert("Porfavor, digite uma mensagem antes de enviar.");
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