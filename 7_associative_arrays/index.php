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

        <?php $books = [
            [
                "name" => "Do Androids Dream of Electric Sheep",
                "author" => "Philip K. Dick",
                "purchaseUrl" => "http://example.com",
            ],
            [
                "name" => "Project Hail Mary",
                "author" => "Andy Weird",
                "purchaseUrl" => "hello",
            ],
        ]; ?>

        <ul>
            <?php foreach ($books as $book): ?>
            <!--  https://www.php.net/manual/en/control-structures.alternative-syntax.php -->
            <li>
                <a href="<?= $book["purchaseUrl"] ?>">
                <?= $book["name"] ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
