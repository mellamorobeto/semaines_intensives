<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20/06/2018
 * Time: 09:53
 */

namespace App\Manager;

use PDO;
use App\Entity\Company;

class CompanyManager
{
    /**
     * @var \PDO $pdo object pdo lié à la base de donnée agenda.
     */
    private $pdo;

    /**
     * @var \PDOStatement $pdostatement objet pdostatement résultant de l'utilisation des méthodes PDO::queryet
     * PDO:prepare
     */



    private $pdoStatement;


    /**
     * ContactManager constructor.
     *Initialisation de la connexion à la base de donnée
     *
     */


    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=space','root','hotSauce999');
    }


    /**
     * @param Company $company
     *
     * @return bool
     */
    private function create(Company &$company)
    {
        $this->pdoStatement = $this->pdo->prepare('INSERT INTO company VALUES (NULL, :nom, :cara, :description, :planete, :logo)');

        $this->pdoStatement->bindValue(':nom', $company->getNom(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':cara', $company->getCara(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':description', $company->getDescription(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':planete', $company->getPlanete(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':logo', $company->getLogo(), PDO::PARAM_STR);

       $executeIsOk = $this->pdoStatement->execute();

       if (!$executeIsOk){
           return false;
       }else{
           $id = $this->pdo->lastInsertId();
           $company = $this->read($id);

           return true;
       }


    }

    /**
     *
     *
     * @param int $id
     *
     * @return bool|Company|null
     */

    public function read($id)
    {
       $this->pdoStatement = $this->pdo->prepare('SELECT * FROM company WHERE id = :id');

       //liaison des parametre

        $this->pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);

        //execution de la requete
       $executeIsOk = $this->pdoStatement->execute();

       if ($executeIsOk){
           $company = $this->pdoStatement->fetchObject('App\Entity\Company');

           if ($company === false){
               return null;
           } else{
               return $company;
           }
       } else{
           return false;
       }
        
    }

    /**
     *
     * Recupere tous les objets company
     *
     * @return array|bool tableau d'objets Company ou un tableau vide si il n'y a aucun objet ou false si une erreur survient
     */

    public function readAll()
    {
        $this->pdoStatement = $this->pdo->query('SELECT * FROM company ORDER BY nom, cara');

        $companies = [];

        while ($company = $this->pdoStatement->fetchObject('App\Entity\Company')){

            $companies[] = $company;

        }

        return $companies;
        
    }

    /**
     * @param Company $company
     *
     * @return bool true en cas de succès et false en cas d'erreur
     */


    private function update(Company $company)
    {

        $this->pdoStatement = $this->pdo->prepare('UPDATE company set nom=:nom, cara=:cara, description=:description, planete=:planete, logo=:logo WHERE id=:id LIMIT 1');

        $this->pdoStatement->bindValue(':nom', $company->getNom(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':cara', $company->getCara(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':description', $company->getDescription(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':planete', $company->getPlanete(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':logo', $company->getLogo(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':id', $company->getId(), PDO::PARAM_INT);


       return $this->pdoStatement->execute();
    }

    /**
     * supprime un objet dans la bdd
     *
     * @param Company $company
     *
     * @return bool true en cas de succès et false en cas d'erreur
     */


    public function delete(Company $company)
    {

        $this->pdoStatement = $this->pdo->prepare('DELETE FROM company WHERE id = :id LIMIT 1');

        $this->pdoStatement->bindValue(':id', $company->getId(), PDO::PARAM_INT);

        return $this->pdoStatement->execute();

    }

    public function save(Company $company)
    {
        // il faut utiliser la méthode create lorsqu'il s'agit d'un nouvelle objet et le méthode update loorsqu'il s'agit de la modification d'un objet

        if (is_null($company->getId())){
            return $this->create($company);
        }
        else{
            return $this->update($company);
        }

    }






}