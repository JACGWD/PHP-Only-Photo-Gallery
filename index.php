<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
// get the main configuration file

require_once $_SERVER["DOCUMENT_ROOT"] . "/datasource/recordset-thumbnails.php";
// load the text content from the database

require_once $_SERVER["DOCUMENT_ROOT"] . "/themes/active/templates/thumbs.php";
// call up the appropriate HTML/PHP template to display the information

?>