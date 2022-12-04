<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Seja bem <br>vindo!</h2>
                <p class="description description-primary">Esse é o Sistema bibliotecário do IFFar-FW</p>
                <p class="description description-primary">Já possui Login?</p>
                <a href="loginone.php"><button id="signin" class="btn btn-primary">Login</button></a>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Crie sua conta!</h2>
                
                <p class="description description-second">Use seu email para se registrar:</p>
                 <form class="form" action="form.php" method="POST"><!--php do site -->
                <label class="label-input" for="nome">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome Completo" name="nome" id="nome" class="inputUser" required>
                    </label>
                    

                    <label class="label-input" for="matricula">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Matricula" name="matricula" id="matricula" class="inputUser" required>
                    </label>
                    
                    <label class="label-input" for="email">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email" name="email" id="email" class="inputUser" required>
                    </label>
                    
                    <label class="label-input" for="senha">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha" name="senha" id="senha" class="inputUser" required>
                    </label>
                    
                    
                    <button class="btn btn-second" input type="submit" name="submit" id="submit">criar</button>        
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <!--<script src="app.js"></script>-->
</body>
</html>