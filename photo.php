<?php
// This page displays the high resolution image
// Every time you click a thumbnail link, this page is called up
// That means you only have one page to maintain, not 20 or 500 000
// You get it to display a different image by send it a different ID number
// Each database record is identified by a unique ID number
// This ID number is called a "primary key"
// The ID number is sent as part of the URL (after the question mark)
// Ex: photo.php?id=9 calls up photo #9


require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
// fetch the config file

$passedID = $_GET['id'];
// get the ID number from the incoming URL


$datasource =  "/datasource/record" . $passedID . ".php";
// create a variable that concatenates /datasource/record + ID number + .php


$concatenated_path_and_ID = $_SERVER["DOCUMENT_ROOT"] . $datasource;
// create a variable that concatenates the path to the root folder + /datasource/record + ID number + .php

require $concatenated_path_and_ID;
// require whatever the result of line 13 is
// for example: require /datasource/record2.php (if the ID is 2)
// this will pull in the proper data from the datasource folder

require_once $_SERVER["DOCUMENT_ROOT"] . "/themes/active/templates/highres.php";
//  take the info stored in the array within record2.php (if the ID is 2) and fill the blanks in highres.php with it
?>