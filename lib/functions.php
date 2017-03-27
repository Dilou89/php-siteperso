<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(empty($_GET)){
		include __DIR__.'/../pages/home.php';
	} 
	if(isset($_GET['bio'])){
		include __DIR__.'/../pages/bio.php';	
	}
	if(isset($_GET['contact'])){
		include __DIR__.'/../pages/contact.php';
	}
	if(isset($_GET['home'])){
		include __DIR__.'/../pages/home.php';
	} 

}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData(){
	$json =file_get_contents('./../data/user.json', FILE_USE_INCLUDE_PATH);
	$user=json_decode($json);
	$array = (array) $user;
	echo $array['name']."<br/>";
	echo $array['first_name']."<br/>";
	echo $array['occupation']."<br/>";

	$experiences = (array) $array["experiences"];
	foreach($experiences as $experience){
		$arr_exp = (array) $experience;
		echo $arr_exp["year"]." chez ".$arr_exp["company"]."<br/>";
	}
	
	
}