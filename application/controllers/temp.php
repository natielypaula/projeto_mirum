<?php
    include ("./pag_temp.php");

    if ($_POST) {
        $celsius = $_POST['temp'];

        $fahren = $celsius * 1.8 + 32;
        echo 'Temperatura em °F: ';
        echo $fahren;
    }
?>