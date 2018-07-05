<?php
$str = "1гм2гм3гм4гм5,";
$arr = explode("гм",$str);
foreach($arr as $a){
   echo($a);
}

?>