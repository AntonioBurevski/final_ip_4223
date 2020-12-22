<?php

$st_num=0;$end_num=1000;$mul=1000000;

if ($st_num>$end_num) return false;
$res = mt_rand($st_num*$mul,$end_num*$mul)/$mul;

echo $res;

?>
