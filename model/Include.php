<?php

include_once(dirname(__FILE__) . '/Activity.php');
include_once(dirname(__FILE__) . '/Attraction.php');
include_once(dirname(__FILE__) . '/Upload.php');
include_once(dirname(__FILE__) . '/Helper.php');

function dd($data) {

    var_dump($data);

    exit();

}



function redirect($url) {



    $string = '<script type="text/javascript">';



    $string .= 'window.location = "' . $url . '"';



    $string .= '</script>';







    echo $string;



    exit();

}

