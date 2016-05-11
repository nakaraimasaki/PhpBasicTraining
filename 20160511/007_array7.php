<?php
$a[0][0]="AA";
$a[0][1]="AB";
$a[1][0]="BA";
$a[1][1]="BB";
$a[2][0]="CA";
$a[2][1]="CB";
var_dump($a);
echo "<br/>";

foreach ( $a as $key1 => $value1) {
    foreach ($value1 as $key2 => $value2) {
        echo $key1."   " .$key2."    ".$value2 ."<br/>";
    }
}

?>
