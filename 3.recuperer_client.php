<?php

	if($reponseUserClient=='OUI')
		{
			$uri = 'https://api.eliajimmy.net/client/';
			
			$data = array(
				
					'user_id' => $user_id
		
				);
			
			$result=curl_get_data($uri,$token,$data);

			$user= json_decode($result);

			$codeUser = $user->code;

		}
	