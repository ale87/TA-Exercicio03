<?php 
require_once('escola.php');

$where = 'id = ' . $_GET['id'];

if($escola->delete('alunos', $where)){
	header('location: aluno-listar.php');	
}

else{
	print '<p>Não existe o registro do aluno para exclusão!</p>';
	print "<p><a href='aluno-listar.php'>Listar alunos</a></p>";
}