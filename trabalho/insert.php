<?php 

$nome = $_POST['nome'];
$email = $_POST['e-mail'];
$idade = $_POST['idade'];

//echo $nome. " - ".$email." - ".$idade;

include_once("conect.php");

include_once("Crud.php");

$obj = new Crud($conect);

$obj->setDados($nome,$email,$idade);

$obj->insertDados();



?> 

<style type="text/css">
	@import url('https://fonts.googleapis.com/css2? family= Poppins:wght@200;800 & display=swap');
body{
	background-color: #8C8C8C;
	text-transform: uppercase;
	color: #BCBCC1;
	font-family: 'Poppins', sans-serif;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	font-size: 2em;
}

</style>
