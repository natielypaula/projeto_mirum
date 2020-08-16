<?php
    include ("./pag_idad.php");

    if ($_POST) {
        $anos = $_POST['anos'];
        $meses = $_POST['meses'];
        $dias = $_POST['dias'];

        $total = $dias + ($meses * 30) + ($anos * 365);
        echo 'Idade em Dias: ';
        echo $total;
    }
?>