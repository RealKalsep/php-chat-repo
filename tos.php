<!DOCTYPE html>
<html>
<head>
<title>PHP-Chat</title>
<link rel="stylesheet" href="chat.css">
<script>
function back() {
    window.location.href="index.php";
}
function refresh() {
    window.location.reload();
}
function tos() {
    window.location.href="tos.php";
}
function privpol() {
    window.location.href="privacypolicy.php";
}
</script>
</head>
<body>
<div class="title">
<h1>Rules</h1>
</div>
<input class="write" type="submit" value="Back" onClick="back()">
<input class="write" type="submit" value="Refresh" onClick="refresh()">
<div class="chat">
<?php
include('tos.txt');
?>
</div>
</body>
</html>