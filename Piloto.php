<?php
    class Piloto {
        private $nome;
        private $idade;
        private $nacionalidade;
        private $equipe;

        public function __construct($nome, $idade, $nacionalidade, $equipe) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->nacionalidade = $nacionalidade;
            $this->equipe = $equipe;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function getNacionalidade() {
            return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }

        public function getEquipe() {
            return $this->equipe;
        }

        public function setEquipe($equipe) {
            $this->equipe = $equipe;
        }

        public function participarCorrida($corrida) {
            return $this->nome . " está participando da corrida " . $corrida->getNome();
        }
    }
