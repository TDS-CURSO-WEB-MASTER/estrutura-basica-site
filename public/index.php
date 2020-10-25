<?php 
    require_once __DIR__.'./../_connect/database.php';
?>
<!doctype html>
<html lang="pt-br">
<?php require_once __DIR__.'./../content/_head.php'?>

<body>
    <?php require_once __DIR__.'./../content/_header.php'?>
    <?php 
    print_r('<pre>');
    print_r($_SERVER);
    ?>
    <?php require_once __DIR__.'./../content/_footer.php'?>
</body>

</html>