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
            $ipcheck = $_SERVER['REMOTE_ADDR'];
            $crypt = hash('sha256', $ipcheck);

            $file = fopen("dEz6tWULWp.txt", "r") or die("CANNOT FIND FILE. ABORTING");
            $idlist = file_get_contents("dEz6tWULWp.txt");

            // if banned, redirect, if not, check the message
            if(strpos($idlist, $crypt) !== false) {
                echo('<script>window.location.href="banned.php";</script>');
            } else {
                $file = fopen("bmlja25hbWVz.txt", "r") or die("CANNOT FIND FILE. ABORTING");
                $idlistt = file_get_contents("bmlja25hbWVz.txt");

                if(strpos($idlistt, $crypt) !== false) {
                    $body = $_POST["chat"];
                    $file = fopen("chat.txt", "a") or die("CANNOT FIND FILE. ABORTING");

                    fwrite($file, "<br>");
                    fwrite($file, date("(Y/m/d H:i:s) "));

                    $ids = file('bmlja25hbWVz.txt');
                    $id = false;

                    while (list($key, $line) = each($ids) and !$id) {
                        $id = (strpos($line, $crypt) !== FALSE) ? $key + 1 : $id;
                    }

                    $cid = "$id: ";

                    fwrite($file, $cid);

                    // message length
                    $body = mb_strimwidth($body, 0, 128, '...');

                    // the looong banned-word checking system, so I want an alternative
                    if(strpos($body, "<style>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "</style>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "<script>") !== false) {
                        $body = "AUTOMODERATED";
                    };
                    
                    if(strpos($body, "</script>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "<marquee>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "</marquee>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "<img>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "</img>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "<span>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "</span>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "<h1>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "</h1>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "<br>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "<h2>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "</h2>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "<h3>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "</h3>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "<h4>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "</h4>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "<h5>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "</h5>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "<h6>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "</h6>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "<p>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "</p>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "<?php") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    if(strpos($body, "?>") !== false) {
                        $body = "AUTOMODERATED";
                    };

                    // parser, and I also need an alternative...
                    if(strpos($body, "/italic ") !== false) {
                        $body = str_replace("/italic ", "<i>", $body);
                        $body = $body."</i>";
                    };

                    if(strpos($body, "/bold ") !== false) {
                        $body = str_replace("/bold ", "<b>", $body);
                        $body = $body."</b>";
                    };

                    if(strpos($body, "/code ") !== false) {
                        $body = str_replace("/code ", "<span style='background-color: grey; color: white; border: 1px solid black'>", $body);
                        $ASCI = substr_count($body, "<span class='code'>");

                        //check for repeating patterns
                        for($i = 0; $i < $ASCI; $i++) {
                            $body = $body."</span>";
                        };
                    };

                    if(strpos($body, "/quote ") !== false) {
                        $body = str_replace("/quote ", "<span class='quote'>", $body);
                        $ASCI = substr_count($body, "<span class='quote'>");

                        //check for repeating patterns
                        for($i = 0; $i < $ASCI; $i++) {
                            $body = $body."</span>";
                        };
                    };

                    if(strpos($body, "/spoiler ") !== false) {
                        $body = str_replace("/spoiler ", "<span class='spoiler'>", $body);
                        $body = $body."</span>";
                        $ASCI = substr_count($body, "<span class='spoiler'>");

                        //check for repeating patterns
                        for($i = 0; $i < $ASCI; $i++) {
                            $body = $body."</span>";
                        };
                    };

                    if(strpos($body, "/marquee ") !== false) {
                        $body = str_replace("/marquee ", "<marquee>", $body);
                        $body = $body."</marquee>";
                    };

                    if(strpos($body, "/shrug") !== false) {
                        $body = str_replace("/shrug", "¯\_(ツ)_/¯", $body);
                    };

                    if(strpos($body, "/lenny") !== false) {
                        $body = str_replace("/lenny", "( ͡° ͜ʖ ͡°)", $body);
                    };

                    if(strpos($body, "/degdeg") !== false) {
                        $body = str_replace("/degdeg", "( ͡° ͜ʖ ͡°)", $body);
                    };

                    if(strpos($body, "/babylenny") !== false) {
                        $body = str_replace("/babylenny", "( ° ¿°)", $body);
                    };

                    if(strpos($body, "/bebe") !== false) {
                        $body = str_replace("/bebe", "( ° ¿°)", $body);
                    };

                    if(strpos($body, "/red ") !== false) {
                        $body = str_replace("/red ", "<span style='color: red'>", $body);
                        $body = $body."</span>";
                    };
                    
                    if(strpos($body, "/orange ") !== false) {
                        $body = str_replace("/orange ", "<span style='color: orange'>", $body);
                        $body = $body."</span>";
                    };

                    if(strpos($body, "/yellow ") !== false) {
                        $body = str_replace("/yellow ", "<span style='color: yellow'>", $body);
                        $body = $body."</span>";
                    };

                    if(strpos($body, "/lime ") !== false) {
                        $body = str_replace("/lime ", "<span style='color: lime'>", $body);
                        $body = $body."</span>";
                    };

                    if(strpos($body, "/green ") !== false) {
                        $body = str_replace("/green ", "<span style='color: green'>", $body);
                        $body = $body."</span>";
                    };

                    if(strpos($body, "/cyan ") !== false) {
                        $body = str_replace("/cyan ", "<span style='color: cyan'>", $body);
                        $body = $body."</span>";
                    };

                    if(strpos($body, "/blue ") !== false) {
                        $body = str_replace("/blue ", "<span style='color: blue'>", $body);
                        $body = $body."</span>";
                    };

                    if(strpos($body, "/purple ") !== false) {
                        $body = str_replace("/purple ", "<span style='color: purple'>", $body);
                        $body = $body."</span>";
                    };

                    if(strpos($body, "/violet ") !== false) {
                        $body = str_replace("/violet ", "<span style='color: violet'>", $body);
                        $body = $body."</div>";
                    };

                    if(strpos($body, "/pink ") !== false) {
                        $body = str_replace("/pink ", "<span style='color: pink'>", $body);
                        $body = $body."</span>";
                    };

                    if(strpos($body, "/white ") !== false) {
                        $body = str_replace("/white ", "<span style='color: white'>", $body);
                        $body = $body."</span>";
                    };

                    if(strpos($body, "/gray ") !== false) {
                        $body = str_replace("/gray ", "<span style='color: gray'>", $body);
                        $body = $body."</span>";
                    };

                    if(strpos($body, "/grey ") !== false) {
                        $body = str_replace("/grey ", "<span style='color: grey'>", $body);
                        $body = $body."</span>";
                    };

                    if(strpos($body, "/brown ") !== false) {
                        $body = str_replace("/brown ", "<span style='color: brown'>", $body);
                        $body = $body."</span>";
                    };

                    if(strpos($body, "/black ") !== false) {
                        $body = str_replace("/black ", "<span style='color: black'>", $body);
                        $body = $body."</span>";
                    };

                    if(strpos($body, "/date") !== false) {
                        $body = str_replace("/date", date("Y/m/d "), $body);
                    };

                    if(strpos($body, "/time") !== false) {
                        $body = str_replace("/time", date("H:i:s "), $body);
                    };

                    fwrite($file, $body); # htmlspecialchars($body)
                    fwrite($file, "\n");
                    fclose($file);
                } else {
                    echo('<script>window.location.href="index.php";</script>');
                }
            }
            /* do better
            on this code
            */
        ?>
        <script>
            setTimeout(function(){
                window.location.href="chat.php";
            }, 1000);
        </script>
    </body>
</html>