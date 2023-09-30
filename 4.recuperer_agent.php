<?php

	if($reponseUserClient=='NON')
		{
			$uri = 'https://api.eliajimmy.net/agent/';
			
			$data = array(
				
					'user_id' => $user_id
		
				);
			
			$result=curl_get_data($uri,$token,$data);

			$user= json_decode($result);

			$codeUser = $user->code;
		}
	