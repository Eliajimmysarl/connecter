<?php
	
if($reponseUserExiste=='NON')
    {
        $datas["code"]  = $codeUser;
        
		$datas["message"]  = "Echec de connexion, user n'existe pas : voir activite 3 ou 4 - recuperer client ou recuperer agent";
		
		echo json_encode($datas);
	}
