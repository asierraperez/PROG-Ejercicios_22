<html>
<body>
    <title>
        Ejercicios PHP
    </title>
    <h1>Mi primera página PHP</h1>
    <p>Página de pruebas PHP</p>
    <?php
    $variable1=1;
    $variable2=2;
    $suma=$variable1+$variable2;
    $p1=2;
    $p2=$p1*3-1;
    
    if ($p2 > 5) {
        $p3=($p1+$p2)/4;
        $Resultado_p2= "p2 = $p1 * 3 - 1 = $p2";
        $Resultado_p3= "p3 = ($p1 + $p2) / 4 = $p3<br>";        
    } elseif ($p2==5) {
        $p3=$p1+$p2;
        $Resultado_p2= "p2 = $p2";
        $Resultado_p3= "p3 = $p1 + $p2 = $p3<br>";
    }else{
        $p3=($p1+$p2)/8;
        $Resultado_p2= "p2 = $p1 * 3 - 1 = $p2";
        $Resultado_p3= "p3 = ($p1 + $p2) / 8 = $p3<br>";
    }
    
    echo "<p>IF...ELSEIF...ELSE<br>
    $variable1 + $variable2 = $suma<br>
    p1 = $p1<br>
    $Resultado_p2<br>
    $Resultado_p3<br>
    </p>";

    switch ($p2) {
        case ($p2 > 5):
            $p3=($p1+$p2)/4;
            $Resultado_p2= "p2 = $p1 * 3 - 1 = $p2";
            $Resultado_p3= "p3 = ($p1 + $p2) / 4 = $p3<br>"; 
            break;
        case 5:
            $p3=$p1+$p2;
            $Resultado_p2= "p2 = $p2";
            $Resultado_p3= "p3 = $p1 + $p2 = $p3<br>";
            break;      
        default:
            $p3=($p1+$p2)/8;
            $Resultado_p2= "p2 = $p1 * 3 - 1 = $p2";
            $Resultado_p3= "p3 = ($p1 + $p2) / 8 = $p3<br>";
            break;
    }

    echo "<p>SWITCH...CASE<br>
    $variable1 + $variable2 = $suma<br>
    p1 = $p1<br>
    $Resultado_p2<br>
    $Resultado_p3<br>
    </p>";

    $tabla="Tabla de multiplicar del $p1 <br>";
    $multi_p1;
    for ($i=1; $i < 10 ; $i++) {
        $multi_p1=$p1*$i;
        $tabla=$tabla . ("$p1 * $i = $multi_p1<br>");
    }
    echo "<p>FOR...<br>
    $tabla
    </p>";
    ?>
</body>
</html>
