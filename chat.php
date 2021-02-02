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
        </script>
    </head>
    <body>
        <div class="title">
            <h1>Chat</h1>
        </div>
        <input class="write" type="submit" value="Back" onClick="redirect()">
        <input class="write" type="submit" value="Refresh" onClick="refresh()">
        <input class="write" type="submit" value="Commands" onClick="commands()">
        <br>

        <p class="highlight">You need to refresh (there is no auto refresh right now)<br>Sometimes, someone might abuse the chat by scripts. Please report them.</p>
        <form action="processing.php" method="post">
        Writing: <input class="write" type="text" name="chat">
        <input class="write" type="submit" value="Send">
        </form>
        <br>

        <div class="chat">
            <?php
                $ipcheck = $_SERVER['REMOTE_ADDR'];
                $crypt = hash('sha256', $ipcheck);

                $file = fopen("dEz6tWULWp.txt", "r") or die("CANNOT FIND FILE. ABORTING");
                $idlist = file_get_contents("dEz6tWULWp.txt");

                // admin check
                if(strpos($idlist, $crypt) !== false) {
                    echo('<script>window.location.href="banned.php";</script>');
                } else {
                    echo('');
                }

                $file = fopen("bmlja25hbWVz.txt", "r") or die("CANNOT FIND FILE. ABORTING");
                $idlist = file_get_contents("bmlja25hbWVz.txt");

                // if ID not logged, redirect to index
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