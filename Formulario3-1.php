<?php
    $fd = fopen("visitas.txt", "r");

    while (!feof($fd)) {
        echo nl2br(fgets($fd));
    }

    fclose($fd);
?>
