<?php
    class Corrida {
        private $nome;
        private $local;
        private $categoria;

        public function __construct($nome, $local, $categoria) {
            $this-> nome = $nome;
            $this-> local = $local;
            $this-> categoria = $categoria;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getLocal() {
            return $this->local;
        }

        public function setLocal($local) {
            $this->local = $local;
        }

         public function getCategoria() {
            return $this->categoria;
        }

        public function setCategoria($categoria) {
            $this->categoria = $categoria;
        }

        public function adicionarPiloto($piloto) {
            $this->pilotos = $piloto;
        }

        public function listarPilotos() {
            return $this->pilotos;
        }
    }