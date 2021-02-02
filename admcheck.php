<!DOCTYPE html>
<html>
    <head>
        <title>PHP-Chat</title>
        <link rel="stylesheet" href="chat.css">
    </head>
    <body>
        <?php
            $body = $_POST["adminpass"];
            $password = "pc7SY8rwMA";

            $ipcheck = $_SERVER['REMOTE_ADDR'];
            $crypt = hash('sha256', $ipcheck);

            $file = fopen("Px53DN5Cyb.txt", "r") or die("CANNOT FIND FILE. ABORTING");
            $idlist = file_get_contents("Px53DN5Cyb.txt");

            if(strpos($idlist, $crypt) !== false) {
                echo('');
            } else {
                $filet = fopen("ZaS442gVxt.txt", "a") or die("CANNOT FIND FILE. ABORTING");
                fwrite($filet, date("(Y/m/d H:i:s) "));
                fwrite($filet, "$crypt<br>\n");
                fclose($filet);
                echo('<script>window.location.href="index.php";</script>');
            }

            if ($body == $password) {
                echo '<script>window.location.href="admpanel.php"</script>';
            } else {
                $filet = fopen("ZaS442gVxt.txt", "a") or die("CANNOT FIND FILE. ABORTING");
                fwrite($filet, date("(Y/m/d H:i:s) "));
                fwrite($filet, "$crypt<br>\n");
                fclose($filet);
                echo '<script>window.location.href="index.php"</script>';
            }
        ?>
    </body>
</html>