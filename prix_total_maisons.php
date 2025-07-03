<?php
require "db.php";
//Prepared SQL query to obtain the sum value of all the houses from the "maison" table
$sql = "SELECT SUM(prix) AS 'sum' FROM maison";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$sum = $stmt->fetchAll(PDO::FETCH_ASSOC);
