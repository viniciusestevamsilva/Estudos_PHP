<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sistema de Tarefas</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <h1>Minhas Tarefas</h1>

    <!-- Formulario para adicionar nova tarefa -->
    <input type="text" id="novaTarefa" placeholder="Digite uma nova tarefa...">
    <button id="btnAdicionar">Adicionar</button>

    <!-- Lista de tarefas -->
    <ul id="listaTarefas"></ul>

    <script>
        // Função para buscar e exibir as tarefas
        async function carregarTarefas() {
            const resposta = await fetch("../api/listar.php")
            const tarefas = await resposta.json();

            const lista = document.getElementById("listaTarefas");
            lista.innerHTML = ""; // Limpa antes de listar

            tarefas.forEach(t => {
                const li = document.createElement("li");
                li.textContent = t.titulo;

                if (t.concluida == 1) {
                    li.style.textDecoration = "line-through";
                }

                // Botão de concluir
                const btnConcluir = document.createElement("button");
                btnConcluir.textContent = t.concluida == 1 ? "Desfazer" : "Concluir";
                btnConcluir.onclick = async () => {
                    await fetch("../api/atualizar.php", {
                        method: "POST",
                        body: JSON.stringify({
                            id: t.id,
                            concluida: t.concluida == 1 ? 0 : 1
                        })
                    });
                    carregarTarefas();
                };

                // Botão de editar 
                const btnEditar = document.createElement("button");
                btnEditar.textContent = "Editar";
                btnEditar.onclick = async () => {
                    // Abre prompt para editar o texto
                    const novoTitulo = prompt("Editar tarefa:", t.titulo);
                    if (novoTitulo && novoTitulo.trim() !== "") {
                        await fetch("../api/editar.php", {
                            method: "POST",
                            body: JSON.stringify({
                                id: t.id,
                                titulo: novoTitulo
                            })
                        });
                        carregarTarefas();
                    }
                };

                // Botão de excluir
                const btnExcluir = document.createElement("button");
                btnExcluir.textContent = "Excluir";
                btnExcluir.onclick = async () => {
                    await fetch("../api/excluir.php", {
                        method: "POST",
                        body: JSON.stringify({
                            id: t.id
                        })
                    });
                    carregarTarefas();
                };
                // Adiciona tudo no item da lista
                    li.append(" ", btnConcluir, " ", btnEditar, " ", btnExcluir);
                    lista.append(li);
            });
        }

        // Adicionar nova tarefa 
        document.getElementById("btnAdicionar").onclick = async () => {
            const titulo = document.getElementById("novaTarefa").value;
            if (titulo.trim() === "") return;

            await fetch("../api/adicionar.php", {
                method: "POST",
                body: JSON.stringify({
                    titulo
                })
            });
            document.getElementById("novaTarefa").value = "";
            carregarTarefas();
        };

        // Carrega ao abrir a pagina
        carregarTarefas();
    </script>
</body>

</html>