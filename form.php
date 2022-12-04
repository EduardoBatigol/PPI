<?php

if (isset($_POST['submit'])) {

	  //print_r('Nome: ' . $_POST['nome']);
      //print_r('<br>');
      //print_r('Email: ' . $_POST['email']);
      //print_r('<br>');
      //print_r('Matricula: ' . $_POST['matricula']);
      //print_r('<br>');
      //print_r('Senha: ' . $_POST['senha']);

	include_once('config.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['matricula'];
	$senha = $_POST['senha'];

	$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,matricula,senha) 
        VALUES ('$nome','$email','$matricula','$senha')");

}

?>