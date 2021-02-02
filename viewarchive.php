<!DOCTYPE html>
<html>
    <head>
        <title>PHP-Chat</title>
        <link rel="stylesheet" href="chat.css">
        <script>
            function redirect() {
                window.location.href="admpanel.php";
            }
            function refresh() {
                window.location.reload();
            }
            function archivechat() {
                window.location.href="archivechat.php";
            }
            function cleararchive() {
                window.location.href="cleararchive.php";
            }
        </script>
    </head>
    <body>
        <div class="title">
            <h1>View archive</h1>
            </div>
            <input class="write" type="submit" value="Back" onClick="redirect()">
            <input class="write" type="submit" value="Refresh" onClick="refresh()">
            <input class="write" type="submit" value="Archive Chat" onClick="archivechat()">
            <input class="write" type="submit" value="Clear Archive" onClick="cleararchive()">
            <div class="chat">

            <?php
                $ipcheck = $_SERVER['REMOTE_ADDR'];
                $crypt = hash('sha256', $ipcheck);

                // admin check
                $file = fopen("Px53DN5Cyb.txt", "r") or die("CANNOT FIND FILE. ABORTING");
                $idlist = file_get_contents("Px53DN5Cyb.txt");

                if(strpos($idlist, $crypt) !== false) {
                    echo('');
                } else {
                    echo('<script>window.location.href="index.php";</script>');
                }

                include('archive.txt');
            ?>
        </div>
    </body>
</html>