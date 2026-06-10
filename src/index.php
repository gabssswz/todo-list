<?php

declare(strict_types=1);

require_once("src/Models/Tarefa.php");

$tarefas = [];

function mostrarMenu(): void
{
    echo "\n=============== TO-DO LIST ===============\n";
    echo "1. Criar tarefa\n";
    echo "2. Ver tarefas\n";
    echo "3. Ver detalhes de uma tarefa\n";
    echo "4. Marcar tarefa como concluída\n";
    echo "0. Sair\n";
    echo "Escolha uma opção: ";
}

function mostrarTarefas(array $tarefas): void
{
    if ($tarefas === []) {
        echo "\nNenhuma tarefa cadastrada ainda.\n";
        return;
    }

    echo "\n--- Suas tarefas ---\n";
    foreach ($tarefas as $indice => $tarefa) {
        $status = $tarefa->getConcluida() ? 'Concluída' : 'Em andamento';
        echo ($indice + 1) . ". " . $tarefa->getTitulo() . " [" . $status . "]\n";
    }
}

while (true) {
    mostrarMenu();
    $opcao = trim((string) fgets(STDIN));

    switch ($opcao) {
        case '1':
            echo "\nTítulo da tarefa: ";
            $titulo = trim((string) fgets(STDIN));
            echo "Descrição: ";
            $descricao = trim((string) fgets(STDIN));
            echo "Categoria: ";
            $categoria = trim((string) fgets(STDIN));

            $tarefa = new Tarefa($titulo, $descricao, $categoria, false);
            $tarefas[] = $tarefa;

            echo "\nTarefa criada com sucesso!\n";
            break;

        case '2':
            mostrarTarefas($tarefas);
            break;

        case '3':
            mostrarTarefas($tarefas);
            if ($tarefas === []) {
                break;
            }

            echo "\nQual tarefa deseja ver? (número): ";
            $numero = (int) trim((string) fgets(STDIN));

            if (!isset($tarefas[$numero - 1])) {
                echo "\nNúmero inválido.\n";
                break;
            }

            $tarefa = $tarefas[$numero - 1];
            echo "\n--- Detalhes da tarefa ---\n";
            echo "Título: " . $tarefa->getTitulo() . PHP_EOL;
            echo "Descrição: " . $tarefa->getDescricao() . PHP_EOL;
            echo "Categoria: " . $tarefa->getCategoria() . PHP_EOL;
            echo "Status: " . ($tarefa->getConcluida() ? 'Concluída' : 'Em andamento') . PHP_EOL;
            break;

        case '4':
            mostrarTarefas($tarefas);
            if ($tarefas === []) {
                break;
            }

            echo "\nQual tarefa deseja marcar como concluída? (número): ";
            $numero = (int) trim((string) fgets(STDIN));

            if (!isset($tarefas[$numero - 1])) {
                echo "\nNúmero inválido.\n";
                break;
            }

            $tarefas[$numero - 1]->concluir();
            echo "\nTarefa marcada como concluída.\n";
            break;

        case '0':
            echo "\nEncerrando o programa...\n";
            exit(0);

        default:
            echo "\nOpção inválida.\n";
            break;
    }

    echo "\nPressione Enter para continuar...";
    fgets(STDIN);
}
