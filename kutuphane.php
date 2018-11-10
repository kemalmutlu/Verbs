<?php


function IfadeAyir() {
  $SATIR = file_get_contents('ifadeler.txt');
  @list($ANLAM1, $ANLAM2, $ANLAM3 ) = explode("\n", $SATIR);
  return $ANLAM1;
} // isimBol




Print_r(IfadeAyir());
 ?>
