<?php
/*
*/
$response = file_get_contents("https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/".$_GET['name']."?api_key=RGAPI-b28b4728-5bfc-425c-9dc0-d729cb403bb1");

echo $response;
?>