<?php
$file = './data.txt';
$textFile = file_get_contents($file);
$singles = explode("\n", $textFile);
$notInFile = false;
$player = $_POST["player"];
$userInfo = array();
foreach ($singles as $users) {
    $userInfo = explode(",", $users);
    if ($userInfo[0] == $player){
        setcookie("player", $player, time() + (86400 * 30), "/"); 

        header("Location: ./start.php");
        exit();
    }
}

    header("Location: ./register.php");
    exit();

?>