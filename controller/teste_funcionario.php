<?php

    require "../model/Funcionario.php";
    require "../model/Data.php";

    #para se criar uma data e necessario passar em ordem: dia, mes e ano

    $dataPiloto = new Data(15,07,2018);
    $dataPilotoDois = new Data(14,02, 2018);

    # para se criar um funcionario e necessario passar em ordem as seguintes informacoes:
    # departamento, salario, data de entrada e cpf

    $funcionarioPiloto = new Funcionario("caixa",1500, $dataPiloto, "000.000.008-00");
    $funcionarioPilotoDois = new Funcionario("estoque",1400, $dataPilotoDois,"000.000.009-00");



    $funcionarioPiloto->recebeAumento();
    $funcionarioPilotoDois->recebeAumento();

    $funcionarioPiloto->calculaGanhoAnual();
    $funcionarioPilotoDois->calculaGanhoAnual();

    #$funcionarioPiloto->mostra();
    echo $funcionarioPiloto;
    echo "<br>";
    echo $funcionarioPilotoDois;