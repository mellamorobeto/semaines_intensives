<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18/06/2018
 * Time: 01:15
 */

require_once '../src/App/Manager/CompanyManager.php';
require_once '../src/App/Entity/Company.php';
require 'form_create_company.php';

use App\Entity\Company;
use App\Manager\CompanyManager;



$company = new Company();

$company->setNom($_POST['name']);
$company->setCara($_POST['cara']);
$company->setDescription($_POST['desc']);
$company->setPlanete($_POST['planete']);
$company->setLogo($_FILES['logo']['name']);

$imageChemin = $_FILES['logo']['tmp_name'];
$imageRepertoire = 'imgs/'.$_FILES['logo']['name'];
$moveIsOk = move_uploaded_file($imageChemin, $imageRepertoire);

if ($moveIsOk){
    $messageImg = "le fichier".$imageRepertoire ."est uploader";
}else{
    $messageImg = "le fichier a une erreur ";
}



$companyManager = new CompanyManager();

$saveIsOk = $companyManager->save($company);

if ($saveIsOk){
    $messsage = 'L\'entreprise a été ajoute';
}else{
    $messsage = 'L\'entreprise n\'a pas été ajoute';
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

<h1>Insertion d'une entreprise</h1>

<p><?= $messsage?></p>
<p><?= $messageImg?></p>

<a href="summary.html">Retour</a>
</body>
</html>
