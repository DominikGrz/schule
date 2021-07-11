<?php

    $to = "mailto:eineemail@etwas.com";

    $subject = "3 Fehlversuche";

    $txt = "ok";

    $header = "From: eineandereemail@etwas.com";

    $q = $_GET["q"];

    

    function getUserIpAddr(){

        if(!empty($_SERVER['HTTP_CLIENT_IP'])){

            $ip = $_SERVER['HTTP_CLIENT_IP'];

        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){

            //ip pass from proxy

            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

        }else{

            $ip = $_SERVER['REMOTE_ADDR'];

    }

    return $ip;

    }

    

    $txt = "Username: " . get_current_user() . "\r\n" . "IP: " . getUserIpAddr() . "\r\n" . "DNS-Server: " . gethostbyaddr($_SERVER['REMOTE_ADDR']) . "\r\n" . date("d-m-Y H:i:s");



    if($q == "true"){

        mail($to, $subject, $txt, $header);

    }

?>