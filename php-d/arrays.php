<?php 	 
 $miarr = array(1,2,3,4,6);
 unset($miarr[0]);
 print_r ($miarr);
 $long = sizeof($miarr);
 echo "Longitud de mi array:".$long;
 echo "<br>";
 $miarr2["dia"]="lunes";
 $miarr2["mes"]=4;
 $miarr2["frio"]=true;
 $miarr2["temperatura"]=22.2;
 echo "<br>";
 var_dump($miarr2);
 unset($miarr2["mes"]);
 echo "<br>";
 var_dump($miarr2);
 $miarrtemp=array_reverse($miarr);
 echo "<br>";
 print_r($miarrtemp);
 $trozo=array_splice($miarr,2);
 print_r($trozo);
?>