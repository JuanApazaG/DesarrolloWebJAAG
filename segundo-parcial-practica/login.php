<?php
session_start();
?>
<div>
    <div>
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="usuario">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <label for="captcha">Captcha</label>
        <img src="captcha.php" alt="Captcha">
        <input type="text" id="captcha" name="captcha">
    </div>
    <div>
        <button onclick="loguearse()">Loguearse</button>
    </div>
</div>
<div id="mensaje2"></div>
