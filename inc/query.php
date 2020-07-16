<?php
include "db.php";

function getUser($username)
{
	$returnvalue = "";
	global $pdo;
	$statement = $pdo->prepare("SELECT user.userid FROM user where user.username = ?");
	if ($statement->execute(array($username))) {
		while($row = $statement->fetch()) {
			$returnvalue = $row['userid'];
		}
	} 
	if ($returnvalue != "") {
		return $returnvalue;
	} else {
		return false;
	}
	
}

function getSkin($name)
{
	$returnvalue = "";
	global $pdo;
	$statement = $pdo->prepare("SELECT skin.filename from skin INNER JOIN page ON skin.skinid = page.skinid where page.name = ?");
	if ($statement->execute(array($name))) {
		while($row = $statement->fetch()) {
			$returnvalue = $row['filename'];
		}
	} 
	if ($returnvalue != "") {
		return $returnvalue;
	} else {
		return false;
	}
	
}

function getPages()
{
	$returnarray = [];
	
	global $pdo;
	$statement = $pdo->prepare("SELECT page.pageid, page.name, page.link, page.skinid from page");
	if ($statement->execute()) {
		while($row = $statement->fetch()) {
			$pagearray = [];
			$pagearray['pageid'] = $row['pageid'];
			$pagearray['name'] = $row['name'];
			$pagearray['link'] = $row['link'];
			$pagearray['skinid'] = $row['skinid'];
			$returnarray[] = $pagearray;
		}
	} 
	if ($returnarray != "") {
		return $returnarray;
	} else {
		return false;
	}
	
}

function getPage($pageid)
{
	$pagearray = [];
	
	global $pdo;
	$statement = $pdo->prepare("SELECT page.pageid, page.name, page.link, page.skinid from page where pageid = ? LIMIT 1");
	if ($statement->execute(array($pageid))) {
		while($row = $statement->fetch()) {
			$pagearray['pageid'] = $row['pageid'];
			$pagearray['name'] = $row['name'];
			$pagearray['link'] = $row['link'];
			$pagearray['skinid'] = $row['skinid'];
		}
	} 
	if ($pagearray != "") {
		return $pagearray;
	} else {
		return false;
	}
	
}

function getSkins()
{
	$returnarray = [];
	
	global $pdo;
	$statement = $pdo->prepare("SELECT skin.skinid, skin.name, skin.filename from skin");
	if ($statement->execute()) {
		while($row = $statement->fetch()) {
			$pagearray = [];
			$pagearray['skinid'] = $row['skinid'];
			$pagearray['name'] = $row['name'];
			$pagearray['filename'] = $row['filename'];
			$returnarray[] = $pagearray;
		}
	} 
	if ($returnarray != "") {
		return $returnarray;
	} else {
		return false;
	}
	
}

function newPage($name, $link, $skinid)
{
	
	global $pdo;
	$statement = $pdo->prepare("INSERT INTO page (name,link,skinid) VALUES (?,?,?)");
	if ($statement->execute(array($name,$link,$skinid))) {
		return true;
	} else {
		return false;
	}
	
}

function updatePage($pageid, $name, $link, $skinid)
{
	
	global $pdo;
	$statement = $pdo->prepare("UPDATE page SET name=?,link=?,skinid=? WHERE pageid = ?");
	if ($statement->execute(array($name,$link,$skinid,$pageid))) {
		return true;
	} else {
		return false;
	}
	
}

?>