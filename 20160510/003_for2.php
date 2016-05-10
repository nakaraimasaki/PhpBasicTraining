<?php
$i = 0;
while( $i<11 ) {
  if( $i===10 ){
    echo "ループを抜ける";
    break;
  }
  echo $i ."<br/>";
  $i++;
}
?>
