<!DOCTYPE html>
<html>

<head>
<style>
/*body {
	background-image: url("background.jpg");
	background-size: cover;
	background-repeat: no-repeat;
	background-color: navy;
	color: white;
	} */
h1 {
	color: gray;
	margin-left: 40px;
	}
</style>

/*<script src="podstrony/kolorujtlo.js" type="text/javascript"></script>*/

<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="pl" />
<meta name="Author" content="Szymon Bogdański" />
<title>My website</title>
</head>

<body>

<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
/* po tym komentarzu będzie kod do dynamicznego ładowania stron */
//$strona = "podstrony/glowna.html";
//include($strona);
if($_GET['idp']==''){
	$website="subpages/main.html";
} elseif($_GET['idp']=='1'){
	$strona="podstrony/podstrona1.html";
} elseif($_GET['idp']=='2'){
	$strona="podstrony/podstrona2.html";
} elseif($_GET['idp']=='3'){
	$strona="podstrony/podstrona3.html";
} elseif($_GET['idp']=='4'){
	$strona="podstrony/podstrona4.html";
} elseif($_GET['idp']=='5'){
	$strona="podstrony/podstrona5.html";
} elseif($_GET['idp']=='6'){
	$strona="podstrony/kontakt.html";
} else {
	$strona="subpages/main.html";
}
include($website);
?>
	
</body>
</html>