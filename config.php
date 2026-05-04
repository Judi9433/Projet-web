<?php
try {
    $conn = new PDO("mysql:host=sql309.infinityfree.com;dbname=if0_41822335_XXX", "if0_41822335", "uNjgBKzVNOw", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (\Exception $e) {
    die("ERREUR:" . $e->getMessage());
}
?>