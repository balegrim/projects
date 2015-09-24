<html>
<?Php

if(isset($_COOKIE["Name"])){
	
	//unset($_COOKIE["Name"]);

	setcookie("Name", null,mktime().time() - 86400);
	setcookie("PictureURL", null,mktime().time() - 86400);
	setcookie("TextColor", null,mktime().time() - 86400);
	setcookie("BackgroundColor", null,mktime().time() - 86400);
	setcookie("HyperlinkColor", null,mktime().time() - 86400);
	setcookie("VHyperlinkColor", null,mktime().time() - 86400);
	setcookie("AHyperlinkColor", null,mktime().time() - 86400);
	setcookie("URLName1", null,mktime().time() - 86400);
	setcookie("URLName2", null,mktime().time() - 86400);
	setcookie("URLName3", null,mktime().time() - 86400);
	setcookie("URLLink1", null,mktime().time() - 86400);
	setcookie("URLLink2", null,mktime().time() - 86400);
	setcookie("URLLink3", null,mktime().time() - 86400);
}
else{
	echo "Didn't work";
}
?>
<head>
<title>resetCookie.php</title>
</head>

<body>

<p>A05_SessionColors/resetCookie.php</p>

<center>

<h2>Cookie Values</h2>


 
<p>Your Session & Cookie have been reset.</p>

<p><a href="default.php">Return to Main Page</a></p>

</center>

</body>

</html>
