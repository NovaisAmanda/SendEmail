

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schunk</title>
    <link rel="stylesheet" href="../styles/styles.css">

</head>
<body>
    <div class="usuario">
        <img src="../assets/logo.PNG" alt="" >
        <?php
            include 'includes/protect.php'; 
            echo '<h2 class= "user__titulo"> Bem-Vindo! ' . $_SESSION['nome'] .'</h2>';
            echo '<a href="login/logout.php" class="user__sair">Sair</a>';
        ?>
    </div><hr>

    <div class="conteiner__buscar">
        <form method="post" name="formularioProduto" id="formularioProduto" value="formularioProduto" class="form__login__buscar"> 
            <input type="text" name="id_produto" id="id_produto" placeholder="Código do Produto"  class="form__login__input"><br>
            <input type="button" value="Buscar Produto" name= "idProduto" id="idProduto" class="form__login__button">
        </form>
    </div>

    <div id="result">
        <!-- resultado do php -->
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>

    <footer class="rodape">Desenvolvido por <a href="https://amanda-novais.vercel.app/">Amanda Novais</a></footer>
</body>
</html>
