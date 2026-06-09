<?php

declare(strict_types = 1);
require_once 'Tarefa.php';
require_once 'Usuario.php';

    class ListaTarefa {
        public array $tarefas;
        public array $usuarios;
        
        public function __construct(array $tarefas, array $usuario) {
            $this->tarefas = $tarefas;
            $this->usuarios = $usuario;
        }

        public function listarTarefas() : void {
            for( $i = 0; $i < count($this->tarefas); $i++ ) {
                echo 'Suas tarefas sao: ' . $this->tarefas[$i] . PHP_EOL;
        }
        }
    }

?>