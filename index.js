$.get("./getProfil.php?name=technet")
.done( function(data){ /*   */
	profil = jQuery.parseJSON(data);

	console.log(profil);
	console.log(profil.name);

	$( "#pseudo" ).text(profil.name );
	$( "#rang" ).text("Rang "+profil.summonerLevel );
	$( "#niveau" ).text("Niveau "+profil.summonerLevel );
	$( "#icon" ).attr('src','https://ddragon.leagueoflegends.com/cdn/12.4.1/img/profileicon/'+profil.profileIconId+'.png');
});


$( "#boutonentrer" ).click(function(){
	pseudo=$("#choixjoueur").val();
	console.log("pseudo:" +pseudo);
});