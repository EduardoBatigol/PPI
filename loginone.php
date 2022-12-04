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
            <h2 class="title title-primary">Olá!</h2>
                <p class="description description-primary">Não tem uma conta ainda?</p>
                <p class="description description-primary">Clique aqui para criar uma conta na BIBLIF</p>
                <a href="registro.php">
                    <button id="signup" class="btn btn-primary">Cadastre-se</button>
                </a>
            </div>    
                <div class="second-column">
                <h2 class="title title-second">Faça Login para entrar</h2>
                
                <p class="description description-second">Use sua conta do e-mail:</p>
                <form class="form"  action="loginn.php" method="POST">
                
                    <label class="label-input" for="email">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="text" placeholder="CPF" name="cpf" id="cpf" class="inputUser" required>
                    </label>
                
                    <label class="label-input" for="senha">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha" name="senha" id="senha" class="inputUser" required>
                    </label>
                
                    <button class="btn btn-second">Login</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <!--<script src="app.js"></script>-->
</body>
</html>