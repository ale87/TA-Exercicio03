<?php
require('/Clinica/Formulario.php');
use \Clinica\Formulario;

$data = $_POST['consultaData'];
$inicio = $_POST['consultaHoraInicio'];
$fim = $_POST['consultaHoraTermino'];
$nome = $_POST['pacienteNome'];
$nascimento = $_POST['pacienteNascimento'];
$queixa = $_POST['pacienteQueixa'];
$medico = $_POST['medicoNome'];
$diagnostico = $_POST['medicoDiagnostico'];
$form = new Formulario($data, $inicio, $fim, $nome, $nascimento, $queixa, $medico, $diagnostico);
//
echo 'DADOS DA CONSULTA <br/>
     Nome do paciente: ' . $_POST['pacienteNome'] . '<br/>
	 Idade do paciente: ' . $form->obterIdade() . '<br/>
	 Duração da consulta: ' . $form->obterDuracaoConsulta();
?>