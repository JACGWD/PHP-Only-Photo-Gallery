<?php
// this file contains the opening tags for the html and body tags
// it is always included at the start of the template file 
// to open the tags properly
// tags that need unique information like <title> and <meta> call up variables to fill in the blanks
?>
<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />

<title><?php echo $metatitle; ?></title>
<?php // each template must have a value for $metatitle so it can be printed here ?>

<meta name="description" content="<?php echo $metadescription; ?>">
<?php // each template must have a value for $metadescription so it can be printed here ?>

</head>
<body>

<header>
    <nav>
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/datasource/nav.php"; 
        // require the navigation file to be loaded here
        ?>
    </nav>
</header>


