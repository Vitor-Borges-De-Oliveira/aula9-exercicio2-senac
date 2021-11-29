<?php

require_once('conexaocurso2.php');

$curso="C++";
$ch="120"; //carga horaria
$docente="Juan";
$escola="Senac";
$endereco="CG-RJ";
$tdcurso="6 meses"; //tempo de curso
$mensal=179.99;

$sql = "insert into tblcursos (curso,ch,docente,escola,endereco,tdcurso,mensal)
        values ('$curso','$ch','$docente','$escola','$endereco','$tdcurso','$mensal')";

$connect->query($sql);