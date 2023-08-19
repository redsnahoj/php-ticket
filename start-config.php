<?php
if ($_POST) {

    $dbnamePost = $_POST["dbname"];
    $usernamePost = $_POST["username"];
    $dbPasswordPost = $_POST["password"];
    $dbserverPost = $_POST["dbserver"];

    try {
        $pdo = new PDO("mysql:host=$dbserverPost;dbname=$dbnamePost", $usernamePost, $dbPasswordPost);
        echo "¡Conectado correctamente!";
        $codeSetting = "<?php

        \$dbName = '$dbnamePost';
        \$username = '$usernamePost';
        \$dbPassword = '$passwordPost';
        \$dbServer = '$dbserverPost';

        ?>";

        $settingDoc = fopen("setting.php", 'w') or 
        die("Se produjo un error al crear el archivo");

        fwrite($settingDoc, $codeSetting) or die("No se pudo escribir en el archivo");
    
        fclose($settingDoc);
    } catch (PDOException $e) {
        echo "Error al conectar a la base de datos: " . $e->getMessage();
    }

}
?>

<?php if(!is_file('setting.php')) {?>
<form action="" method="post">
    <label for="dbname">Nombre de la base de datos</label><br>
    <input type="text" id="dbname" name="dbname"><br>
    <label for="username">Nombre de usuario</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Contraseña</label><br>
    <input type="password" id="password" name="password"><br>
    <label for="dbserver">Servidor de la base de datos</label><br>
    <input type="text" id="dbserver" name="dbserver"><br>
    <br>
    <button type="submit">Enviar</button>
</form>
<?php } ?>