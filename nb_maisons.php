<?php
require "db.php";
//Prepared SQL query to count all the houses from the "maison" table
$sql = "SELECT COUNT(*) AS 'nb' FROM maison";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$count = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($count);