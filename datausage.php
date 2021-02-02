<!DOCTYPE html>
<html>
    <head>
        <title>PHP-Chat</title>
        <link rel="stylesheet" href="chat.css">
        <script>
            function back() {
                window.location.href="index.php";
            }
            function refresh() {
                window.location.reload();
            }
        </script>
    </head>
    <body>
        <div class="title">
            <h1>Data Usage</h1>
        </div>
        <input class="write" type="submit" value="Back" onClick="back()">
        <input class="write" type="submit" value="Refresh" onClick="refresh()">
        <div class="chat">
            <?php
                include('datausage.txt');
            ?>
        </div>
    </body>
</html>