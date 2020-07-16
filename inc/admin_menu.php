<?php	
	function display_admin_menu($active, $isadmin)
	{
		$html = "<nav class='col-md-2 d-none d-md-block bg-light sidebar'>";
		$html = $html."<div class='sidebar-sticky'><ul class='nav flex-column'>";

		$html = $html."<li class='nav-item'>";
		if ($active == "home") {
			$html = $html."<a class='nav-link active' href='../index.php'>";
		} else {
			$html = $html."<a class='nav-link' href='../index.php'>";
		}
		$html = $html."<span data-feather='home'></span>";
		$html = $html." Home<span class='sr-only'>(current)</span></a></li>";
		
		$html = $html."<li class='nav-item'>";
		if ($active == "page") {
			$html = $html."<a class='nav-link active' href='page.php'>";
		} else {
			$html = $html."<a class='nav-link' href='page.php'>";
		}
		$html = $html."<span data-feather='settings'></span>";
		$html = $html." Page<span class='sr-only'>(current)</span></a></li>";
		
		if ($active == "element" || $active == "content") {
			$html = $html."<li class='nav-item'>";
			if ($active == "element") {
				$html = $html."<a class='nav-link active' href='element.php'>";
			} else {
				$html = $html."<a class='nav-link' href='element.php'>";
			}
			$html = $html."<span data-feather='settings'></span>";
			$html = $html." -> Element<span class='sr-only'>(current)</span></a></li>";
		}
		
		if ($active == "content") {
			$html .= "<li class='nav-item'>";
			$html .= "<a class='nav-link active' href='content.php'>";
			$html .= "<span data-feather='settings'></span>";
			$html .= " -> -> Content<span class='sr-only'>(current)</span></a></li>";
		}

		$html = $html."<li class='nav-item'>";
		if ($active == "room") {
			$html = $html."<a class='nav-link active' href='menu.php'>";
		} else {
			$html = $html."<a class='nav-link' href='menu.php'>";
		}
		$html = $html."<span data-feather='settings'></span>";
		$html = $html." Menu</a></li>";
	
		$html = $html."<li class='nav-item'>";
		if ($active == "seat") {
			$html = $html."<a class='nav-link active' href='upload.php'>";
		} else {
			$html = $html."<a class='nav-link' href='upload.php'>";
		}
		$html = $html."<span data-feather='settings'></span>";
		$html = $html." Upload</a></li>";

		$html = $html."<li class='nav-item'>";
		if ($active == "user") {
			$html = $html."<a class='nav-link active' href='settings.php'>";
		} else {	
			$html = $html."<a class='nav-link' href='settings.php'>";
		}
		$html = $html."<span data-feather='settings'></span>";
		$html = $html." Settings</a></li>";
		

		$html = $html."<li class='nav-item'>";
		if ($active == "usertoroom") {
			$html = $html."<a class='nav-link active' href='title.php'>";
		} else {	
			$html = $html."<a class='nav-link' href='title.php'>";
		}
		$html = $html."<span data-feather='settings'></span>";
		$html = $html." -> Title</a></li>";

		

		$html = $html."<li class='nav-item'>";
		if ($active == "usertoseat") {
			$html = $html."<a class='nav-link active' href='metatags.php'>";
		} else {	
			$html = $html."<a class='nav-link' href='metatags.php'>";
		}
		$html = $html."<span data-feather='settings'></span>";
		$html = $html." -> Metatags</a></li>";


		$html = $html."<li class='nav-item'>";
		if ($active == "block") {
			$html = $html."<a class='nav-link active' href='user.php'>";
		} else {
			$html = $html."<a class='nav-link' href='user.php'>";
		}
		$html = $html."<span data-feather='settings'></span>";
		$html = $html." -> User</a></li>";
	
		$html = $html."<li class='nav-item'>";
		if ($active == "reservation") {
			$html = $html."<a class='nav-link active' href='elements.php'>";
		} else {
			$html = $html."<a class='nav-link' href='elements.php'>";
		}
		$html = $html."<span data-feather='settings'></span>";
		$html = $html." -> Elements</a></li>";
		

		$html = $html."<li class='nav-item'>";
		if ($active == "zombies") {
			$html = $html."<a class='nav-link active' href='skin.php'>";
		} else {
			$html = $html."<a class='nav-link' href='skin.php'>";
		}
		$html = $html."<span data-feather='settings'></span>";
		$html = $html." -> Skins<span class='sr-only'>(current)</span></a></li>";
		

		
		$html = $html."</ul></div></nav>";
		
		return $html;
	}

?>
