<html>
<?Php

$Name = ($_POST["txtName"]);
$PictureURL = ($_POST["txtPicture"]);
$TextColor = ($_POST["cboTextColor"]);
$BackgroundColor = ($_POST["cboBGColor"]);
$HyperlinkColor = ($_POST["cboLinkColor"]);
$VHyperlinkColor = ($_POST["cboVLinkColor"]);
$AHyperlinkColor = ($_POST["cboALinkColor"]);
$URLName1 = ($_POST["txtLink1Title"]);
$URLName2 = ($_POST["txtLink2Title"]);
$URLName3 = ($_POST["txtLink3Title"]);
$URLLink1 = ($_POST["txtLink1"]);
$URLLink2 = ($_POST["txtLink2"]);
$URLLink3 = ($_POST["txtLink3"]);

session_start();
$_SESSION['Name'] = $Name;
$_SESSION['PictureURL'] = $PictureURL;
$_SESSION['TextColor'] = $TextColor;
$_SESSION['BackgroundColor'] = $BackgroundColor;
$_SESSION['HyperlinkColor'] = $HyperlinkColor;
$_SESSION['VHyperlinkColor'] = $VHyperlinkColor;
$_SESSION['AHyperlinkColor'] = $AHyperlinkColor;
$_SESSION['URLName1'] = $URLName1;
$_SESSION['URLName2'] = $URLName2;
$_SESSION['URLName3'] = $URLName3;
$_SESSION['URLLink1'] = $URLLink1;
$_SESSION['URLLink2'] = $URLLink2;
$_SESSION['URLLink3'] = $URLLink3;

session_write_close();

setcookie("Name", $Name,time() + 6000);
setcookie("PictureURL", $PictureURL,time() + 6000);
setcookie("TextColor", $TextColor,time() + 6000);
setcookie("BackgroundColor", $BackgroundColor,time() + 6000);
setcookie("HyperlinkColor", $HyperlinkColor,time() + 6000);
setcookie("VHyperlinkColor", $VHyperlinkColor,time() + 6000);
setcookie("AHyperlinkColor", $AHyperlinkColor,time() + 6000);
setcookie("URLName1", $URLName1,time() + 6000);
setcookie("URLName2", $URLName2,time() + 6000);
setcookie("URLName3", $URLName3,time() + 6000);
setcookie("URLLink1", $URLLink1,time() + 6000);
setcookie("URLLink2", $URLLink2,time() + 6000);
setcookie("URLLink3", $URLLink3,time() + 6000);

?>
<head>

<title>ChangeOptions</title>
</head>

<body>

<p>A05_SessionColors/changeOptions.php</p>
<center>

<p><a href="default.php">Return to Main Page</a></p>

<p>&nbsp;</p>

</center>
</body>

</html>
