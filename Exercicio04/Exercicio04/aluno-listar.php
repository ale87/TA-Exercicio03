<?php 
require_once('escola.php');

$aluno = $escola->fetchAll('SELECT * FROM alunos');

print '<h1>Tabela de Alunos</h1>';
print "<p><a href='formulario-aluno.php'><h3>Inserir novo aluno</h3></a></p>";
print "<table border='1px'>";
print '<tr>';
print '<th><b>Nome</b></th>';
print '<th><b>RA</b></th>';
print '<th><b></b></th>';
print '</tr>';

foreach($aluno as $alu){
	print '<tr>';
	print "<td>$alu->nome</td>";
	print "<td>$alu->ra</td>";
	print "<td><a href='formulario-aluno.php?id=$alu->id'>Editar</a> |
		       <a href='aluno-deletar.php?id=$alu->id'>Excluir</a>";
	print '</tr>'; 
}

print '</table>';

