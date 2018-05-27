<?php

    session_start();
    require_once "Facebook/autoload.php";

    $FB = new \Facebook\Facebook([
        'app_id'=>'861532794047358',
        'app_secret'=>'0793b3c5fef42421684374b925794d71',
        'default_graph_version'=>'v3.0'
    ]);

    $helper = $FB->getRedirectLoginHelper();

