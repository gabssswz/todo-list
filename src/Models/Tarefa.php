<?php

declare(strict_types=1);

require_once __DIR__ . '/../Interfaces/Exibir.php';

class Tarefa implements Exibivel {
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
        $this->concluida = true;
    }

    public function exibirDetalhes(): void {
        echo 'Titulo: ' . $this->titulo . PHP_EOL;
        echo 'Descrição: ' . $this->descricao . PHP_EOL;
        echo 'Categoria: ' . $this->categoria . PHP_EOL;
        echo 'Concluida: ' . ($this->concluida ? 'Sim' : 'Não') . PHP_EOL;
    }

    public function listar(): void {
        $this->exibirDetalhes();
    }
}