<?php

require_once("./ProcessKiller.php");

echo "Started!";

$killer = new ProcessKiller(5, 1); //5 sec, warning - true
$killer->processKill();