<?php
    class Carro{
        private $marca;
        private $cor;
        private $placa;
        private $modelo;

        public function getMarca(){
            return $this->marca;
        }

        public function setMarca($argMarca){
            $this->marca = $argMarca;
        }

        public function getCor(){
            return $this->cor;
        }

        public function setCor($argCor){
            $this->cor = $argCor;
        }

        public function getPlaca(){
            return $this->placa;
        }

        public function setPlaca($argPlaca){
            $this->placa = $argPlaca;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($argModelo){
            $this->modelo = $argModelo;
        }

        public function imprimir(){
            echo "<strong>CARRO</strong> <br/>Marca: " . $this->getMarca() . "<br/>Modelo: " . $this->getModelo() .
            "<br/>Cor: " . $this->getCor() . "<br/>Placa: " . $this->getPlaca();
        }
    }
