<?php
$str = "1��2��3��4��5,";
$arr = explode("��",$str);
foreach($arr as $a){
   echo($a);
}

?>