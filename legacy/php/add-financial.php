<?php	
	require "conexao.php";

    $idLogin = $_SESSION['idUsuario'];

	$nome = mysqli_real_escape_string($conexao, trim($_POST["name"]));
	$tipo = mysqli_real_escape_string($conexao, trim($_POST["type"]));
	$valor = mysqli_real_escape_string($conexao, trim(str_replace(",",".", $_POST["price"])));	

	//CONVERTER A DATA DO PADRAO BRASILEIRO PARA O FORMATO DO BANCO DE DADOS
	$data = str_replace('/', '-', mysqli_real_escape_string($conexao, trim($_POST["date"])));
	$conv_data = date("Y-m-d", strtotime($data));
	
	$query = "INSERT INTO tb05_financeiro (tb05_id_usuario, tb05_nome, tb05_tipo, tb05_valor, tb05_data) VALUES ('$idLogin', '$nome', '$tipo', '$valor', '$conv_data')";
	$result = mysqli_query($conexao, $query);

	mysqli_close($conexao);	
?>