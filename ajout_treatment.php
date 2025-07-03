<?php
var_dump($_POST);
require "db.php";

// Verification of the presence of all the data expected. If not, user redirected to ajout.php?error=1
if (
      (!isset($_POST["name"]) || strlen($_POST["name"]) < 1)
      || (!isset($_POST["address"]) || strlen($_POST["address"]) < 1)
      || (!isset($_POST["nb_pieces"]) || strlen($_POST["nb_pieces"]) < 1)
      || (!isset($_POST["price"]) || strlen($_POST["price"]) < 1)
) {
      header("Location: ajout.php?error=1");
      exit();
}
//prepared SQL request to avoid sql injection.
//Add a house with her data to the database
$sql = "INSERT INTO maison (nom, adresse, nb_pieces, prix) VALUES (:nom, :adresse, :nb_pieces, :prix)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
      'nom' => $_POST['name'],
      'adresse' => $_POST['address'],
      'nb_pieces' => $_POST['nb_pieces'],
      'prix' => $_POST['price']
]);

//Once the house is added to the database, user redirected to index.php?ajout=ok
header("Location: index.php?ajout=ok");
exit();