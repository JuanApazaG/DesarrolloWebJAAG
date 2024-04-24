<?php
$opcion = $_POST["opcion"];
    switch ($opcion) {
        case 'fibonacci':
           ?>
           <form action="resolver.php" method="get">
           <input type="hidden" name="opcion" value="fibonacci"> 
           <label for="n">ingrese un numero</label>
            <input type="number" name="n">
            <input type="submit" value="calcular fibonacci">
           </form>
           <?php
            break;
        case 'mayor':
            ?>
           <form action="resolver.php" method="get">
           <input type="hidden" name="opcion" value="mayor"> 
           <label for="a">ingrese un numero</label>
            <input type="number" name="a">
            <label for="b">ingrese un numero</label>
            <input type="number" name="b">
            <label for="c">ingrese un numero</label>
            <input type="number" name="c">
            <input type="submit" value="calcular mayor">
           </form>
           <?php
            break;
        case 'piramide':
            ?>
           <form action="resolver.php" method="get">
           <input type="hidden" name="opcion" value="piramide"> 
           <label for="cadena">ingrese una cadena</label>
            <input type="text" name="cadena">
            <input type="submit" value="dibijar cadena">
           </form>
           <?php
            break;
        default:
            echo "<h2>Opción no válida</h2>";
            break;
        }
?>