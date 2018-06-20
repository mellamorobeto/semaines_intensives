<?php

require_once '../src/App/Manager/CompanyManager.php';
require_once '../src/App/Entity/Company.php';


use App\Manager\CompanyManager;


$companyManager = new CompanyManager();

$company = $companyManager->read($_GET['id'])


?>

<h1>Modifier l'entreprise</h1>

<form action="updateCompany.php" method="post">

    <p>
        <label for="nom">Nom</label>
        <input title="name" name="name" id="prenom" type="text" value="<?= $company->getNom() ?>">
    </p>

    <p>
        <label for="nom">Type</label>
        <input title="type" name="cara" id="prenom" type="text" value="<?= $company->getCara() ?>">
    </p>

    <p>
        <label for="tel">Description</label>
        <input name="desc" id="tel" type="text" value="<?= $company->getDescription() ?>">
    </p>

    <p>
        <label for="mel">Planete</label>
        <input name="planete" id="mel" type="text" value="<?= $company->getPlanete() ?>">
    </p>

    <p>
        <input type="hidden" name="id" value="<?= $company->getId() ?>">
        <input value="Modifier l'entreprise" type="submit">
    </p>

</form>