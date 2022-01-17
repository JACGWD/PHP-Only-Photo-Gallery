<?php

// This recordset is for the THUMBNAILS GALLERY page

$content = array (  // an array is a set of related information. Ex: multiple pieces of info about one photo
                    // $content is the "parent" array, as it holds several other arrays

array (   // the first array inside "content":: child array #1
		'id'                => "1",
    'metatitle'         => "Icelandic landscape",
    'metadescription'   => "Jokulsarlon glacial lagoon",
		'h1title'           => "Jokulsarlon glacial lagoon",
		'imagepath'         => "/img/thumbs/sample.jpg",
		'caption'           => "Icebergs in the Jokulsarlon glacial lagoon on the south coast of Iceland",
    'copyright'         => "&copy Eric Girouard, 2014"),  // last line ends with a ),

  array (  // the second array inside "content": child array #2
      'id'                => "2",
      'metatitle'         => "Jordanian temple",
      'metadescription'   => "Jordanian temple in Petra",
      'h1title'           => "Jordanian temple in Petra",
      'imagepath'         => "/img/thumbs/sample2.jpg",
      'caption'           => "The Treasury: a Jordanian temple located in Petra",
      'copyright'         => "&copy Eric Girouard, 2013"),

    array (  // the third array inside "content": child array #3
      'id'                => "3",
      'metatitle'         => "Beachwood Stump",
      'metadescription'   => "Beachwood Stump at Cap Bon Ami Beach in Gaspésie",
      'h1title'           => "Beachwood Stump at Cap Bon Ami",
      'imagepath'         => "/img/thumbs/sample3.jpg",
      'caption'           => "Beachwood Stump at Cap Bon Ami Beach in Gaspésie Queébec Canada",
      'copyright'         => "&copy Eric Girouard, 2021"),    


  // You can add as many arrays as you want thumbnails on the gallery page    

);  // last line closes the parent $content array
?>