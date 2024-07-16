<?php 
$txt = "abcdefgh";

echo str_shuffle(substr($txt, 2, 3));
echo "<br>";
echo substr(str_shuffle($txt), 2, 3);
?>