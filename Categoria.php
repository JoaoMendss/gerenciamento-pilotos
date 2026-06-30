<?php
    class Categoria {
        private $tipo;
        private $regras;

        public function __construct($tipo, $regras) {
            $this->tipo = $tipo;
            $this->regras = $regras;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function getRegras() {
            return $this->regras;
        }

        public function setRegras($regras) {
            $this->regras = $regras;
        }

        public function adicionarEquipe($equipe) {
            $this->equipes = $equipe;
        }

        public function listarEquipes() {
            return $this->equipes;
        }
    }
