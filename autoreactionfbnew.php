<?php

require_once('lib/fb.php');

//////////////////////////////////////////////[edit authentication here]///////////////////////////////////////////
$user		= 'k-fer.abigt'; // username fb / email
$pass 		= 'ngeweenak'; // password fb
$r_male		= '3'; // reaction if user male , like = 8, love = 7, wow = 6, haha = 5, sad = 4, angry = 9
$r_female	= '2'; // reaction if user female , like = 5, love = 4, wow = 6, haha = 3, sad = 2, angry = 7
$max_status	= '20'; // maximum reacted status
$token 		= 'EaEaEa696969';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);
