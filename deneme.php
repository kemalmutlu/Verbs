<?php


$arr = ["KEMAL","KRDEM","AHMET","ALİ"];

foreach ($arr as $key) {
  if(substr($key,0,1) == "K")
  echo $key."<br>";

}
