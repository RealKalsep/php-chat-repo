<!DOCTYPE html>
<html>
    <head>
        <title>PHP-Chat</title>
        <link rel="stylesheet" href="chat.css">
    </head>
    <body>
        <div class="title">
            <h1>Checking your nick, please wait...</h1>
        </div>
        <div class="chat">
            <p>Only IDs for now. Nicks in the future! Stay tuned :)</p>
            <?php
                $ipcheck = $_SERVER['REMOTE_ADDR'];
                $crypt = hash('sha256', $ipcheck);

                $file = fopen("dEz6tWULWp.txt", "r") or die("CANNOT FIND FILE. ABORTING");
                $idlist = file_get_contents("dEz6tWULWp.txt");

                if(strpos($idlist, $crypt) !== false) {
                    echo('<script>window.location.href="banned.php";</script>');
                } else {
                    echo('');
                }

                $nick = $_POST["nick"];

                $file = fopen("bmlja25hbWVz.txt", "r") or die("CANNOT FIND FILE. ABORTING");
                $idlist = file_get_contents("bmlja25hbWVz.txt");

                // check if id exists, if not, write the ip to a line
                if(strpos($idlist, $crypt) !== false) {
                    echo("ID exists, continuing\n<br>");
                } else {
                    $filet = fopen("bmlja25hbWVz.txt", "a") or die("CANNOT FIND FILE. ABORTING");
                    fwrite($filet, date("(Y/m/d H:i:s) "));
                    fwrite($filet, "$crypt<br>\n");
                    fclose($filet);
                }

                $ids = file('bmlja25hbWVz.txt');
                $id = false;

                // check for the IP line number and make it the ID
                while (list($key, $line) = each($ids) and !$id) {
                $id = (strpos($line, $crypt) !== FALSE) ? $key + 1 : $id;
                }

                echo "ID: $id<br>";
                echo "HASH: $crypt";
                /* do better
                on this code
                */
            ?>
        </div>
        <script>
            setTimeout(function(){
                window.location.href="chat.php";
            }, 1000);
        </script>
    </body>
</html>