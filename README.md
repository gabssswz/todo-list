# To do-list

# To Do List em PHP com Programação Orientada a Objetos

## Descrição

Este projeto consiste em um aplicativo de linha de comando desenvolvido em PHP para gerenciamento de tarefas do dia a dia. O sistema permite organizar atividades por categorias, acompanhar o status das tarefas e registrar eventos importantes, oferecendo uma solução simples para auxiliar na organização pessoal.

O projeto foi desenvolvido com foco na aplicação dos conceitos de Programação Orientada a Objetos (POO), atendendo aos requisitos propostos para a disciplina.

---

## Funcionalidades

* Cadastrar tarefas;
* Listar tarefas cadastradas;
* Marcar tarefas como concluídas;
* Remover tarefas;
* Organizar tarefas por categorias;
* Cadastrar eventos;
* Visualizar informações das tarefas e eventos;
* Interagir com o sistema por meio do terminal.

---

## Estrutura do Projeto

O sistema é composto pelas seguintes classes:

### Exibivel

Interface responsável por definir um comportamento comum para objetos que podem ter suas informações exibidas.

### Tarefa

Representa uma tarefa do usuário, contendo informações como título, descrição, status e categoria.

### Evento

Representa compromissos importantes relacionados às atividades do usuário.

### Categoria

Permite organizar as tarefas em diferentes grupos, como estudos, trabalho e atividades pessoais.

### Usuario

Representa o usuário do sistema e suas categorias cadastradas.

### ListaTarefas

Responsável pelo gerenciamento das tarefas, permitindo adicionar, remover, buscar e listar atividades.

---

## Conceitos de Orientação a Objetos Utilizados

### Encapsulamento

Todos os atributos das classes foram definidos como privados, garantindo maior segurança e controle sobre os dados.

### Tipagem Estrita

Todos os arquivos utilizam:

* `declare(strict_types=1);`

garantindo maior confiabilidade e evitando conversões implícitas de tipos.

### Promoção de Propriedades no Construtor

As propriedades das classes são declaradas diretamente nos construtores, tornando o código mais limpo e organizado.

### Associação

Existe uma associação entre as classes Tarefa e Categoria, permitindo que uma tarefa pertença a uma categoria.

### Agregação

A classe Usuario possui uma relação de agregação com Categoria, já que as categorias podem existir independentemente do usuário.

### Composição

A classe ListaTarefas possui uma relação de composição com Tarefa, pois as tarefas fazem parte da lista e dependem dela para existir.

### Interfaces

Foi utilizada a interface Exibivel, implementada pelas classes Tarefa e Evento.

### Polimorfismo

As classes Tarefa e Evento podem ser tratadas de forma uniforme através da interface Exibivel, permitindo diferentes implementações para um mesmo comportamento.

---

## Tecnologias Utilizadas

* PHP 8+
* Programação Orientada a Objetos
* Git
* GitHub

---

## Organização dos Arquivos

```
to-do-list/
│
├── src/
│   ├── Interfaces/
│   ├── Models/
│   ├── Services/
│   └── App.php
│
├── index.php
├── README.md
└── .gitignore
```

---

## Objetivo do Projeto

Aplicar os principais conceitos de Programação Orientada a Objetos em PHP por meio do desenvolvimento de uma aplicação simples e inspirada em uma necessidade do cotidiano.

---

## Integrantes

Gabriel Silva de Souza Claro  \
Gabriel Assis Costa de Souza  \
Juan Vincentini Cordovil  \
Luis Felipe de Oliveira Brasil

---

## Repositório

O código-fonte do projeto encontra-se disponível neste repositório do GitHub.
