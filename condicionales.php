<?php 
    $se_hablo_de_bruno = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <!-- esto no se debe de hacer -->
    <?php  if ($se_hablo_de_bruno) {   
        echo "<b> Esta condicon es verdadera </b>";
    } else {
        echo "<b> Esta condicon es falsa </b>";
    } ?>
    <!-- Esto es aceptable -->
    <?php if ($se_hablo_de_bruno) { ?>
        <b>😧</b>
    <?php } else { ?>
        <b>😁</b>
    <?php } ?>
    <!-- esto si deberias hacer -->
    <?php if($se_hablo_de_bruno): ?>
        <b>😧</b>
    <?php else: ?>
        <b>😁</b>
    <?php endif; ?>
</body>
</html>