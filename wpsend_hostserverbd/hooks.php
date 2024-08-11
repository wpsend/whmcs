<?php

if (!defined("WHMCS")):
    die("This file cannot be accessed directly");
endif;

if(!defined("ZXPLGM_SITEURL"))
    define("ZXPLGM_SITEURL", "https://my.wpsend.org");


if ($handle = opendir(dirname(__FILE__) . "/hooks")):
    require "lib/Message.php";
    
    while (false !== ($entry = readdir($handle))):
        if(substr($entry, strlen($entry) - 4, strlen($entry)) == ".php"):
            require "hooks/{$entry}";
        endif;
    endwhile;

    closedir($handle);
endif;
