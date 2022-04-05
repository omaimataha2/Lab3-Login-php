<?php

$user_id = $_GET["id"];
$user=file("user.txt");

unset($user[$user_id]);
$userfile = fopen("user.txt", "w");

foreach($user as $u){
    $u=trim($u,"\n");
    $u=$u.PHP_EOL;
    fwrite($userfile,$u);

}

fclose($userfile);

header("Location:allusers.php");
?>