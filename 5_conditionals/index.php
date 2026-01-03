<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Demo</title>
        <style>
        body {
            display: grid;
              place-content: center;
              height: 100vh;
              font-family: sans-serif;
              margin: 0;
        }
        </style>
    </head>
    <body>

        <?php
        $name = "Dark Matter";
        $read = true;
        if ($read) {
            $message = "You have read $name";
        } else {
            $message = "You have not read $name";
        }
        ?>
        <h1>
            <?= $message ?>
        </h1>
    </body>
</html>
