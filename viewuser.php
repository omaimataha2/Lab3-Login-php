<?php

var_dump($_GET);

$user=file("user.txt")[$_GET["id"]];
var_dump($user);

?>