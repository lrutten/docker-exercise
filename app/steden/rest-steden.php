<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

   require_once("Steden.php");
   $steden = new Steden();
   
   if (array_key_exists('actie', $_GET) && $_GET['actie']=="aantal")
   {
	   $result = new stdClass();
   	$result->aantal = $steden->getAantal();
   }
   else if (array_key_exists('actie', $_GET) && $_GET['actie']=="steden")
   {
	   $result = new stdClass();
	   $result->aantal = $steden->getAantal();
 /*
   $lijst = array();
 
   $stad1 = new stdClass();
   $stad1->postcode = 3590;
   $stad1->naam = "Diepenbeek";

   $stad2 = new stdClass();
   $stad2->postcode = 3600;
   $stad2->naam = "Genk";
   
   array_push($lijst, $stad1);
   array_push($lijst, $stad2);
  */ 
   //$result->lijst = $lijst;
   	$result->lijst = $steden->getSteden();
   }   
   else if (array_key_exists('actie', $_POST) && $_POST['actie']=="nieuw")
   {
   	$code = $steden->nieuweStad($_POST['naam'], $_POST['postcode']);

	   $result = new stdClass();
   	$result->code = $code;
   }
   else
   {
	   $result = new stdClass();
   	$result->code = "action unknown";
   }
   
	header('Content-Type: application/json');
   print(json_encode($result)); 
 ?>
