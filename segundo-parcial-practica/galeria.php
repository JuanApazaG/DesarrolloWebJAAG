<?php
include("conexion.php");
$sql = "SELECT id, imagen FROM libros";
$result = $con->query($sql);
?>
<div class="gallery">
    <?php while ($libro = $result->fetch_assoc()) { ?>
        <div class="imagen-boton" style="width: 50px; height: 75px; border: 1px solid green; display: flex; align-items: center; justify-content: center; cursor: pointer;">
            <img src="images/<?php echo $libro["imagen"] ?>" alt="<?php echo $libro["imagen"] ?>" style="max-width: 100%; max-height: 100%;">
        </div>
    <?php } ?>
</div>
