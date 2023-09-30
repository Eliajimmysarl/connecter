<?php

//Debut

	//1)Import module curl
	 include('../../connect/connect.php');

    include('../../module/curl.php');

	//1)Récupérer les credentiels
	require_once("1.recuperer_login.php");

	//2)Verifier si le l'utilisateur est un client ou un agent de l'entreprise
	require_once("2.verifier_si_user_client.php");

	//3)Si OUI, il recuperer le clien
	require_once("3.recuperer_client.php");

	//4)Si non, recuperer l'agent
	require_once("4.recuperer_agent.php");

	//5)Verifier si l'utilisateur existe
	require_once("5.verifier_si_user_existe.php");

	//6)Si non, envoyer un messqge d'erreur
	require_once("6.envoyer_erreur_user.php");

	//7)Si OUI, verifiez si le mot de passe est correct
	require_once("7.verifier_si_password_correct.php");

	//8)Si no, envoyer un message d'erreur
	require_once("8.envoyer_erreur_password.php");

	//9)Generer le token, si le token est crée
	require_once("9.creer_token.php");

	//10)Verifiez si le token est crée
	require_once("10.verifier_si_token_cree.php");

	//11)Si non, envoyer un message d'erreur
	require_once("11.envoyer_erreur_token.php");

	//12)Si Oui envoyer les infos utilisateur et le token
	require_once("12.envoyer_token.php");
	

//Fin
?>

 


