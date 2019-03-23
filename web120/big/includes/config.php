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
        
    case 'flexbox.php':
        $title = 'Flexbox';
        break;
        
    case 'galleries.php':
        $title = 'Galleries';
        break;
        
    case 'shoppingcarts.php':
        $title = 'Shopping Carts';
        break;
        
    case 'siteapp.php':
        $title = 'Site vs. App';
        break;
        
    case 'webcam.php':
        $title = 'Webcam';
        break;

    case 'calendar.php':
        $title = 'Calendar';
        break;
        
    case 'map.php':
        $title = 'Map';
        break;
        
    case 'youtube.php':
        $title = 'Youtube';
        break;
}
//echo $title; die;


$siteKey = "6LfJ4owUAAAAAG6jBdz9cAEPVsH4SN88mK5zuo6G";
$secretKey = "6LfJ4owUAAAAAMqiZOVM3c7T73xHHjK9e0q1F4W4";

?>
