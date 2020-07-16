<?php
//Test

// session
// php includes (db,content über )
// mix aus automatisch generierten dateien aus template und db content

// header
// body - content und menü
// footer


include "inc/query.php";
$filename="index";
$skin = getSkin($filename);
include "template/".$skin."_header.php";
include "template/".$skin."_body.php";
include "template/".$skin."_footer.php";
echo getUser("admin");
echo $skin;

?>