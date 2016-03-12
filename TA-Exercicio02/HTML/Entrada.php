<?php 
	class Entrada{
		
		private $nome;
		private $id;
		private $tipo;
		private $classCss;
		static $qtdeCampos;
		
		public function __construct($nome, $id, $tipo, $class){
			
			$this->nome = $nome;
			$this->id = $id;
			$this->tipo = $tipo;
			$this->classCss = $class;
			self::$qtdeCampos++;
		}
		
		public static function obtemQtdeCampos(){
			
			return self::$qtdeCampos;		
		}
		
		public function toHtml(){
			
			return '<input type="' . $this->tipo . '" id="' . $this->id . '" name="' . 
			       $this->nome . '" class="' . $this->classCss . '" required /><br/>';			   
		}
		
		public function __toString(){
			
			return $this->toHtml();		
		}
	}
?>