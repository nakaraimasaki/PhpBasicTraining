<?php
$i = 0;
while( $i<11 ) {
  if( $i===10 ){
    echo "ループを抜ける";
    break;
  }
  elseif( $i===5 ){
    continue;
  }
  echo $i ."<br/>";
  $i++;
}
?>
