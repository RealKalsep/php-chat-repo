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
$blocked = array("<style>", "<script>"); // obsolete, okay, I'm going to jump, why am I not deleting this >:o

$ipcheck = $_SERVER['REMOTE_ADDR'];
$crypt = hash('sha256', $ipcheck);

$file = fopen("Px53DN5Cyb.txt", "r") or die("CANNOT FIND FILE. ABORTING");
$idlist = file_get_contents("Px53DN5Cyb.txt");

// if admin, clear detections, if not, redirect
if(strpos($idlist, $crypt) !== false) {
    $file = fopen("ZaS442gVxt.txt", "w") or die("CANNOT FIND FILE. ABORTING"); #clearing detections
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
    window.location.href="detection.php";
}, 1000);
</script>
</body>
</html>