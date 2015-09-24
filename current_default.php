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
	$Name = $_SESSION['Name'];
	$PictureURL = $_SESSION['PictureURL'];
	$TextColor = $_SESSION['TextColor'];
	$BackgroundColor = $_SESSION['BackgroundColor'];
	$HyperlinkColor = $_SESSION['HyperlinkColor'];
	$VHyperlinkColor = $_SESSION['VHyperlinkColor'];
	$AHyperlinkColor = $_SESSION['AHyperlinkColor'];
	$URLName1 = $_SESSION['URLName1'];
	$URLName2 = $_SESSION['URLName2'];
	$URLName3 = $_SESSION['URLName3'];
	$URLLink1 = $_SESSION['URLLink1'];
	$URLLink2 = $_SESSION['URLLink2'];
	$URLLink3 = $_SESSION['URLLink3'];
}
else if (isset($_COOKIE["Name"])){
	$Name = $_COOKIE["Name"];
	$PictureURL = $_COOKIE["PictureURL"];
	$TextColor = $_COOKIE["TextColor"];
	$BackgroundColor = $_COOKIE["BackgroundColor"];
	$HyperlinkColor = $_COOKIE["HyperlinkColor"];
	$VHyperlinkColor = $_COOKIE["VHyperlinkColor"];
	$AHyperlinkColor = $_COOKIE["AHyperlinkColor"];
	$URLName1 = $_COOKIE["URLName1"];
	$URLName2 = $_COOKIE["URLName2"];
	$URLName3 = $_COOKIE["URLName3"];
	$URLLink1 = $_COOKIE["URLLink1"];
	$URLLink2 = $_COOKIE["URLLink2"];
	$URLLink3 = $_COOKIE["URLLink3"];
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
<p><img border="0" src=<?Php echo $PictureURL; ?>></p>
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
