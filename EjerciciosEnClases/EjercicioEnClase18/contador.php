<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['contador']))
 {
    $valor = $_COOKIE['contador'];
    $valor ++;
    setcookie('contador', $valor, time()+3600);
    //setcookie('contador', $valor)
}else{
    $valor=1;
    setcookie('contador', $valor, time()+3600);
}


echo "Esta es su visita numeroo $valor";
    ?>
</body>
</html>