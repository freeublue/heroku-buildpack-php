<?php
session_start();
error_reporting(0);
include "nav1.php";
$_SESSION = $_SESSION[customer];
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

echo "<div class='ppfull'><center><div class='header'>You have been logged out</div><p><a href='login.php'>Login again</a></p></div></center>
<center><div class='header1'>Orders</div></center>";

?>