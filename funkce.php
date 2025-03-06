<?php
function pozdrav()
{
    echo "Ahoj.<br>";
}

function suma($x, $y)
{
    echo $x, " + ", $y, " = ", $x + $y, "<br>";
}

function odecti($x, $y)
{
    echo $x, " - ", $y, " = ", $x - $y, "<br>";
}

function nasob($x, $y)
{
    echo $x, " * ", $y, " = ", $x * $y, "<br>";
}

function podil($x, $y)
{
    if ($y == 0) {
        echo "Nelze dělit nulou.";
    } else {
        echo $x, " : ", $y, " = ", $x / $y, "<br>";
    }
}

pozdrav();
suma(1, 2);
odecti(5, 3);
nasob(3, 4);
podil(6, 2);
podil(6, 0);
?>