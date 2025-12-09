<?php

require __DIR__ . "/../classes/arme.php";
require __DIR__ . "/../classes/player.php";

$hache = new Arme("Hache", 10);
$epee = new Arme("Épée", 8);
$arc = new Arme("Arc", 6);
$fleau = new Arme("Fléau", 12);
$armes = [$hache, $epee, $arc, $fleau];
$milo = new Player("Milo", 5, 100, $armes);
$tya = new Player("Tya", 5, 100, $armes);
$players = [$milo, $tya];
