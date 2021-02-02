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
            //$blocked = array("<style>", "<script>");

            $ipcheck = $_SERVER['REMOTE_ADDR'];
            $crypt = hash('sha256', $ipcheck);

            $file = fopen("Px53DN5Cyb.txt", "r") or die("CANNOT FIND FILE. ABORTING");
            $idlist = file_get_contents("Px53DN5Cyb.txt");

            // if admin, archive chat, if not, redirect
            if(strpos($idlist, $crypt) !== false) {
                $file = fopen("chat.txt", "r") or die("CANNOT FIND FILE. ABORTING");
                $archive = fread($file,filesize("chat.txt"));
                fclose($file);

                $filet = fopen("chat.txt", "w") or die("CANNOT FIND FILE. ABORTING");
                fwrite($filet, "");
                fclose($filet);

                $archived = fopen("archive.txt", "a") or die("CANNOT FIND FILE. ABORTING");
                fwrite($archived, "<br>");
                fwrite($archived, $archive);
                fclose($archived);
                
                $filett = fopen("chat.txt", "a") or die("CANNOT FIND FILE. ABORTING");
                fwrite($filett, date("(Y/m/d H:i:s) "));
                fwrite($filett, "[SERVER] CHAT ARCHIVED");
                fwrite($filett, "\n");
                fclose($filett);
            } else {
                echo('<script>window.location.href="index.php";</script>');
            }

            /* do better
            on this code
            */
        ?>
        <script>
            setTimeout(function(){
                window.location.href="viewarchive.php";
            }, 1000);
        </script>
    </body>
</html>