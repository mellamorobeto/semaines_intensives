<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18/06/2018
 * Time: 01:01
 */



?>
<style>
    .custom-select {
        border: none;
        outline: none;
        border-radius: 0;
        margin: 0;
        display: block;
        font-size: 14px;
        color: black;
        height: 25px;
    }
</style>
<html>
<body>

<h1>Ajouter une Entreprise</h1>

<p><a href="summary.html">Retour au sommaire</a></p>

<form action="createCompany.php" method="post" enctype="multipart/form-data">

    <p>
        <label for="name">Nom</label>
        <input title="name" name="name" id="prenom" type="text">
    </p>

    <select class="custom-select"  title="cara" name="cara">
        <option value="1">Selectionner le type d'entreprise</option>
        <option value="Pme">Pme</option>
        <option value="pma">pma</option>
        <option value="pmi">pmi</option>
        <option value="pololo">pololo</option>
    </select>

    <p>
        <label for="tel">Description</label>
        <input name="desc" id="tel" type="text">
    </p>

    <p>
        <label for="mel">Planete</label>
        <input name="planete" id="mel" type="text">
    </p>

    <p>
        <label for="logo">Logo</label>
        <input name="logo" id="logo" type="file">
    </p>

    <p>

        <input name="upload" value="Ajouter l'entreprise" type="submit">
    </p>
</form>

</body>
</html>
