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
    $p1=1;
    $p2=$p1*3;
    
    if ($p2 > 5) {
        $div=4;
    } else{
        $div=8;        
    }

    $p3=($p1+$p2)/$div;

    echo "<p>$variable1 + $variable2 = $suma<br>
    p1 = $p1<br>
    p2 = $p1 * 3 = $p2<br>
    p3 = ($p1 + $p2) / $div = $p3<br>
    </p>";
    ?>
</body>
</html>
