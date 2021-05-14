<!DOCTYPE html>
<html>
    <head>
        <title>PHP-Chat</title>
        <link rel="stylesheet" href="chat.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
            $blocked = array("<style>", "<script>"); // obsolete, therefore removing in future
            $ipcheck = $_SERVER['REMOTE_ADDR'];
            $crypt = hash('sha256', $ipcheck);

            // ban system
            $file = fopen("dEz6tWULWp.txt", "r") or die("CANNOT FIND FILE. ABORTING");
            $idlist = file_get_contents("dEz6tWULWp.txt");

            if(strpos($idlist, $crypt) !== false) {
                echo('<script>window.location.href="banned.php";</script>');
            } else {
                echo('');
            }
        ?>
        <div class="title">
            <h1>Welcome to PHP-Chat!</h1>
        </div>
        <input class="write" type="submit" value="Refresh" onClick="refresh()">
        <input class="write" type="submit" value="Rules" onClick="tos()">
        <input class="write" type="submit" value="Data Usage" onClick="datausage()">

        <div class="chat">
            <form action="validing.php" method="post">
            Write nick: <input class="write" type="text" name="nick">
            <input class="write" type="submit" value="Send"> (NICKS WORK IN PROGRESS, IDS ONLY)
            </form>
            <form action="admcheck.php" method="post">
            Admin Password: <input class="write" type="text" name="adminpass">
            <input class="write" type="submit" value="Admin">
            </form>
        </div>
        <p class="highlight">1.0.8_05 - build date: 05/14/21</p>
    </body>
</html>