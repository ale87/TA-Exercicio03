<?php
	namespace Clinica;

	class Formulario{
		
		private $consultaData;
		private $consultaHoraInicio;
		private $consultaHoraTermino;
		private $pacienteNome;
		private $pacienteNascimento;
		private $pacienteQueixa;
		private $medicoNome;
		private $medicoDiagnostico;
		
		public function __construct($data, $inicio, $termino, $nome, $nascimento,
									$queixa, $medico, $diagnostico){
			
			$this->consultaData = $data;
			$this->consultaHoraInicio = $inicio;
			$this->consultaHoraTermino = $termino;
			$this->pacienteNome = $nome;
			$this->pacienteNascimento = $nascimento;
			$this->pacienteQueixa = $queixa;
			$this->medicoNome = $medico;
			$this->medicoDiagnostico = $diagnostico;			
		}
		
		public function obterIdade(){
			
			date_default_timezone_set('America/Sao_Paulo');
			$dataAtual = date_create(date('Y-m-d'));
			$dataNascimento = date_create($this->pacienteNascimento);
			$idade = date_diff($dataAtual,$dataNascimento);
			return $idade->y;
		}
		
		public function obterDuracaoConsulta(){
			
			$hora_ini = substr($this->consultaHoraInicio, 0, 2);
			$hora_fim = substr($this->consultaHoraTermino, 0, 2);
			$min_ini = substr($this->consultaHoraInicio, 3);
			$min_fim = substr($this->consultaHoraTermino, 3);
			if($hora_ini > $hora_fim){
				$hora_fim+=24;
			}
			if($min_ini > $min_fim){
				$min_fim+=60;
			}
			$hora = $hora_fim - $hora_ini;
			$min =  $min_fim - $min_ini;			
			return $hora . 'h' . $min . 'm';
			//$idade = date_diff($this->consultaHoraTermino, $this->consultaHoraInicio);
			//return $idade->h . 'h' . $idade->i . 'm' . $idade->s . 's';			
		}		 
	}
?>