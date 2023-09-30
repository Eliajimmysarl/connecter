<?php

if($reponseUserExiste=='OUI')
    {
		$users = $user->user;
				
		$passWord= $users[0]-> pass_word;
         
		if(password_verify($user_secret, $passWord))
            {
                $reponsePasswordCorrect='OUI';
            }
        else
            {
                $reponsePasswordCorrect='NON';
            }
                       
    }   