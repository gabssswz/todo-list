<?php
declare (strict_types= 1);

require_once("src/Models/Categoria.php");
require_once("src/Models/Evento.php");
require_once("src/Models/ListaTarefas.php");
require_once("src/Models/Tarefa.php");
require_once("src/Models/Usuario.php");

$tarefa = new $tarefa();


echo '===============To-do List==============='. PHP_EOL;
echo 'Crie uma tarefa: ';
$nomeTarefa = trim(fgets(STDIN));
$tarefa = new Tarefa();
$tarefa->setDescricao($nomeTarefa);
echo 'Tarefa adicionada: ' . $tarefa->getDescricao() . PHP_EOL;
echo ''. $tarefa . PHP_EOL;



?>