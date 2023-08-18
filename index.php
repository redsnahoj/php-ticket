<?php

if (file_exists("setting.php")) {
    echo "El fichero existe";
} else {
    require_once "start-config.php";
}

?>