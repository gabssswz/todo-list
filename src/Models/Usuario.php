<?php

declare(strict_types=1);

class Usuario {
    private string $nome;
    private array $categoria;

    function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function adicionarCategoria(string $adicionar): void {
        $this->adicionar = $adicionar;
    }

    public function removerCategoria(string $remover): void {
        $this->remover = $remover;
    }

    public function listarCategoria(): void {
        $this->listarcategoria = $listarcategoria;
    }
    
}