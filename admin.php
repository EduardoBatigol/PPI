
    <!--#session_start();
    #if ((!isset($_SESSION['email']) == true)) {
    #	unset($_SESSION['email']);
    #	unset($_SESSION['senha']);
    #	header('Location: login.php');
    #}
    #$logado = $_SESSION['email'];-->
<!--TELA DO ALUNO/PROFESSOR-->
<!DOCTYPE html>
<html>
<head>
    <title>Sistema</title>
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="eestilo.css">
    <link rel="stylesheet" href="m.css">
    <link rel="stylesheet" href="cssdoprimeiro.css">
    <script src="sscript.js" defer></script>
</head>
<body>

<header>
    <nav>
        
            
       <a id="logo" href="/"><img width="180px" src="biblif.png" alt=""></a>
        <ul class="nav-list">
          <li><a href="#">Cadastrar</a></li>
          <li><a href="#">Adms</a></li>
          <li><a href="#">Pro</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
    
    <main></main>
          
       
   <script src="mobile-navbar.js"></script>
      </nav>
    </header>
   

<br> <br><br>


<br><br> <br><br> <br>

<div class="containere">

   <h3 class="title"> Livros Disponiveis </h3>

   <div class="products-containere">

      <div class="product" data-name="p-1">
         <img src="1.png" alt="">
         <h3>Harry potter 1</h3>
         <div class="price">Disponivel</div>
      </div>

      <div class="product" data-name="p-2">
         <img src="2.png" alt="">
         <h3>Harry Potter 2</h3>
         <div class="price">Indisponivel</div>
      </div>

      <div class="product" data-name="p-3">
         <img src="1.png" alt="">
         <h3>Harry Potter 1</h3>
         <div class="price">Disponivel</div>
      </div>

      <div class="product" data-name="p-4">
         <img src="2.png" alt="">
         <h3>Harry Potter 2</h3>
         <div class="price">Indispnivel</div>
      </div>

      <div class="product" data-name="p-5">
         <img src="1.png" alt="">
         <h3>Harry Potter 1</h3>
         <div class="price">Disponivel</div>
      </div>

      <div class="product" data-name="p-6">
         <img src="2.png" alt="">
         <h3>Harry Potter 2</h3>
         <div class="price">Indisponivel</div>
      </div>

   </div>

</div>

<div class="products-preview">

   <div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      <img src="1.png" alt="">
      <h3>Harry Potter 1</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Essse livro é bom, recomendo</p>
      <div class="price">Disponivel</div>
      <div class="buttons">
         <a href="" class="buy">Alugar</a>
         <a href="" class="cart">Renovar</a>
      </div>
   </div>

   <div class="preview" data-target="p-2">
      <i class="fas fa-times"></i>
      <img src="2.png" alt="">
      <h3>Harry Potter 2</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Sim</p>
      <div class="price">Indisponivel</div>
      <div class="buttons">
         <a href="#" class="buy">Alugar</a>
         <a href="#" class="cart">Renovar</a>
      </div>
   </div>

   <div class="preview" data-target="p-3">
      <i class="fas fa-times"></i>
      <img src="1.png" alt="">
      <h3>Harry Potter 1</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Batigol lindo</p>
      <div class="price">Disponivel pra vc bb</div>
      <div class="buttons">
         <a href="#" class="buy">Alugar</a>
         <a href="#" class="cart">Renovar</a>
      </div>
   </div>

   <div class="preview" data-target="p-4">
      <i class="fas fa-times"></i>
      <img src="2.png" alt="">
      <h3>Harry Potter 2</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Pablo escobar, cheira 5 carreira seguidas com seu nariz</p>
      <div class="price">Indisponivel</div>
      <div class="buttons">
         <a href="#" class="buy">Alugar</a>
         <a href="#" class="cart">Renvoar</a>
      </div>
   </div>

   <div class="preview" data-target="p-5">
      <i class="fas fa-times"></i>
      <img src="1.png" alt="">
      <h3>Harry Potter 1</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor.</p>
      <div class="price">Disponivel</div>
      <div class="buttons">
         <a href="#" class="buy">Alugar</a>
         <a href="#" class="cart">Renovar</a>
      </div>
   </div>

   <div class="preview" data-target="p-6">
      <i class="fas fa-times"></i>
      <img src="2.png" alt="">
      <h3>Harry Potter 2</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>texto em hebraico aqui</p>
      <div class="price">Indisponivel</div>
      <div class="buttons">
         <a href="#" class="buy">Alugar</a>
         <a href="#" class="cart">Renovar</a>
      </div>
   </div>

</div>

</body>
</html>