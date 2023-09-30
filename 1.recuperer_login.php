<?php

$myjson=file_get_contents('php://input');

$json_decode= json_decode($myjson);

$user_id=$json_decode->user_id;

$user_secret=$json_decode->user_secret;

$user_type=$json_decode->user_type;
