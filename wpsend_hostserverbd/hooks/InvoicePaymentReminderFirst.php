<?php

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");
    
add_hook("InvoicePaymentReminder", 1, function($vars) {
    if ($vars["type"] == "firstoverdue"):
        $messageClass = new Message();
        
        $template = $messageClass->getTemplate("InvoicePaymentReminderFirst");

        if ($template["active"] == 0):
            return null;
        endif;
    else:
        return false;
    endif;

    $result = $messageClass->getClientAndInvoiceDetails($vars["invoiceid"]);
    $num_rows = mysql_num_rows($result);
    
    if ($num_rows == 1):
        $userInfo = mysql_fetch_assoc($result);

        $template["variables"] = str_replace(" ", "", $template["variables"]);
        $replacefrom = explode(",", $template["variables"]);
        $replaceto = [
            $userInfo["firstname"],
            $userInfo["lastname"],
            $api->changeDateFormat($userInfo["duedate"])
        ];

        $message = str_replace($replacefrom, $replaceto, $template["template"]);

        $messageClass->setCountryCode($userInfo["country"]);
        $messageClass->setGsmnumber($userInfo["gsmnumber"]);
        $messageClass->setMessage($message);
        $messageClass->setUserid($userInfo["userid"]);
        $messageClass->send();
    endif;
});
