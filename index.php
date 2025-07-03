<?php
require "db.php";

//Prepared SQL query to retrieve all the data from the "maison" table
$sql = "SELECT * FROM maison";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$houses = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($houses);
?>
<?php include "header.php" ?>
<main>
      <table>
            <tr>
                  <th>Nom</th>
                  <th>Adresse</th>
                  <th>Nombre de pièces</th>
                  <th>Prix</th>
            </tr>
<!--            Generate all the the table lines with a loop, using data from table "maison" ($houses)-->
            <?php foreach ($houses as $house) : ?>
                  <tr>
                        <td><?php echo $house["nom"] ?></td>
                        <td><?php echo $house["adresse"] ?></td>
                        <td><?php echo $house["nb_pieces"] ?></td>
                        <td><?php echo $house["prix"] ?> €</td>
                  </tr>
            <?php endforeach; ?>
      </table>
</main>
<?php include "footer.php" ?>


