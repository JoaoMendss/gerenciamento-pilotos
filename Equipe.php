<?php
    class Equipe {
        private $nome;
        private $nacionalidade;
        private $carro;

        public function __construct($nome, $nacionalidade, $carro) {
            $this-> nome = $nome;
            $this-> nacionalidade = $nacionalidade;
            $this-> carro = $carro;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNacionalidade() {
            return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }

         public function getCarro() {
            return $this->carro;
        }

        public function setCarro($carro) {
            $this->carro = $carro;
        }
        
        public function exibirDetalhes() {
            return "Equipe: " . $this->nome . " | Nacionalidade: " . $this->nacionalidade . " | Carro: " . $this->carro->getModelo();
        }
    }