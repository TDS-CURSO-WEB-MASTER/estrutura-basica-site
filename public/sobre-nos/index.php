<?php 
    require_once __DIR__.'./../../_connect/database.php';
?>
<!doctype html>
<html lang="pt-br">
<?php require_once __DIR__.'./../../content/_head.php'?>

<body>
    <h1>Hello, world!</h1>
    <a href="<?php echo base_url('contato.php')?>">Página de Contato</a>
    <a href="<?php echo base_url('sobre-nos')?>">Página Sobre nós</a>
    <?php require_once __DIR__.'./../../content/_footer.php'?>
</body>

</html>