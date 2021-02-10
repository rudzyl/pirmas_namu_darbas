<?php
//nr1
echo '<h4>pirma uzduotis</h4>';

$vardas = 'Rugile';
$pavarde = 'Geceviciute';
$metai = 1996;
$sieMetai = 2021;
$skaiciuokle = $sieMetai - $metai;
echo "As esu $vardas $pavarde . Man yra $skaiciuokle metu.";

//nr2
echo '<h4>antra uzduotis</h4>';

$pirmas = rand(0, 4);
$antras = rand(0, 4);
if($pirmas == 0 || $antras == 0) {
    echo 'Dalyba is nulio negalima';
} else {
    $dalyba = ($pirmas / $antras);
    echo(round($dalyba, 2));
}

//nr3
echo '<h4>trecia uzduotis</h4>';

$skaicius1 = rand(0, 25);
$skaicius2 = rand(0, 25);
$skaicius3 = rand(0, 25);

echo 'pirmas skaicius ' . $skaicius1 . '<br>' . 'antras skaicius ' . $skaicius2 . '<br>' . 'trecias skaicius ' . $skaicius3 . '<br>';
If(($skaicius1 >= $skaicius2 && $skaicius3 >= $skaicius1) || ($skaicius1 >= $skaicius3 && $skaicius2 >= $skaicius1)) {
    echo 'vidurine reiksme skaiciaus ' . $skaicius1;
} elseif (($skaicius2 >= $skaicius1 && $skaicius3 >= $skaicius2) || ($skaicius2 >= $skaicius3 && $skaicius1 >= $skaicius2)) {
    echo 'vidurine reiksme skaiciaus ' . $skaicius2;
} elseif (($skaicius3 >= $skaicius1 && $skaicius2 >= $skaicius3) || ($skaicius3 >= $skaicius2 && $skaicius1 >= $skaicius3)) {
    echo 'vidurine reiksme skaiciaus ' . $skaicius3;
}
//nr4
echo '<h4>ketvirta uzduotis</h4>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

if($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo 'galima sudaryt trikampi';
} else {
    echo 'negalima sudaryt trikampio';
}

//nr5
echo '<h4>penkta uzduotis</h4>';

$sk1 = rand(0, 2);
$sk2 = rand(0, 2);
$sk3 = rand(0, 2);
$sk4 = rand(0, 2);
$nulis = 0;
$vienas = 0;
$du = 0;

if($sk1 == 0) {
  $nulis++;
} else if($sk1 == 1) {
    $vienas++;
} else if($sk1 == 2) {
    $du++;
}
if($sk2 == 0) {
    $nulis++;
  } else if($sk2 == 1) {
      $vienas++;
  } else if($sk2 == 2) {
      $du++;
  }
  if($sk3 == 0) {
    $nulis++;
  } else if($sk3 == 1) {
      $vienas++;
  } else if($sk3 == 2) {
      $du++;
  } 
  if($sk4 == 0) {
    $nulis++;
  } else if($sk4 == 1) {
      $vienas++;
  } else if($sk4 == 2) {
      $du++;
  }
echo $nulis . $vienas . $du;

//nr6
echo '<h4>sesta uzduotis</h4>';

$ponasRandomas = rand(1, 6);
echo "<h3>$ponasRandomas</h3>";

//nr7
echo '<h4>septinta uzduotis</h4>';

$skai1 = rand(-10, 10);
$skai2 = rand(-10, 10);
$skai3 = rand(-10, 10);
if($skai1 < 0) {
    echo "<h3 style=color:green;>$skai1</h3>";
} else if($skai1 == 0) {
    echo "<h3 style=color:red;>$skai1</h3>";
} else if($skai1 > 0) {
    echo "<h3 style=color:blue;>$skai1</h3>";
}
if($skai2 < 0) {
    echo "<h3 style=color:green;>$skai2</h3>";
} else if($skai2 == 0) {
    echo "<h3 style=color:red;>$skai2</h3>";
} else if($skai2 > 0) {
    echo "<h3 style=color:blue;>$skai2</h3>";
}
if($skai3 < 0) {
    echo "<h3 style=color:green;>$skai3</h3>";
} else if($skai3 == 0) {
    echo "<h3 style=color:red;>$skai3</h3>";
} else if($skai3 > 0) {
    echo "<h3 style=color:blue;>$skai3</h3>";
}

//nr8
echo '<h4>astunta uzduotis</h4>';

$zvakes = rand(5, 3000);
$nuolaida3 = $zvakes * 0.3;
$nuolaida4 = $zvakes * 0.4;
if($zvakes > 2000) {
   echo 'zvakes' . $zvakes . 'kaina su  4% nuolaida' . $zvakes - $nuolaida4;
} else if($zvakes > 1000) {
    echo 'zvakes' . $zvakes . 'kaina su  3% nuolaida' . $zvakes - $nuolaida3;
} else {
    echo 'zvakiu buvo nusipirkta maziau nei minimali nuolaidos suma';
}

//nr9
echo '<h4>devinta uzduotis</h4>';

$atsitik1 = rand(0, 100);
$atsitik2 = rand(0, 100);
$atsitik3 = rand(0, 100);

$sumViens = $atsitik1 + $atsitik2 + $atsitik3;
$vidViens = $sumViens / 3;
$suapvalinamPirma = round($vidViens);
echo 'vidurkis pirmas' . $suapvalinamPirma . '<br>';

$sumDu = 0;
$skaicius = 0; // jei skaicius yra didesnis nei 10 ir mazesnis 90, tada pridedam +1;
if($atsitik1 > 10 && $atsitik1 < 90) {
    $sumDu += $atsitik1;
    $skaicius++;
}
if($atsitik2 > 10 && $atsitik2 < 90) {
    $sumDu += $atsitik2;
    $skaicius++;
}
if($atsitik3 > 10 && $atsitik3 < 90) {
    $sumDu += $atsitik3;
    $skaicius++;
}
$vidDu = $sumDu / $skaicius;
$suapvalinamAntra = round($vidDu);
echo 'vidurkis antras' . $suapvalinamAntra;

//nr10
echo '<h4>desimta uzduotis</h4>';

$valanda = rand(0, 23);
$minute = rand(0, 59);
$sekunde = rand(0, 59);
$extraSec = rand(0, 300);

echo 'laikas pries pridedant papildomas sekundes ' . $valanda . ':' . $minute . ':' . $sekunde;


?>