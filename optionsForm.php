<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>Change View Options</title>
</head>

<body>

<p align="left">A05_SessionColors/optionsForm.php</p>

<center>

<h1>Change Display Options</h1>

<form method="POST" action="changeOptions.php">
 
 
  
  <table border="0" cellpadding="3" width="681">
    <tr>
      <td align="right" width="147">Name:</td>
      <td width="512" colspan="3"><input type="text" name="txtName" value="Bill" size="20"></td>
    </tr>
    <tr>
      <td align="right" width="147">Picture URL:</td>
      <td width="512" colspan="3"><input type="text" name="txtPicture" value="http://www.mugshots.org/misc/bill-gates.jpg" size="53"></td>
    </tr>
    <tr>
      <td align="right" width="147">Text Color:</td>
      <td width="512" colspan="3"><select size="1" name="cboTextColor">
          <option>black</option><option>blue</option><option selected>green</option><option>cyan</option><option>red</option><option>magenta</option><option>yellow</option><option>white</option>  
		</select></td>
    </tr>
    <tr>
      <td align="right" width="147">Background Color:</td>
      <td width="512" colspan="3"><select size="1" name="cboBGColor">
         <option selected>black</option><option>blue</option><option>green</option><option>cyan</option><option>red</option><option>magenta</option><option>yellow</option><option>white</option>        </select></td>
    </tr>
    <tr>
      <td align="right" width="147">Hyperlink Color:</td>
      <td width="512" colspan="3"><select size="1" name="cboLinkColor">
       <option>black</option><option>blue</option><option>green</option><option>cyan</option><option>red</option><option>magenta</option><option selected>yellow</option><option>white</option>        </select></td>
    </tr>
    <tr>
      <td align="right" width="147">Visited Hyperlink Color:</td>
      <td width="512" colspan="3"><select size="1" name="cboVLinkColor">
      <option>black</option><option>blue</option><option>green</option><option>cyan</option><option selected>red</option><option>magenta</option><option>yellow</option><option>white</option>        </select></td>
    </tr>
    <tr>
      <td align="right" width="147">Active Hyperlink Color:</td>
      <td width="512" colspan="3"><select size="1" name="cboALinkColor">
       <option>black</option><option>blue</option><option>green</option><option selected>cyan</option><option>red</option><option>magenta</option><option>yellow</option><option>white</option>        </select></td>
    </tr>
    <tr>
      <td align="right" width="147">Favorite Links:</td>
      <td width="512" colspan="3"></td>
    </tr>
    <tr>
      <td align="right" width="147">&nbsp;Link 1 Title:</td>
      <td width="185"><input type="text" name="txtLink1Title" value="Bill Gates Net Worth Page" size="25"></td>
      <td width="46">Link 1:</td>
      <td width="266"><input type="text" name="txtLink1" size="35" value="http://en.wikipedia.org/wiki/Bill_Gates"></td>
    </tr>
    <tr>
      <td align="right" width="147"> Link 2 Title:</td>
      <td width="185"><input type="text" name="txtLink2Title" value="United States v. Microsoft" size="25"></td>
      <td width="46">Link 2:</td>
      <td width="266"><input type="text" name="txtLink2" size="35" value="http://www.usdoj.gov/atr/cases/ms_index.htm"></td>
    </tr>
    <tr>
      <td align="right" width="147"> Link 3 Title:</td>
      <td width="185"><input type="text" name="txtLink3Title" value="Microsoft Home Page" size="25"></td>
      <td width="46">Link 3:</td>
      <td width="266"><input type="text" name="txtLink3" size="35" value="http://www.microsoft.com"></td>
    </tr>
  </table>
  
  <br>
  
  <table border="1">
    <tr>
      <td>
         <p align="left"><input type="radio" name="radSave" value="SESSION" checked>Save for Current SESSION Only</p>
         <p align="left"><input type="radio" name="radSave"  value="cookie">Save in Cookie</p>
      </td>
    </tr>
  </table>
  
  <p align="center"><input type="submit" value="Submit" name="btnSubmit"><input type="reset" value="Reset" name="btnReset"></p>
  
</form>
</center>
<center>
<p><a href="resetSESSION.php">Reset SESSION</a></p>
<p><a href="resetCookie.php">Reset Cookie</a></p>
</center>
<p>&nbsp;</p>
</body>

</html>
