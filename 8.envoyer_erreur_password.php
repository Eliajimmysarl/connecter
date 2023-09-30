<?php
	
if($reponsePasswordCorrect=='NON')
    {
        $datas["code"]  =400 ;
        
		$datas["message"]  = "Echec de connexion, mot de passe incorrect : voir activite 7 - verifier si password correct";
		
		echo json_encode($datas);
	}
