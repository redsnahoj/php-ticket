<?php

if($_POST){
    print_r ($_POST);
}
?>

<form action="" method="post">
    <label for="site-title">Titulo del sitio</label><br>
    <input type="text" id="site-title" name="site-title"><br>
    <label for="username">Usuario</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Contraseña</label><br>
    <input type="password" id="password" name="password"><br>
    <label for="email">Correo</label><br>
    <input type="email" id="password" name="password"><br><br>
    <button type="submit">Enviar</button>
</form>