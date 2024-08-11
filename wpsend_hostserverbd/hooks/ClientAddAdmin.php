<?php

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");
    
add_hook("ClientAdd", 1, function($vars) {
    $messageClass = new Message();

    $template = $messageClass->getTemplate("ClientAddAdmin");

    if ($template["active"] == 0):
        return null;
    endif;

    $admingsm = explode(",", $template["admingsm"]);

    foreach ($admingsm as $gsm):
        if (!empty($gsm)):
            $messageClass->setGsmnumber(trim($gsm));
            $messageClass->setUserid($vars["userid"]);
            $messageClass->setMessage($template["template"]);
            $messageClass->send();
        endif;
    endforeach;
});