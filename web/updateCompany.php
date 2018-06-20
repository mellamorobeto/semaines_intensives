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

$company = $companyManager->read($_POST['id']);


$company->setNom($_POST['name']);
$company->setCara($_POST['cara']);
$company->setDescription($_POST['desc']);
$company->setPlanete($_POST['planete']);

$saveIsOk = $companyManager->save($company);

if ($saveIsOk){
    $messsage = 'L\'entreprise a été mis a jour';
}else{
    $messsage = 'L\'entreprise n\'a pas été mis a jour';
}


?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout d'une entreprise</title>
</head>
<body>

<h1>Mise à jour d'une entreprise</h1>

<p><?= $messsage?></p>
<a href="summary.html">Retour</a>
</body>
</html>
