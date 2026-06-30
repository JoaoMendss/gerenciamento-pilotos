<?php
    require 'Piloto.php';
    require 'Pontuavel.php';

    class PilotoVeterano extends Piloto implements Pontuavel {
        private $titulos;
        private $anosCarreira;

        public function __construct($nome, $idade, $nacionalidade, $equipe, $titulos, $anosCarreira) {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setNacionalidade($nacionalidade);
            $this->setEquipe($equipe);
            $this->titulos = $titulos;
            $this->anosCarreira = $anosCarreira;
        }

        public function getTitulos() {
            return $this->titulos;
        }

        public function setTitulos($titulos) {
            $this->titulos = $titulos;
        }

        public function getAnosCarreira() {
            return $this->anosCarreira;
        }

        public function setAnosCarreira($anosCarreira) {
            $this->anosCarreira = $anosCarreira;
        }

        public function calcularPontos() {
            return $this->titulos * 25;
        }

        public function exibirPontuacao() {
            return $this->getNome() . " possui " . $this->calcularPontos() . " pontos acumulados.";
        }

        public function exibirPerfil() {
            return "Piloto Veterano: " . $this->getNome() . " | Títulos: " . $this->titulos . " | Anos de Carreira: " . $this->anosCarreira;
        }
    }
