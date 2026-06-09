<?php

declare(strict_types=1);

class Usuario {
    private string $nome;
    private string $listadecategorias;

    function __construct(string $nome, string $listadecategorias) {
        $this->nome = $nome;
        $this->listadecategorias = $listadecategorias;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getListadecategorias(): string {
        return $this->listadecategorias;
    }

    public function setListadecategorias(string $listadecategorias): void {
        $this->listadecategorias = $listadecategorias;
    }

    public function adicionarCategoria(string $adicionar): void {
        $this->adicionar = $adicionar;
    }

    public function removerCategoria(string $remover): void {

    }

    public function listarCategoria(): void {
        
    }
    
}