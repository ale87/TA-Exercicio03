<?php 
	namespace HTML;
	require('Entrada.php');
	
	class Formulario{
		
		private $nome;
		private $destino;
		private $metodo;
		private $camposEntrada;
		
		public function __construct($nome, $destino, $metodo, $entrada){
			
			$this->nome = $nome;
			$this->destino = $destino;
			$this->metodo = $metodo;
			$this->camposEntrada = $entrada;		
		}
		
		public function adicionarCampo($entrada){
			
			foreach($entrada as $ent){
				if(get_class($ent) != 'Entrada'){
					echo 'Favor informar um vetor do tipo Entrada!';
					return;
				}
			}		
			$this->camposEntrada = $ent;			
		}
		
		public function toHtml(){
			
			$html = '<form name="' . $this->nome . '" action="' . $this->destino . '" 
					method="' . $this->metodo . '">';
			foreach($this->camposEntrada as $ent){
				$html .= $ent->toHtml();
			}
			$html .= '<input type="submit" id="submit" name="submit" value="Confirmar"></form>';
			return $html;
		}
		
		public function __toString(){
			
			return $this->toHtml();		
		}	
	}
?>