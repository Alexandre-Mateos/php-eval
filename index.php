<?php
require "db.php";
require "nb_maisons.php";
require "prix_total_maisons.php";
//Prepared SQL query to retrieve all the data from the "maison" table
$sql = "SELECT * FROM maison";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$houses = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include "header.php" ?>
<main class="container-fluid text-center">
      <h1 class="py-3"> Trouvez votre prochain bien immobilier</h1>
      <h2 class="py-3">Infos générales</h2>
      <div class="d-flex justify-content-center gap-5">
            <p>Nombres de maisons disponible à l'achat : <?php echo $count[0]["nb"] ?></p>
            <p>Valeur totale du parc immobilier : <?php echo $sum[0]["sum"] ?> €</p>
      </div>
      <h2 class="py-3">Liste de nos maisons</h2>
      <table class="mx-auto table table-striped">
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

      <?php if (isset($_GET["ajout"]) && $_GET["ajout"] === "ok") : ?>
            <p>Maison ajoutée avec succès</p>
      <?php endif; ?>

</main>
<?php include "footer.php" ?>


