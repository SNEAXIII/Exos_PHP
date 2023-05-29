<div class="questionnaire">
    <form method="POST">
        <label for="nom">Nom :</label>
        <input value="<?= $_SESSION["client"]["nom"]?>" type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input value="<?= $_SESSION["client"]["prenom"]?>" type="text" id="prenom" name="prenom" required>

        <label for="adresse">Adresse :</label>
        <input value="<?= $_SESSION["client"]["adresse"]?>" type="text" id="adresse" name="adresse" required>

        <label for="codePostal">Code postal :</label>
        <input value="<?= $_SESSION["client"]["codePostal"]?>" type="text" id="codePostal" name="codePostal" required>

        <button type="submit">Confirmer</button>
    </form>
</div>