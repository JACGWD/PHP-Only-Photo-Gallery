<?php

    $metatitle = "Photography Gallery";
    $metadescription = "Photography Gallery by Billy Poppins";

    require_once $_SERVER["DOCUMENT_ROOT"] . "/datasource/recordset-thumbnails.php";

    require_once $_SERVER["DOCUMENT_ROOT"] . "/themes/active/includes/header.php";


echo "<h1>" . $metatitle . "</h1>" . "\r\n";



echo "<main>" . "\r\n";
// open the <main> tag


foreach  ($content as $thumbnails_Content) {
echo "<figure>" . "\r\n";

echo '<a href="/photo.php?id=' . $thumbnails_Content['id'] . '">'  . "\r\n"; 

echo '<img src="' .  $thumbnails_Content['imagepath'] . '" alt="' . $thumbnails_Content['metadescription'] . '" />' . "\r\n";

echo '</a>'  . "\r\n";

echo "<figcaption>" . "\r\n";

    echo  $thumbnails_Content['h1title'] . "\r\n";

echo "</figcaption>" . "\r\n";

echo "</figure>" . "\r\n" . "\r\n" . "\r\n" . "\r\n";


} // close for each loop

echo "</main>" . "\r\n";
// close the <main> tag


require_once $_SERVER["DOCUMENT_ROOT"] . "/themes/active/includes/footer.php";

?>