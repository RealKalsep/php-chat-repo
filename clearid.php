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
$blocked = array("<style>", "<script>"); // obsolete, obsolete, obsolete!!!!!!!!!!

$ipcheck = $_SERVER['REMOTE_ADDR'];
$crypt = hash('sha256', $ipcheck);

$file = fopen("Px53DN5Cyb.txt", "r") or die("CANNOT FIND FILE. ABORTING");
$idlist = file_get_contents("Px53DN5Cyb.txt");

// if admin, clear ids, if not, redirect
if(strpos($idlist, $crypt) !== false) {
    $file = fopen("bmlja25hbWVz.txt", "w") or die("CANNOT FIND FILE. ABORTING");
    fwrite($file, "");
    fclose($file);
} else {
    echo('<script>window.location.href="index.php";</script>');
}

/* do better
on this code
*/
?>
<script>
setTimeout(function(){
    window.location.href="viewid.php";
}, 1000);
</script>
</body>
</html>