<?php
/**
 * Created by PhpStorm.
 * User: Ha Truong
 * Date: 11/27/2017
 * Time: 3:34 PM
 */

    $dsn = 'mysql:host=localhost;dbname=reviewbooks';
    // Set options
    $options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    // Create a new PDO instanace
    try {
    $db = new PDO($dsn, 'root', '', $options);
    }
    // Catch any errors
    catch (PDOException $e) {
    echo $e->getMessage();
    exit();
    }