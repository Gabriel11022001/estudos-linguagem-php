<?php

require_once "Departamento.php";

try {
    $funcionario1 = new Funcionario(
        "Gabriel",
        4200,
        "13.456.789-99",
        new DateTime("22-09-2021")
    );
    $funcionario2 = new Funcionario(
        "Pedro",
        4100,
        "13.567.987-09",
        new DateTime("21-07-2021")
    );
    echo $funcionario1;
    echo $funcionario2;
    $funcionario3 = new Funcionario(
        "José",
        // 0,
        2300,
        "123.543.344-98",
        new DateTime("11-09-2020")
    );
    echo $funcionario3;
    $funcionario1->aumentarSalario(124);
    echo $funcionario1;
    $funcionario2->aumentarSalario(300);
    echo $funcionario2;
    // $funcionario3->aumentarSalario(0);
    // $funcionario3->aumentarSalario(-12);
    $departamentoDeTI = new Departamento("Departamento de TI");
    $departamentoDeRH = new Departamento("Departamento de RH");
    $departamentoDeTI->registrarFuncionario($funcionario1);
    $departamentoDeRH->registrarFuncionario($funcionario2);
    $departamentoDeRH->registrarFuncionario($funcionario3);
    $departamentoDeRH->apresentarFuncionariosDepartamento();
    $departamentoDeTI->apresentarFuncionariosDepartamento();
} catch (Exception $e) {
    echo $e->getMessage() . "</br>";
}