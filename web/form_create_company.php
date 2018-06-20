<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18/06/2018
 * Time: 01:01
 */

?>

<html>
<body>

<h1>Ajouter une Entreprise</h1>

<p><a href="summary.html">Retour au sommaire</a></p>

<form action="createCompany.php" method="post">

    <p>
        <label for="name">Nom</label>
        <input title="name" name="name" id="prenom" type="text">
    </p>

    <p>
        <label for="nom">Type</label>
        <input title="type" name="cara" id="prenom" type="text">
    </p>

    <p>
        <label for="tel">Description</label>
        <input name="desc" id="tel" type="text">
    </p>

    <p>
        <label for="mel">Planete</label>
        <input name="planete" id="mel" type="text">
    </p>

    <p>

        <input value="Ajouter l'entreprise" type="submit">
    </p>
</form>

</body>
</html>
