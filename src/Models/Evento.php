<?php

declare(strict_types=1);

require_once 'src/Interfaces/Exibir.php';

class Evento implements Exibivel {
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
        echo 'Nome: ' . $this->nome . PHP_EOL;
        echo 'Data: ' . $this->data . PHP_EOL;
    }

    public function listar(): void {
        $this->exibirDetalhes();
    }

}