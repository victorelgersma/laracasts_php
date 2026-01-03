
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
        $books = [
            [
                "name" => "Do Androids Dream of Electric Sheep",
                "author" => "Philip K. Dick",
                "releaseYear" => 1989,
                "purchaseUrl" => "http://example.com",
            ],
            [
                "name" => "Project Hail Mary",
                "author" => "Andy Weir",
                "releaseYear" => 1999,
                "purchaseUrl" => "hello",
            ],
            [
                "name" => "The Martian",
                "author" => "Andy Weir",
                "releaseYear" => 2011,
                "purchaseUrl" => "http://example.com",
            ],
        ];

        function filterByAuthor($books, $chosenAuthor)
        {
            $filteredBooks = [];

            foreach ($books as $book) {
                if ($book["author"] === $chosenAuthor) {
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        }
        ?>

        <ul>
            <?php foreach (
                filterByAuthor($books, "Philip K. Dick")
                as $book
            ): ?>
                <!--  https://www.php.net/manual/en/control-structures.alternative-syntax.php -->
                    <li>
                        <a href="<?= $book["purchaseUrl"] ?>"> <?= $book[
    "name"
] ?>
                        (<?= $book["releaseYear"] ?>) - By <?= $book[
    "author"
] ?>
                        </a>
                    </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
