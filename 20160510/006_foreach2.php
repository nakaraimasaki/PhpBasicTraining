<?php
$a = ['A'=>10, 3=>2, 'Z'=>'Hello'];
var_dump($a);
echo "  <br/>";
foreach ( $a as $key => $value) {
  echo $key .",". $value ."<br/>";
}
?>
