<?php


$pdo = new PDO(
    'mysql:host=database;dbname=mysql',
    'roots',
    'root');

$status = $pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS);

var_dump($status);
