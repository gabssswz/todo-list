<?php

declare(strict_types=1);

class Tarefa {
    private string $titulo;
    private string $descricao;
    private bool $concluida;
    private string $categoria;

    function __construct(string $titulo, string $descricao, string $categoria, bool $concluida) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->categoria = $categoria;
        $this->concluida = $concluida;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }

    public function getCategoria(): string {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): void {
        $this->categoria = $categoria;
    }

    public function getConcluida(): bool {
        return $this->concluida;
    }

    public function setConcluida(bool $concluida): void {
        $this->concluida = $concluida;
    }

    public function concluir(): void {
        $this->concluir = true;
    }

    public function exibirDetalhes(): void {
        echo 'Titulo: ' . $this->titulo;
        echo 'Descrição: ' . $this->descricao;
        echo 'Categoria: ' . $this->categoria;
        echo 'Concluida: ' . $this->concluida;
    }
}