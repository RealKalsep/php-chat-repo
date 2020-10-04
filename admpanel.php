<!DOCTYPE html>
<html>
<head>
<title>PHP-Chat</title>
<link rel="stylesheet" href="chat.css">
<script>
function redirect() {
    window.location.href="index.php";
}
function refresh() {
    window.location.reload();
}
function commands() {
    window.open("commands.php", "commands", "width=400,height=400");
}
function clearchat() {
    window.location.href="clearchat.php";
}
function viewids() {
    window.location.href="viewid.php";
}
function viewarchive() {
    window.location.href="viewarchive.php";
}
function viewbans() {
    window.location.href="banlist.php";
}
function viewdetections() {
    window.location.href="detection.php";
}
</script>
</head>
</head>
<body>
<div class="title">
<h1>Admin Panel</h1>
</div>
<input class="write" type="submit" value="Back" onClick="redirect()">
<input class="write" type="submit" value="Refresh" onClick="refresh()">
<input class="write" type="submit" value="Commands" onClick="commands()">
<input class="write" type="submit" value="Clear Chat" onClick="clearchat()">
<input class="write" type="submit" value="View IDs" onClick="viewids()">
<input class="write" type="submit" value="View Archive" onClick="viewarchive()">
<input class="write" type="submit" value="Banlist" onClick="viewbans()">
<input class="write" type="submit" value="Detections" onClick="viewdetections()">
<br>
<p>Submit a server message which everyone will see while remaining anonymous<br>
<form action="admmessage.php" method="post">
Writing: <input class="write" type="text" name="server">
<input class="write" type="submit" value="Send">
<br>
<div class="chat">
<?php
$ipcheck = $_SERVER['REMOTE_ADDR'];
$crypt = hash('sha256', $ipcheck);

$file = fopen("Px53DN5Cyb.txt", "r") or die("CANNOT FIND FILE. ABORTING");
$idlist = file_get_contents("Px53DN5Cyb.txt");

// if admin, access admin panel, if not, redirect
if(strpos($idlist, $crypt) !== false) {
    echo('');
} else {
    echo('<script>window.location.href="index.php";</script>');
}

include('chat.txt');
?>
</div>
<br>
</body>
</html>