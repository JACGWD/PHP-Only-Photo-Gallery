<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";

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