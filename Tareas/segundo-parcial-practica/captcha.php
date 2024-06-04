<?php
session_start();
header('Content-Type: image/png');

// Generar un captcha aleatorio
$captcha = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 4);
$_SESSION["captcha"] = $captcha;

// Crear una imagen de 100x30
$image = imagecreatetruecolor(100, 30);
$bg_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);

// Llenar la imagen con el color de fondo
imagefilledrectangle($image, 0, 0, 100, 30, $bg_color);

// Ruta a la fuente TTF
$font_path = './arial.ttf';

// Verificar si la fuente existe
if (file_exists($font_path)) {
    // Añadir el texto del captcha a la imagen
    imagettftext($image, 20, 0, 10, 25, $text_color, $font_path, $captcha);
} else {
    // En caso de que la fuente no exista, usar un texto estándar
    imagestring($image, 5, 10, 5, $captcha, $text_color);
}

// Enviar la imagen al navegador
imagepng($image);
imagedestroy($image);
