<?php
    require 'Pontuavel.php';

    class Construtor implements Pontuavel {
        private $nome;
        private $pais;
        private $pontos;

        public function __construct($nome, $pais, $pontos) {
            $this->nome = $nome;
            $this->pais = $pais;
            $this->pontos = $pontos;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getPais() {
            return $this->pais;
        }

        public function setPais($pais) {
            $this->pais = $pais;
        }

        public function getPontos() {
            return $this->pontos;
        }

        public function setPontos($pontos) {
            $this->pontos = $pontos;
        }

        public function calcularPontos() {
            return $this->pontos;
        }

        public function exibirPontuacao() {
            return "Construtor " . $this->nome . " possui " . $this->pontos . " pontos no campeonato.";
        }
    }
