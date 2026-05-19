# 🏎️ Sistema de Gerenciamento de Automobilismo

Sistema desenvolvido em PHP com Programação Orientada a Objetos para gerenciamento de informações de automobilismo.

## 📌 Descrição

O sistema organiza informações sobre:

- Pilotos
- Equipes
- Carros
- Categorias
- Corridas

Ele permite cadastrar e relacionar esses elementos, facilitando o controle e a organização de dados de competições automobilísticas.

---

## 🚀 Funcionalidades

✅ Cadastro de pilotos  
✅ Associação entre piloto e equipe  
✅ Relacionamento entre equipe e carro  
✅ Organização por categoria  
✅ Registro de corridas  
✅ Exibição detalhada das informações  
✅ Interface estilizada com CSS  
✅ Simulação de participação em corridas

---

## 🧩 Estrutura de Classes

### **Piloto**
Representa o competidor.

**Atributos:**
- Nome
- Idade
- Nacionalidade
- Equipe

**Métodos:**
- participarCorrida()

---

### **Equipe**
Representa a equipe de corrida.

**Atributos:**
- Nome
- Nacionalidade
- Carro

**Métodos:**
- exibirDetalhes()

---

### **Carro**
Representa o veículo utilizado.

**Atributos:**
- Modelo
- Potência

**Métodos:**
- adicionarPiloto()
- removerPiloto()
- listarPilotos()

---

### **Categoria**
Define o tipo de competição.

**Atributos:**
- Tipo
- Regras

**Métodos:**
- adicionarEquipe()
- listarEquipes()

---

### **Corrida**
Representa um evento de corrida.

**Atributos:**
- Nome
- Local
- Categoria

**Métodos:**
- adicionarPiloto()
- listarPilotos()

---

## 🔗 Relacionamentos UML

### Associação
- Piloto ↔ Corrida
- Corrida ↔ Categoria

### Agregação
- Equipe ↔ Piloto
- Categoria ↔ Equipe

### Composição
- Equipe ↔ Carro

---

## 🛠️ Tecnologias Utilizadas

- PHP
- HTML5
- Programação Orientada a Objetos

---

## 📂 Estrutura do Projeto

```bash
/
├── index.php
├── Piloto.php
├── Equipe.php
├── Carro.php
├── Categoria.php
├── Corrida.php
└── README.md
```

---

## ▶️ Como Executar

1. Clone o repositório:

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
```

2. Coloque o projeto em um servidor local (XAMPP/WAMP)

3. Execute no navegador:

```bash
http://localhost/seu-projeto
```

---

## 🎯 Exemplo de Saída

O sistema exibe informações como:

- Dados do carro
- Informações da equipe
- Dados do piloto
- Categoria da competição
- Informações da corrida
- Status de participação

---

## 👨‍💻 Autores

João Luiz e Livia Piemontez Brum

Projeto acadêmico desenvolvido para estudo de Programação Orientada a Objetos.
