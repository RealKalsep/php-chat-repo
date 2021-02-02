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
            function cleardetections() {
                window.location.href="cleardetections.php";
            }
        </script>
    </head>
    <body>
        <div class="title">
            <h1>Detection list</h1>
        </div>
        <input class="write" type="submit" value="Back" onClick="redirect()">
        <input class="write" type="submit" value="Refresh" onClick="refresh()">
        <input class="write" type="submit" value="Reset detections" onClick="cleardetections()">
        <div class="chat">
            <?php
                $ipcheck = $_SERVER['REMOTE_ADDR'];
                $crypt = hash('sha256', $ipcheck);

                $file = fopen("Px53DN5Cyb.txt", "r") or die("CANNOT FIND FILE. ABORTING");
                $idlist = file_get_contents("Px53DN5Cyb.txt");

                // if admin, view, if not, redirect
                if(strpos($idlist, $crypt) !== false) {
                    include("ZaS442gVxt.txt");
                } else {
                    echo('<script>window.location.href="index.php";</script>');
                }

                /* do better
                on this code
                */
            ?>
        </div>
    </body>
</html>