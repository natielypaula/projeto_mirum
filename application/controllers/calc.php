<?php
    include ("./pag_calc.php");

    if ($_POST) {
        $n1 = $_POST['nota1'];
        $n2 = $_POST['nota2'];
        $n3 = $_POST['nota3'];
        $n4 = $_POST['nota4'];

        $media = ($n1 + $n2 + $n3 + $n4) / 4;
        if ($media >= 7){
            $result = 'Aluno Aprovado';
        } else {
            $result = 'Aluno Reprovado';
        }
        echo $result;
    }
?>