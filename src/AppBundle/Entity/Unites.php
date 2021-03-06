<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unites
 *
 * @ORM\Table(name="unites")
 * @ORM\Entity
 */
class Unites
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_unites", type="string", length=45, nullable=true)
     */
    private $nomUnites;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_unites", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUnites;



    /**
     * Set nomUnites
     *
     * @param string $nomUnites
     *
     * @return Unites
     */
    public function setNomUnites($nomUnites)
    {
        $this->nomUnites = $nomUnites;

        return $this;
    }

    /**
     * Get nomUnites
     *
     * @return string
     */
    public function getNomUnites()
    {
        return $this->nomUnites;
    }

    /**
     * Get idUnites
     *
     * @return integer
     */
    public function getIdUnites()
    {
        return $this->idUnites;
    }
}
