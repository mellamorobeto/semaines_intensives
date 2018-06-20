<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20/06/2018
 * Time: 00:41
 */

namespace App\Entity;


class Company
{

    private $id;

    private $nom;

    private $cara;

    private $description;

    private $planete;

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getCara()
    {
        return $this->cara;
    }

    /**
     * @param string $cara
     */
    public function setCara($cara)
    {
        $this->cara = $cara;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getPlanete()
    {
        return $this->planete;
    }

    /**
     * @param string $planete
     */
    public function setPlanete($planete)
    {
        $this->planete = $planete;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


}