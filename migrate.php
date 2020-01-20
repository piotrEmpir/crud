<?php
header('Content-Type: text/html; charset=UTF-8');

include 'core/db_connection.php';


$create_users_sql = "CREATE TABLE `crud`.`users` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `login` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; ";

$insert_user_sql = "INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES (NULL, 'root', 'root', NULL); ";

$db->query($create_users_sql.$insert_user_sql);