<?php
#sempre vai ser uma classe por arquivo?
    class Data{

        public $dia;
        public $mes;
        public $ano;


        public function mostra(){
            return "{$this->dia}/{$this->mes}/{$this->ano}";
        }

        public function  __toString(){
            return $this->mostra();
        }

        public function __construct($dia, $mes, $ano){
            $this->dia = $dia;
            $this->mes = $mes;
            $this->ano = $ano;

        }

    }
    