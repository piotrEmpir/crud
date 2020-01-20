<?php

$config = include('config.php');

try {
    $db = new PDO(
        'mysql:host='.$config['database']['host'].';dbname='.$config['database']['dbname'].';charset=utf8mb4',
        $config['database']['username'],
        $config['database']['password'],
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => false
        )
    );
} catch (PDOException $e) {
    die($e->getMessage());
}