<?php 
require_once('escola.php');

$aluno = array('nome' => $_POST['nome'],
			   'ra' => $_POST['ra']);

if($escola->insert('alunos', $aluno)){
	header('location: aluno-listar.php');
}

else{
	print '<p>Não foi possível incluir o registro do aluno!</p>';
	print "<p><a href='aluno-listar.php'>Listar alunos</a></p>";
}