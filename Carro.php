<?php
    class Carro {
        private $modelo;
        private $potencia;

        public function __construct($modelo, $potencia) {
            $this->modelo = $modelo;
            $this->potencia = $potencia;
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        public function getPotencia() {
            return $this->potencia;
        }

        public function setPotencia($potencia) {
            $this->potencia = $potencia;
        }

        public function adicionarPiloto($piloto) {
            $this->pilotos = $piloto;
        }

        public function listarPilotos() {
            return $this->pilotos;
        }
    }
