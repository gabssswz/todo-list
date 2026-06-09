<?php

declare(strict_types=1);

class Evento {
    private string $nome;
    private string $data;

    function __construct(string $nome, string $data) {
        $this->nome = $nome;
        $this->data = $data;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getData(): string {
        return $this->data;
    }

    public function exibirDetalhes(): void {
        echo 'Nome: ' . $this->nome;
        echo 'data: ' . $this->data;
    }

}