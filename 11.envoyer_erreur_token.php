<?php
	
if (($reponsePasswordCorrect=='OUI') AND ($reponseTokenCree=='NON'))
    {
        $datas["code"]  = $codeToken;
        
		$datas["message"]  = "Erreur de creation de token : voir activite 9 - créer token";
		
		echo json_encode($datas);
	}
