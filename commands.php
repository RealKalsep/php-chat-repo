<!DOCTYPE html>
<html>
    <head>
        <title>PHP-Chat</title>
        <link rel="stylesheet" href="chat.css">
        <script>
            function redirect() {
                window.location.href="index.php";
            }
        </script>
    </head>
    <body>
        <div class="title">
            <h1>Commands</h1>
        </div>
        <input class="write" type="submit" value="Back" onClick="redirect()">
        <div class="chat">
            <h2>Markers</h2>
            <p><b>/bold</b><br>
            <i>/italic</i><br>
            <span style='background-color: grey; color: white; border: 1px solid black'>/code</span><br>
            <span style='background-color: lightgrey; color: black; border: 1px solid grey'>/quote</span><br>
            <span class='spoiler'>/spoiler</span><br>
            <h2>Fun</h2>
            /marquee<br>
            /shrug ¯\_(ツ)_/¯<br>
            /lenny ( ͡° ͜ʖ ͡°) (/degdeg)<br>
            /babylenny ( ° ¿°) (/bebe)<br>
            <h2>Colors</h2>
            <div style='color: red'>/red</div><br>
            <div style='color: green'>/green</div><br>
            <div style='color: blue'>/blue</div><br>
            <div style='color: yellow'>/yellow</div><br>
            <div style='color: pink'>/pink</div><br>
            <div style='color: purple'>/purple</div><br>
            <div style='color: brown'>/brown</div><br>
            <div style='color: orange'>/orange</div><br>
            <div style='color: black'>/black</div><br>
            <div style='color: gray'>/gray</div><br>
            <div style='color: grey'>/grey</div><br>
            <div style='color: white'>/white</div><br>
            <div style='color: violet'>/violet</div><br>
            <h2>Misc</h2>
            /time<br>
            /date
            </p>
        </div>
    </body>
</html>