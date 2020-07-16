Test Admin
<?php
//session
//login
//dashboard-menu

//page anlegen
//element anlegen
//content anlegen
//title bearbeiten, meta tags bearbeiten
//user bearbeiten
//upload
//elemente admin
//menu admin


	
	


include "../inc/admin_menu.php";
include ("../inc/admin_html.php");


echo head("Seat Reservation - Admin");
echo body_top_admin("Seat Reservation - Admin","username");
echo display_admin_menu("zombies", 2);
echo body_title_top("Admin - Zombies");
echo body_title_bottom();


echo body_bottom();
?>
