<?php

	$response = file_get_contents("https://euw1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/".$_GET['id']."?api_key=RGAPI-652e41fa-935f-4893-8e67-09b715dfc91c");


if ($response === FALSE){
	$response = '{"championId": 0,"championLevel": 0,"championPoints": 0,"lastPlayTime": 0,"championPointsSinceLastLevel": 0,"championPointsUntilNextLevel": 0,"chestGranted": false,"tokensEarned": 0,"summonerId": "0"}';
}

echo $response;

?>