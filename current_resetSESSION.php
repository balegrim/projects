<html>
<?Php

session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

?>
<head>
<title>resetSession.php</title>
</head>

<body>

<p>A05_SessionColors/resetSession.php</p>

<center>

<h2>Session Values</h2>

 

<p>Your Session has been reset.</p>

<p><a href="default.php">Return to Main Page</a></p>

</center>

</body>

</html>
