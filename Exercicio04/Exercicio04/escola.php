<?php
require_once('Zend/Loader/Autoloader.php');
Zend_Loader_Autoloader::getInstance();

$config = new Zend_Config_Ini('config.ini','database');

$escola = Zend_Db::factory($config->adapter, $config->params);

try{
	$escola->getConnection();
	$escola->setFetchMode(Zend_Db::FETCH_OBJ);
}

catch(Exception $e){
	print '<h1>Erro ocorrido: [' . $e->getMessage() . ']</h1>';
} 