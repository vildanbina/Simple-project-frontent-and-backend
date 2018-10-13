<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=registration", 'root', '');
} catch (PDOException $pdoe) {
    die("Unsuccessful Connection");
}
