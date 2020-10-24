<?php 
    require_once __DIR__.'./../_connect/database.php';
?>
<!doctype html>
<html lang="pt-br">
<?php require_once __DIR__.'./../content/_head.php'?>

<body>
    <p>contato</p>
    <a href="<?php echo base_url()?>">Home</a>
    <?php
       print_r('<pre>');
       print_r($_SERVER);
       die;
    ?>
    <?php require_once __DIR__.'./../content/_footer.php'?>
</body>

</html>