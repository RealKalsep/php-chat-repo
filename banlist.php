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
        function ban() {
            window.location.href="ban.php";
        }
        function clearbans() {
            window.location.href="resetbans.php";
        }
        </script>
    </head>
    <body>
        <div class="title">
            <h1>Banlist</h1>
        </div>
        <input class="write" type="submit" value="Back" onClick="redirect()">
        <input class="write" type="submit" value="Refresh" onClick="refresh()">
        <input class="write" type="submit" value="Reset Banlist" onClick="clearbans()">
        <form action="ban.php" method="post">
        Ban hash: <input class="write" type="text" name="ban">
        <input class="write" type="submit" value="Ban" onClick="ban()">
        </form>
        <div class="chat">

            <?php
                $ipcheck = $_SERVER['REMOTE_ADDR'];
                $crypt = hash('sha256', $ipcheck);

                $file = fopen("Px53DN5Cyb.txt", "r") or die("CANNOT FIND FILE. ABORTING");
                $idlist = file_get_contents("Px53DN5Cyb.txt");

                // if admin, gain access, if not, redirect
                if(strpos($idlist, $crypt) !== false) {
                    echo('');
                } else {
                    echo('<script>window.location.href="index.php";</script>');
                }

                include('dEz6tWULWp.txt'); // ban list
            ?>
        </div>
    </body>
</html>