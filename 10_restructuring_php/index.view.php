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