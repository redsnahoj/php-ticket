<?php

if (file_exists("setting.php")) {
    echo "El fichero existe";
} else {
    header('Location: setup-config.php');
}

?>