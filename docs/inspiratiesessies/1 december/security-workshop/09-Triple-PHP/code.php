<?php
/*
* MSI Hacking CTR :: Reverse Engineering met PHP
* Gemaakt door Tamer & Sjuul
*/

function GenerateRandom($size) {
   $g = array();
   for ($i=0; $i<$size; $i++) {
	  $g[] = chr(rand(0, 255)); 
   }
   $final = implode("", $g);
   return $final;
}

eval(base64_decode('JGZsYWcgPSAnMjM0OGhiZjg3YnI4YjI1dmIyODM2ZnY3ODZ2Jzs='));
echo substr(str_replace("4", "4000", $flag), 0, 4);
GenerateRandom(4);