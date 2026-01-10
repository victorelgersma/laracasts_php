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
        "releaseYear" => 1968,
        "purchaseUrl" => "hello",
    ],
    [
        "name" => "The Martian",
        "author" => "Andy Weir",
        "releaseYear" => 2011,
        "purchaseUrl" => "http://example.com",
    ],
];

$filteredBooks = array_filter($books, function ($book) {
    return $book["author"] === "Andy Weir";
});
?>

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
    <ul>
        <?php foreach ($filteredBooks as $item): ?>
            <li>
                <a href="<?= $item["purchaseUrl"] ?>"> <?= $item[
                      "name"
                  ] ?>
                    (<?= $item["releaseYear"] ?>) - By <?= $item[
                          "author"
                      ] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>