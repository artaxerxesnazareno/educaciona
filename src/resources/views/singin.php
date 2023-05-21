<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login no EDUCACIONA</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
$id = $_GET['id'];

if ($id == 'erro'){
    echo "<script>
           alert('Email ou Senha Incorreto!!!');
          </script>";
}
?>
<div class="main">

    <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form" action="../../app/controllers/userController.php">

                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Seu Email"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="Senha"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="singin" id="submit" class="form-submit" value="Entrar"/>
                    </div>
                </form>
                <p class="loginhere">
                    Não tem uma Conta ? <a href="singup.html" class="loginhere-link">Criar Conta aqui</a>
                </p>
            </div>
        </div>
    </section>

</div>

<!-- JS -->
<script src="../../../vendor/jquery/jquery.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>