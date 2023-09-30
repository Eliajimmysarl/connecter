<?php

if($reponseTokenCree=='OUI')
    {
		$users = $user->user;
		
        $prenom = $users[0]->prenom;
		
        $nom = $users[0]->nom;
		
        $telephone = $users[0]->telephone;
		
		$clientId = $users[0]->id;
		
        $email = $users[0]->email;
		
        $urlPhoto = $users[0]->url_photo;

		//Créer une liste array contenant toutes les infos du client et le token d'accès crée
		$datas["code"]  = 201;
        
		$datas["token"]  = $token;
        
		$datas["prenom"]  = $prenom;
        
		$datas["nom"]  = $nom;
                 
		$datas["telephone"]  = $telephone;
                 
		$datas["client_id"]  = $clientId;
		
		$datas["email"]  = $email;
		
		$datas["url_photo"]  = $urlPhoto;
		
		//Encoder en Json et envoyer
		echo json_encode($datas);
	}
	