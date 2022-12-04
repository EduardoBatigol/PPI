
    <!--#session_start();
    #if ((!isset($_SESSION['email']) == true)) {
    #	unset($_SESSION['email']);
    #	unset($_SESSION['senha']);
    #	header('Location: login.php');
    #}
    #$logado = $_SESSION['email'];-->
<!--TELA DO ALUNO/PROFESSOR-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistema</title>
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="estilbok.css">
    <script src="sscript.js" defer></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
<div class="containere">

   <h3 class="title"></h3>

   <div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      <textarea name="" id="" cols="30" rows="10" font-size="200px"></textarea>
      <h3>Harry Potter 1</h3>
      <form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
				<!--<input type="submit" class="buy" value="Cadastrar">-->
				
				
			
      <p>Essse livro é bom, recomendo</p>
      <div class="price">Disponivel</div>
      <div class="buttons">
         <a href="" class="buy">CADASTRAR</a>
      </div>
		</form></div>
    </div>

</div>
</div>

</body>
</html>