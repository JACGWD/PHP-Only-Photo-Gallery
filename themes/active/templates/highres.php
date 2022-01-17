<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
// Always go fetch the config files that has info about how the entire site works




foreach  ($content as $page_Content) {
// call up the array of information from the record source
// break the array into individual pieces of information to be used to fill in the blanks in the HTML


    $metatitle = $page_Content['metatitle'];
    $metadescription = $page_Content['metadescription'];
    // assign the texts for the <head> tags

}

require_once $_SERVER["DOCUMENT_ROOT"] . "/themes/active/includes/header.php";
// call up the header file to start the html



foreach  ($content as $page_Content) {
// call up the array of information from the record source
// break the array into individual pieces of information to be used to fill in the blanks in the HTML



        echo "<h1>" . $page_Content['h1title'] . "</h1>" . "\r\n";
        // print the H1 tag, insert the variable and then close the tag, followed by a line return (to make the HTML in the browser easier to read)

        echo "<main>" . "\r\n";
        // open the <main> tag, followed by a line return

                echo "<figure>" . "\r\n";
                // open the <figure> tag, followed by a line return


                        echo '<img src="' .  $page_Content['imagepath'] . '" alt="' . $page_Content['metadescription'] . '" />' . "\r\n";
                        // open the <img> tag, add the path to the img, 
                        // add the alt text tag, fill it with the metadescription text, 
                        // close the tag, followed by a line return


                        echo "<figcaption>" . "\r\n";
                        // open the <figcaption> tag, followed by a line return

                            echo  $page_Content['caption'] ."<br>" . $page_Content['copyright'] . "\r\n";
                            // insert the caption, a <br> then the copyright info, followed by a line return 

                        echo "</figcaption>" . "\r\n";
                        // close the figcaption tag, followed by a line return 

                echo "</figure>" . "\r\n";
                // close the figure tag, followed by a line return 




            } // close the "for each" loop that starts on line 25

            echo "</main>" . "\r\n";
            // close the <main> tag, followed by a line return 


require_once $_SERVER["DOCUMENT_ROOT"] . "/themes/active/includes/footer.php";
// include the footer file here

?>