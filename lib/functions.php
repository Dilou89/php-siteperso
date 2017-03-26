<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	} 
	if(isset($_GET['bio'])){
		include _DIR_.'/../pages/bio.php';	
	}
	if(isset($_GET['contact'])){
		include _DIR_.'/../pages/contact.php';
	}
	(isset($_GET['home'])){
		include __DIR__.'/../pages/home.php';
	} 

}


function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}
