<html>

<head>
    <title><?= $titulo ?></title>
</head>

<body>
    <h2><?= $titulo ?></h2>
    <strong><?php echo $msg ?></strong>
    <form method="post" action="inserir">
        <p>Nome Fabricante: <input type="text" name="nomefabricante" /></p>
        <!-- Adicionando o token CSRF -->
        <?= csrf_field() ?>
        <!-- Fim do token CSRF -->
        <p><input type="submit" value="<?= $acao ?>" /></p>
    </form>
</body>

</html>
