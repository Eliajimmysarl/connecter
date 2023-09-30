<?php
    
if($reponsePasswordCorrect=='OUI')
    {
       
        //Generer token
        $file_name = sha1(session_id().microtime());
		
        $token = substr($file_name, -50);
		
		//Lancer la requete http pour l'enregistrement de token
		$uri = 'https://api.eliajimmy.net/token/';
          
		$data = array(
				
						'user_id' => $user_id
					);

			$result=curl_post($uri,$token,$data);

			$json_decode = json_decode($result);                      
			
			$codeToken =  $json_decode->code;
			
	}
	