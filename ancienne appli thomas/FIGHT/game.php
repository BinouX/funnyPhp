<?php
require 'spawner.php';
$game = new spawner();
$arena = $game->spawn("LAURINE","LE ROUX","K1 ultimate fight 3000");
$player1 = $arena->getPlayer1();
$player2= $arena->getPlayer2();
while($player1->isalive() && $player2->isalive()){
    $arena->fight($player1,$player2);
}
?>
<html>
<div>
<img id="img0"></img>
<img id="img1"></img>
</div>
<div>
<span id="text"></span>
</div>
</html>
