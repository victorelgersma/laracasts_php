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

require 'index.view.php';