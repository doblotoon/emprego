<?php

    class Funcionario{
        public $departamento;
        public $salario;
        public $dataEntrada;
        public $cpf;

        public function recebeAumento(){
            $this->salario += $this->salario*0.1;
        }

        public function calculaGanhoAnual(){
            return "$".$this->salario*13 .".00";
        }   
        
        public function mostra(){
            
        }

        function __construct($departamento, $salario, $dataEntrada, $cpf){
        # para fazer qualquer acao com o funcionaro e necessario que o seu
        # cadastro esteja completo, entao faz sentido colocar isso num construct
            $this->departamento = $departamento;
            $this->salario = $salario;
            $this->dataEntrada = $dataEntrada;
            $this->cpf = $cpf;
        }
    }

    #$meuTeste = new Funcionario("caixa",1500,"15/02/2018", "000.000.008-00");
    #echo $meuTeste->calculaGanhoAnual();