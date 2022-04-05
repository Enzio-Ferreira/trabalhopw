<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Insert</title>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2? family= Poppins:wght@200;800 & display=swap');
body{
	background-color: #8C8C8C;
	color: #BCBCC1;
	font-family: 'Poppins', sans-serif;
}

div{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	align-items: center;
	text-align: center;
	
	padding: 20px;
	
	height: 260px;
	
}
input{
	background:transparent;
	border:1px #BCBCC1 solid;
	padding: 5px;
	color: white;

}
button{
	background:transparent;
	border:1px #BCBCC1 solid;
	padding: 5px;
	color: #BCBCC1;
	border-radius: 10px;
	padding: 10px;

}
button:hover{
	background-color: #BCBCC1;
	color: black;
	transition: 0.5s;
}
</style>
</head>
<body>
	<div>
		<form action="insert.php" method="post">
		<h2>Cadastrar Dados do Cliente</h2>
		<p>Nome: <input type="text" name="nome"></p>
		<p>E-mail: <input type="email" name="e-mail"></p>	
		<p>Idade: <input type="number" name="idade"></p>

		<button type="submit"> Enviar Dados</button>
		
		</form>
	</div>
	

</body>
</html>