<?php

declare(strict_types=1);

class Categoria extends Tarefa{
    private string $nome;

    function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

}