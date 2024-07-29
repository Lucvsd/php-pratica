<?php

    interface EquipamentoEletronicoInterface{
        public function ligar();
        public function desligar();
    }
    
    //________________________________________

    class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta() {
            echo 'Abrir a porta';
        }

        public function ligar() {
            echo 'Ligar';
        }

        public function desligar() {
            echo 'Desligar';
        }
    }

    class TV implements EquipamentoEletronicoInterface {
        public function trocarCanal() {
            echo 'Trocar canal';
        }

        public function ligar() {
            echo 'Ligar';
        }

        public function desligar() {
            echo 'Desligar';
        }
    }

    $x = new Geladeira();
    $y = new TV(); 

    //________________________________________

    interface ManiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }

    class Humano implements ManiferoInterface, TerrestreInterface {
        public function andar() {
            echo 'Andar';
        }

        public function respirar() {
            echo 'Respirar';
        }
        
        public function conversar() {
            echo 'Conversar';
        }
    }

    class Humano implements ManiferoInterface, AquaticoInterface {
        public function respirar() {
            echo 'Respirar';
        }

        public function nadar() {
            echo 'Nadar';
        }

        public function esguichar() {
            echo 'Esguichar';
        }
    }

    //________________________________________

    interface AnimalInterface {
        public function comer();
    }

    interface AveInterface extends AnimalInterface {
        public function voar();
    }

    class Papagaio implements AveInterface {
        public function voar() {
            echo 'Voar'
        }
        
        public function comer() {
            echo 'Comer'
        }
    }
?>