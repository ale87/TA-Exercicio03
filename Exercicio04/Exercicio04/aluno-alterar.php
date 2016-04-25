<?php 
require_once('escola.php');

$aluno = array('nome' => $_POST['nome'],
			   'ra' => $_POST['ra']);

$where = 'id = ' . $_GET['id'];

if($escola->update('alunos', $aluno, $where)){
	header('location: aluno-listar.php');
}

else{
	print '<p>Não houve alterações no registro do aluno!</p>';
	print "<p><a href='aluno-listar.php'>Listar CDs</a></p>";
}