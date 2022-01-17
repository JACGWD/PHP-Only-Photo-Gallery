<?php
// a php file can contain plain old simple HTML
// This makes it easy to "include" one piece of HTML many times in the web site without having to code it many times
// Example: one include in the footer of a 5000 page web site. Update the copyright + year only once instead of 5000 times.
?>
<ul class="navigation">
    <li class="home"><a href="/index.php">Home</a></li>
    <?php 
    // note that the paths start with a /
    // this makes the path root-relative, meaning the path is defined starting from the root folder level
    // root-relative paths won't break even if the file is included in files in subfolders
    ?>
</ul>