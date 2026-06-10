<?php

declare(strict_types=1);

class Usuario {
    private string $nome;
    private array $categorias;

    function __construct(string $nome) {
        $this->nome = $nome;
        $this->categorias = [];
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function adicionarCategoria(string $categoria): void {
        if (!in_array($categoria, $this->categorias)) {
            $this->categorias[] = $categoria;
        }
    }

    public function removerCategoria(string $categoria): void {
        $chave = array_search($categoria, $this->categorias);
        if ($chave !== false) {
            unset($this->categorias[$chave]);
            $this->categorias = array_values($this->categorias);
        }
    }

    public function listarCategorias(): array {
        return $this->categorias;
    }

    public function temCategoria(string $categoria): bool {
        return in_array($categoria, $this->categorias);
    }
}

?>
