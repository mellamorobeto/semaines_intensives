<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18/06/2018
 * Time: 01:36
 */

require_once '../src/App/Manager/CompanyManager.php';
require_once '../src/App/Entity/Company.php';

use App\Entity\Company;
use App\Manager\CompanyManager;

$companyManager = new CompanyManager();

$companies = $companyManager->readAll();


?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout d'une Entreprise</title>
</head>
<body>

<h1>Liste de toutes les entreprises</h1>

<?php if (empty($companies)): ?>

<p>il n'y a aucune entreprise</p>

<?php else: ?>

  <?php if ($companies === false): ?>

<p>Une erreur est survenue</p>

<?php else: ?>

<ul>

    <?php foreach ($companies as $company): ?>
    <li> <strong>Nom: </strong> <?= $company->getNom() ?> - <strong>Type d'entreprise: </strong><?= $company->getCara() ?> - <strong>Description: </strong><?= $company->getDescription() ?> - <strong>Planete associé: </strong>  <?= $company->getPlanete() ?> -
          <strong>Logo d'entreprise: </strong><?php echo '<img style="width:40px"; src="imgs/'.$company->getLogo().'" alt="" />'; ?>
        <a href="form_update_company.php?id=<?= $company->getId() ?>">Modifier</a> - <a href="delete_company.php?id=<?= $company->getId() ?>">Supprimer</a></li>

    <?php endforeach;?>
</ul>

        <a href="summary.html">Retour au sommaire</a>
       
  <?php endif; ?>
<?php endif; ?>
</body>
</html>
