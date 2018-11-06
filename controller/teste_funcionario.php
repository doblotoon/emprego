<?php

require "../model/Funcionario.php";


# para se criar um funcionario e necessario passar em ordem as seguintes informacoes:
# departamento, salario, data de entrada e cpf

$funcionarioPiloto = new Funcionario("caixa",1500,"15/02/2018", "000.000.008-00");

$funcionarioPilotoDois = new Funcionario("estoque",1400,"14/07/2018","000.000.009-00"); 

$funcionarioPiloto->recebeAumento();
$funcionarioPilotoDois->recebeAumento();

$funcionarioPiloto->calculaGanhoAnual();
$funcionarioPilotoDois->calculaGanhoAnual();
