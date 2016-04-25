<?php 
require('escola.php');

$action = 'aluno-inserir.php';
$id = null;
$nome = null;
$ra = null;

if(isset($_GET['id'])){
	$sql = "SELECT * FROM alunos WHERE id=?";
	if($aluno = $escola->fetchRow($sql, $_GET['id'])){
		$id = $aluno->id;
		$nome = $aluno->nome;
		$ra = $aluno->ra;
	}
	$action = "aluno-alterar.php?id=$aluno->id";
}

$form = new Zend_Form();
$form->setAction($action);
$form->setMethod('POST');

$element = new Zend_Form_Element_Text('id');
$element->setLabel('ID: ');
$element->setAttrib('readonly', 'readonly');
$element->setValue($id);
$form->addElement($element);

$element = new Zend_Form_Element_Text('nome');
$element->setLabel('Nome: ');
$element->setValue($nome);
$form->addElement($element);

$element = new Zend_Form_Element_Text('ra');
$element->setLabel('RA: ');
$element->setValue($ra);
$form->addElement($element);

$element = new Zend_Form_Element_Submit('Gravar');
$form->addElement($element);

$form->setView(new Zend_View);
print $form; 