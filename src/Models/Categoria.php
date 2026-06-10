<?php

declare(strict_types=1);

class Categoria {
    private string $nome;
    private string $descricao;
    private array $tarefas;

    function __construct(string $nome, string $descricao = "") {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->tarefas = [];
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }

    public function adicionarTarefa($tarefa): void {
        $this->tarefas[] = $tarefa;
    }

    public function removerTarefa($tarefa): void {
        $chave = array_search($tarefa, $this->tarefas);
        if ($chave !== false) {
            unset($this->tarefas[$chave]);
            $this->tarefas = array_values($this->tarefas);
        }
    }

    public function listarTarefas(): array {
        return $this->tarefas;
    }

    public function contarTarefas(): int {
        return count($this->tarefas);
    }
}

?>
