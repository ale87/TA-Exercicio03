<?php
require('/HTML/Formulario.php');
use \HTML\Formulario;
?>

<html>
<body>

<?php 
$data = new Entrada('consultaData', 'consultaData', 'date', '');
$inicio = new Entrada('consultaHoraInicio', 'consultaHoraInicio', 'time', '');
$fim = new Entrada('consultaHoraTermino', 'consultaHoraTermino', 'time', '');
$nome = new Entrada('pacienteNome', 'pacienteNome', 'text', '');
$nascimento = new Entrada('pacienteNascimento', 'pacienteNascimento', 'date', '');
$queixa = new Entrada('pacienteQueixa', 'pacienteQueixa', 'text', '');
$medico = new Entrada('medicoNome', 'medicoNome', 'text', '');
$diagnostico = new Entrada('medicoDiagnostico', 'medicoDiagnostico', 'text', '');
$inputs = array($data, $inicio, $fim, $nome, $nascimento, $queixa, $medico, $diagnostico);
$form = new Formulario('form1', 'destino.php', 'post', $inputs);
echo $form;
?>

</body>
</html>
