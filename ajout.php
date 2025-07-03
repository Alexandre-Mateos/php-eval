<?php include "header.php" ?>
<main>
      <form method="post" action="ajout_treatment.php">
            <label for="name">Nom</label>
            <input id="name" type="text" name="name">
            <label for="address">Adresse</label>
            <textarea id="address" type="text" name="address"></textarea>
            <label for="nb_pieces">Nombre de pièces</label>
            <input id="nb_pieces" type="number" name="nb_pieces">
            <label for="price">Prix (en €)</label>
            <input id="price" type="number" name="price">
            <button type="submit">Ajouter</button>
      </form>
</main>
<?php include "footer.php" ?>
