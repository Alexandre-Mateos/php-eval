<?php include "header.php" ?>
<main>
    <h2 class="py-3">Ajouter un bien immobilier</h2>
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
    <!--      Alert when an element is missing in the form-->
      <?php if (isset($_GET["error"]) && $_GET["error"] === "1") : ?>
          <div class="alert alert-danger d-flex justify-content-between" role="alert">
              <p>Il manque des informations capitales. Vous devez remplir tous les champs !</p>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php endif; ?>
</main>
<?php include "footer.php" ?>
