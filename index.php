<?php

require_once 'vendor/autoload.php';

$client = new \MongoDB\Client();

//$db = $client->selectDatabase('firstdb');
//$authorsCollection = $db->selectCollection('authors');
$authorsCollection = $client->firstdb->authors;

//$authorsCollection->insertOne([
//    'name' => 'Roman',
//    'age' => 28,
//    'wife' => [
//        'name' => 'Nataliya',
//        'age' => 28
//    ]
//]);

$authors = $authorsCollection->find();

foreach ($authors as $author) {
    echo '<div>';
        echo '<div>' . $author['name'] . ' | ' . $author['age'] . '</div>';
        echo '<div>' . $author['wife']['name'] . ' | ' . $author['wife']['age'] . '</div>';
    echo '</div><hr />';
}
