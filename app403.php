<?php
$x = 25;
$y = 35;
$z = "25";

ver_dump($x == $z); echo"<br>";
ver_dump($x === $z); echo"<br>";
ver_dump($x != $y); echo"<br>";
ver_dump($x !== $z); echo"<br>";
ver_dump($x < $y); echo"<br>";
ver_dump($x > $y); echo"<br>";
ver_dump($x <= $y); echo"<br>";
ver_dump($x >= $y); echo"<br>";
?>