<?php
session_start();
$usuario = $_POST["usuario"];
$password = $_POST["password"];
$captcha = $_POST["captcha"];
$mensaje = "";

if ($captcha !== $_SESSION["captcha"]) {
    $mensaje = "Captcha incorrecto";
} else {
    include("conexion.php");
    $sql = "SELECT nivel FROM usuarios WHERE usuario='$usuario' AND password='$password'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nivel = $row["nivel"];
        $mensaje = "Usuario autenticado $usuario Nivel $nivel";
        echo json_encode(["success" => true, "mensaje" => $mensaje]);
        exit;
    } else {
        $mensaje = "Usuario o contraseña incorrectos";
    }
}
echo json_encode(["success" => false, "mensaje" => $mensaje]);
