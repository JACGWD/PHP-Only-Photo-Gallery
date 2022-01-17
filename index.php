<?php

// Surprise - no HTML!
//
// This is a very simple PHP file. It does three things:
// 1. It fetches the config file and reads it, remembering whatever instructions are in there.
// 2. It fetches the information to be displayed (this normally would be a database, but I am using a PHP file for demo purposes.)
// 3. It sends the information from step #2 to a specific HTML template to "fill in the blanks"

require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
// get the main configuration file

require_once $_SERVER["DOCUMENT_ROOT"] . "/datasource/recordset-thumbnails.php";
// load the text content from the database

require_once $_SERVER["DOCUMENT_ROOT"] . "/themes/active/templates/thumbs.php";
// call up the appropriate HTML/PHP template to display the information

?>