<?php
header("Content-type:text/html; charset=utf8");

    //variaves
    $valor = 0;
    $parcelas = 0;
    $cont = 1;
    $valor_parcelas = 0;
    $msg = "";

    //calculo
    if (isset($_POST["valor"]) && !empty($_POST["valor"]) && isset($_POST["parcelas"]) && !empty($_POST["parcelas"])){
        $valor = $_POST["valor"];
        $parcelas = $_POST["parcelas"];

        //saida
        echo "<h1>Empréstimo</h1>";
        echo "Valor do empréstimo: R$ {$valor}<br>";
        echo "Quantidade de Parcelas: {$parcelas}<br>";
        echo "Juros de 1.5% ao mes.<br>";
        echo "<h2>Valor das parcelas:</h2>";

        $valor_parcelas = $valor / $parcelas;

        while ($cont <= $parcelas){
            $valor_parcelas = $valor_parcelas + ($valor_parcelas * 0.015);
            echo "Parcela {$cont}: R$ ".number_format($valor_parcelas,2)."<br>";
            $cont++;
        }
    }
    else{
        header("Location: index.html");
    }

    //saida
    echo "<a href='index.html'>Voltar</a>";
?>
