<?php
$player= $_POST["player"];
$file = "./data.txt";
$data = $player. ",0" .PHP_EOL;
file_put_contents($file, $data, FILE_APPEND);

setcookie("player", $player, time() + (86400 * 30), "/"); 

header("Location: ./start.php");
exit();
?>