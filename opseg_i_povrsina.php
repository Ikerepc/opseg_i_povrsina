<?php

$trokut = new Trokut();
$krug = new Krug();

class Trokut {
    function povrsina($osnovica, $visina) {
        $povrsina = $osnovica * $visina;
        $povrsina = $povrsina / 2;
        echo '<br>Povrsina trokuta je: '.$povrsina;
    }
    function opseg($a, $b, $c) {
        $opseg = $a + $b + $c;
        echo '<br>Opseg trokuta je: '.$opseg;
    }
}

class Krug {
    function opseg($r) {
        $opseg = 2 * $r * pi();
        echo 'Opseg kruga je: '.$opseg;
    }
    function povrsina($r) {
        $povrsina = $r * $r * pi();
        echo '<br>A površina kruga je: '.$povrsina;
    }
}

// Ovdje unijeti radius kruga: (trenutno su unesseni random brojevi)
$radijus_kruga = 5;

// Ovdije unijeti stranice trokuta: (trenutno su uneseni random brojevi)
$osnovica = 5;
$visina_na_osnovicu = 3;
$stranica2 = 4;
$stranica3 = 3;

$krug->opseg($radijus_kruga);
$krug->povrsina($radijus_kruga);
$trokut->opseg($osnovica, $stranica2, $stranica3);
$trokut->povrsina($osnovica, $visina_na_osnovicu);

?>