<!DOCTYPE html>
<html>
<head>
<title>PHP-Chat</title>
<link rel="stylesheet" href="chat.css">
</head>
<body>
<div class="title">
<h1>Wait before you can use the chat again!</h1>
</div>
<?php
$blocked = array("<style>", "<script>"); // obsolete, stop appearing in my eyes, line!

$ipcheck = $_SERVER['REMOTE_ADDR'];
$crypt = hash('sha256', $ipcheck);

$file = fopen("Px53DN5Cyb.txt", "r") or die("CANNOT FIND FILE. ABORTING");
$idlist = file_get_contents("Px53DN5Cyb.txt");

// if admin, clear chat, if not, redirect
if(strpos($idlist, $crypt) !== false) {
    $file = fopen("chat.txt", "w") or die("CANNOT FIND FILE. ABORTING");
    fwrite($file, date("(Y/m/d H:i:s) ")); #clearing chat
    fclose($file);
    
    $filet = fopen("chat.txt", "a") or die("CANNOT FIND FILE. ABORTING");
    fwrite($filet, "[SERVER] CHAT CLEARED");
    fclose($filet);
} else {
    echo('<script>window.location.href="index.php";</script>');
}

/* do better
on this code
*/
?>
<script>
setTimeout(function(){
    window.location.href="admpanel.php";
}, 1000);
</script>
</body>
</html>