<?php

$zprava = 'Toto kolo ho cekala prohra';
$slova = array('prohra', 'kolo', 'les');

echo isValid($zprava, $slova);

/**
 *
 * @param string $zprava = zprava k validaci
 * @param array $slova = slova ktera ve zprave nemaji co delat
 * @return string
 */
function isValid($zprava, $slova) {

    foreach ($slova as $key => $value) {

        if (strpos($zprava, $value) > 0) {
            //return 'Toto slovo nelze pouzit - '. $value;
        }
    }
    //return true;
}

$CZDays = Array('Mon' => 'pondělí',
    'Tue' => 'úterý',
    'Wed' => 'středa',
    'Thu' => 'čtvrtek',
    'Fri' => 'pátek',
    'Sat' => 'sobota',
    'Sun' => 'neděle');
$CZDaysm = Array('Mon' => 'po',
    'Tue' => 'út',
    'Wed' => 'st',
    'Thu' => 'čt',
    'Fri' => 'pá',
    'Sat' => 'so',
    'Sun' => 'ne');
$CZMonth = Array('Jan' => 'ledna',
    'Feb' => 'února',
    'Mar' => 'března',
    'Apr' => 'dubna',
    'May' => 'května',
    'Jun' => 'června',
    'Jul' => 'července',
    'Aug' => 'Srpna',
    'Sep' => 'září',
    'Oct' => 'října',
    'Nov' => 'listopadu',
    'Dec' => 'prosince');
echo Change($CZDays, $CZDaysm, $CZMonth);

function Change($CZDays, $CZDaysm, $CZMonth) {
    foreach ($CZDays as $key => $value) {

        if (substr_replace($CZDays, $CZDaysm, $CZMonth, $length = 100)) {
            //return $value;
        }
    }
    //return true;
}
?>
<?php



function Jenfunkce($pole, $string) {

    foreach ($pole as $key => $value) {

        if (strpos($string, $value) > 0) {
            return 'Toto slovo nelze pouzit - ' . $value;
        }
    }
    return true;
}


$string = 'Tady je zakaz vstupu';
$pole = array('zakaz', 'vchod', 'vystup', 'konec');

echo Jenfunkce($pole, $string);







echo '<br>';


require 'index2.php';


require 'index3.php';





?>

<?php