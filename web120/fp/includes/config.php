<?php
//config.php

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

    
$title = THIS_PAGE;

switch(THIS_PAGE){
        
    case 'index.php':
        $title = 'Home';
        break;
        
    case 'music.php':
        $title = 'Music';
        break;
        
    case 'tour.php':
        $title = 'Tour';
        break;
    
    case 'merch.php':
        $title = 'Merch';
        break;
    
    case 'contact.php':
        $title = 'Contact';
        break;
        
        
}

$activePage = basename($_SERVER['PHP_SELF'], ".php");

$siteKey = "6LfJ4owUAAAAAG6jBdz9cAEPVsH4SN88mK5zuo6G";
$secretKey = "6LfJ4owUAAAAAMqiZOVM3c7T73xHHjK9e0q1F4W4";

?>