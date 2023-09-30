<?php
//Verifier si le user est acteur externe (client)
if($user_type=='externe')
    {
        $reponseUserClient='OUI';  
    }
else
    {
        $reponseUserClient='NON';
    }