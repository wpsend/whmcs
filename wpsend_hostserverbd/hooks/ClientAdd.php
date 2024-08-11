<?php

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");
    
add_hook("ClientAdd", 1, function($vars) {
    $messageClass = new Message();

    $template = $messageClass->getTemplate("ClientAdd");

    if($template["active"] == 0):
        return null;
    endif;

    $result = $messageClass->getClientDetails($vars["userid"]);
    $num_rows = mysql_num_rows($result);

    if($num_rows == 1):
        $userInfo = mysql_fetch_assoc($result);

        $template["variables"] = str_replace(" ", "", $template["variables"]);
        $replacefrom = explode(",", $template["variables"]);
        $replaceto = [
            $userInfo["firstname"],
            $userInfo["lastname"],
            $vars["email"],
            $vars["password"]
        ];
        $message = str_replace($replacefrom, $replaceto, $template["template"]);

        $messageClass->setCountryCode($userInfo["country"]);
        $messageClass->setGsmnumber($userInfo["gsmnumber"]);
        $messageClass->setMessage($message);
        $messageClass->setUserid($vars["userid"]);
        $messageClass->send();
    endif;
});
