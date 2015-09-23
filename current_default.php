<html>
<?Php

$Name;
$PictureURL;
$TextColor;
$BackgroundColor;
$HyperlinkColor;
$VHyperlinkColor;
$AHyperlinkColor;
$URLName1;
$URLName2;
$URLName3;
$URLLink1;
$URLLink2;
$URLLink3;

session_start();
if ($_SESSION['Name'] != null){
	
}
else if ($_COOKIE['cookie'] != null){
	
}
else{
	$Name = "Bill";
	$PictureURL = "http://www.mugshots.org/misc/bill-gates.jpg";
	$TextColor = "green";
	$BackgroundColor = "black";
	$HyperlinkColor = "yellow";
	$VHyperlinkColor = "red";
	$AHyperlinkColor = "cyan";
	$URLName1 = "Bill Gates Net Worth Page";
	$URLName2 = "United States v. Microsoft";
	$URLName3 = "Microsoft Home Page";
	$URLLink1 = "http://en.wikipedia.org/wiki/Bill_Gates";
	$URLLink2 = "http://www.usdoj.gov/atr/cases/ms_index.htm";
	$URLLink3 = "http://www.microsoft.com";
}

?>
<head>
<title>A05_SessionColors</title>
</head>

<body bgcolor=<?Php echo $BackgroundColor; ?> 
      text=<?Php echo $TextColor; ?> 
      link=<?Php echo $HyperlinkColor; ?> 
      vlink=<?Php echo $VHyperlinkColor; ?> 
      alink=<?Php echo $AHyperlinkColor; ?>>

 

<center>
<h1><?Php echo $Name; ?>'s Home Page</h1>
<p><img border="0" src="<?Php echo $PictureURL; ?>"></p>
<h2>My Three Favorite Links</h2>
<ul>
  <li>
    <p style="line-height: 150%"><a href="<?Php echo $URLLink1; ?>"><?Php echo $URLName1; ?></a></li>
  <li>
    <p style="line-height: 150%"><a href="<?Php echo $URLLink2; ?>"><?Php echo $URLName2; ?></a></li>
  <li>
    <p style="line-height: 150%"><a href="<?Php echo $URLLink3; ?>"><?Php echo $URLName3; ?></a>&nbsp;</li>
</ul>


</center>

<h3 align="center">Click <a href="optionsForm.php">HERE</a> to change display options.</h3>

<p>&nbsp;</p>

</body>

</html>
