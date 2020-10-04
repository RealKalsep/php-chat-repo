<!DOCTYPE html>
<html>
<head>
<title>PHP-Chat</title>
<link rel="stylesheet" href="chat.css">
</head>
<body>
<div class="title">
<h1>Wait before you can use the chat again!</h1>
<?php
$hash = $_POST["ban"];
echo("<p>Banning $hash</p>");

$blocked = array("<style>", "<script>");

$ipcheck = $_SERVER['REMOTE_ADDR'];
$crypt = hash('sha256', $ipcheck);

$file = fopen("Px53DN5Cyb.txt", "r") or die("CANNOT FIND FILE. ABORTING");
$idlist = file_get_contents("Px53DN5Cyb.txt");

// if admin, ban, if not, redirect
if(strpos($idlist, $crypt) !== false) {
    $filet = fopen("dEz6tWULWp.txt", "a") or die("CANNOT FIND FILE. ABORTING");
    fwrite($filet, date("(Y/m/d H:i:s) "));
    fwrite($filet, "$hash<br>\n");
    fclose($filet);
} else {
    echo('<script>window.location.href="index.php";</script>');
}

/* do better
on this code
*/
?>
</div>
<script>
setTimeout(function(){
    window.location.href="banlist.php";
}, 1000);
</script>
</body>
</html>