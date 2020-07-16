<?php
//session
//login

include "../inc/admin_menu.php";
include "../inc/admin_html.php";
include "../inc/query.php";

$edit = -1;
if (isset($_GET['edit'])) {
	$edit = $_GET['edit'];
}

if (isset($_GET['Save'])) {
	//save new page entry in db
	 newPage($_GET['name'], $_GET['link'], $_GET['skinid']);
	 header("Location: page.php");
     die();
}

if (isset($_GET['Update'])) {
	//update page entry in db
	echo updatePage($_GET['pageid'],$_GET['name'], $_GET['link'], $_GET['skinid']);
	//header("Location: page.php");
    //die();
}







echo head("Seat Reservation - Admin");
echo body_top_admin("Seat Reservation - Admin","username");
echo display_admin_menu("page", 2);
echo body_title_top("Admin - Page");
echo add_button("Add Page", "page.php?edit=0");
echo body_title_bottom();


echo table_head(array("PageID","Name","Link","SkinID","Edit"));
$pages = getPages();
foreach ($pages as $array) {
	echo table_body(array($array["pageid"],$array["name"],$array["link"],$array["skinid"],"<a href='page.php?edit=".$array["pageid"]."'>Edit</a>"));
}
echo table_end();

if ($edit == 0) {
	//display form, new page
	echo line();
	echo "<h3 class='h3'>Add new page</h3>";
	
	echo form_head("page.php", "GET");
	echo form_text("name","","Name:","Display name, Example: Downloads");
	echo form_text("link","","Link:","Link will be visible in the browser bar, Example: download");
	
	$values = [];
	$skins = getSkins();
	foreach ($skins as $array)
	{
		$values[] = array("valueid" => $array["skinid"],"value" => $array["name"]);
	}
	echo form_select("skinid",$values,"Skin:","Skin for that page");
	
	echo form_end("Save");
} else if ($edit > 0) {
	//display form, edit page
	echo line();
	echo "<h3 class='h3'>Update page</h3>";
	$page = getPage($edit);
	echo form_head("page.php", "GET");
	echo form_text("name",$page['name'],"Name:","Display name, Example: Downloads");
	echo form_text("link",$page['link'],"Link:","Link will be visible in the browser bar, Example: download");
	
	$values = [];
	$skins = getSkins();
	foreach ($skins as $array)
	{
		if ($array["skinid"] == $page['skinid']) {
			$values[] = array("valueid" => $array["skinid"],"value" => $array["name"],"selected" => 1);
		} else {
			$values[] = array("valueid" => $array["skinid"],"value" => $array["name"],"selected" => 0);
		}
	}
	echo form_select("skinid",$values,"Skin:","Skin for that page");
	echo form_end("Update");
}

echo body_bottom();
?>