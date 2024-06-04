<?php
session_start();
?>
<div class="container borde">
    <div>
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="usuario">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
    </div>
    <div class="captcha-div">
        <label for="captcha">Captcha</label>
        <img src="captcha.php" alt="Captcha">
        <label for="captcha">Captcha</label>
        <input type="text" id="captcha" name="captcha">
    </div>
    <div>
        <button class="boton-loguearse" onclick="loguearse()">Loguearse</button>
    </div>
</div>
<div id="mensaje2"></div>
