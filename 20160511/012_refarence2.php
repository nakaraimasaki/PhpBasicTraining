<?php
function piyo(&$a) {
  return ++$a;
}
$b = 1;

echo piyo($b) ."\n";
echo $b ."\n";
?>
