<!DOCTYPE html>
<html>
    <head>
    <title>PHP-Chat</title>
    <link rel="stylesheet" href="chat.css">
        <script>
            function refresh() {
                window.location.reload();
            }
            function tos() {
                window.location.href="tos.php";
            }
            function datausage() {
                window.location.href="datausage.php";
            }
        </script>
    </head>
    <body>
        <?php
            $ipcheck = $_SERVER['REMOTE_ADDR'];
            $crypt = hash('sha256', $ipcheck);

            $file = fopen("dEz6tWULWp.txt", "r") or die("CANNOT FIND FILE. ABORTING");
            $idlist = file_get_contents("dEz6tWULWp.txt");

            // ban check, if not banned, deserve freedom
            if(strpos($idlist, $crypt) !== false) {
                echo('');
            } else {
                echo('<script>window.location.href="index.php";</script>');
            }

        ?>
        <div class="title">
            <h1>You're banned!</h1>
        </div>
        <input class="write" type="submit" value="Refresh" onClick="refresh()">
        <input class="write" type="submit" value="Terms of Service" onClick="tos()">
        <input class="write" type="submit" value="Data Usage" onClick="datausage()">
        <div class="chat">
            <p>You're banned! If you want to appeal or think that this is a mistake, write us on: insert (someone did not do their job here)</p>
        </div>
    </body>
</html>