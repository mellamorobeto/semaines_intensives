<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18/06/2018
 * Time: 01:15
 */

require_once '../src/App/Manager/CompanyManager.php';
require_once '../src/App/Entity/Company.php';

use App\Entity\Company;
use App\Manager\CompanyManager;

$companyManager = new CompanyManager();

$company = $companyManager->read($_GET['id']);

$deleteIsOk = $companyManager->delete($company);

if ($deleteIsOk){
    $messsage = 'Le contact a été supprimer';
}else{
    $messsage = 'Le contact n\'a pas été supprimer';
}

?>



<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suppression d'une entreprise</title>
</head>
<body>

<h1>Suppression d'une entreprise</h1>

<p><?= $messsage?></p>
<a href="summary.html">Retour</a>
</body>
</html>
