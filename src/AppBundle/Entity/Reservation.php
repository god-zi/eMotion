<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime")
     */
    private $dateFin;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Vehicule")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vehicule;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @var float
     *
     * @ORM\Column(name="prixTotal", type="float")
     */
    private $prixTotal;

    /**
     * @var float
     *
     * @ORM\Column(name="prixInitial", type="float")
     */
    private $prixInitial;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReservation", type="datetime")
     */
    private $dateReservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePaiement", type="datetime")
     */
    private $datePaiement;


    /**
     * @var int
     *
     * @ORM\Column(name="kmInclus", type="integer")
     */
    private $kmInclus;

    /**
     * @var int
     *
     * @ORM\Column(name="kmParcouru", type="integer", nullable=true)
     */
    private $kmParcouru;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeRetour", type="datetime")
     */
    private $dateDeRetour;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Reservation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Reservation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }


    /**
     * Set prixTotal
     *
     * @param float $prixTotal
     *
     * @return Reservation
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return float
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }

    /**
     * Set vehicule
     *
     * @param \AppBundle\Entity\Vehicule $vehicule
     *
     * @return Reservation
     */
    public function setVehicule(\AppBundle\Entity\Vehicule $vehicule)
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    /**
     * Get vehicule
     *
     * @return \AppBundle\Entity\Vehicule
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Reservation
     */
    public function setUser(\AppBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Reservation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set datePaiement
     *
     * @param \DateTime $datePaiement
     *
     * @return Reservation
     */
    public function setDatePaiement($datePaiement)
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    /**
     * Get datePaiement
     *
     * @return \DateTime
     */
    public function getDatePaiement()
    {
        return $this->datePaiement;
    }


    /**
     * Set kmInclus
     *
     * @param integer $kmInclus
     *
     * @return Reservation
     */
    public function setKmInclus($kmInclus)
    {
        $this->kmInclus = $kmInclus;

        return $this;
    }

    /**
     * Get kmInclus
     *
     * @return integer
     */
    public function getKmInclus()
    {
        return $this->kmInclus;
    }

    /**
     * Set kmParcouru
     *
     * @param integer $kmParcouru
     *
     * @return Reservation
     */
    public function setKmParcouru($kmParcouru)
    {
        $this->kmParcouru = $kmParcouru;

        return $this;
    }

    /**
     * Get kmParcouru
     *
     * @return integer
     */
    public function getKmParcouru()
    {
        return $this->kmParcouru;
    }

    /**
     * Set dateDeRetour
     *
     * @param \DateTime $dateDeRetour
     *
     * @return Reservation
     */
    public function setDateDeRetour($dateDeRetour)
    {
        $this->dateDeRetour = $dateDeRetour;

        return $this;
    }

    /**
     * Get dateDeRetour
     *
     * @return \DateTime
     */
    public function getDateDeRetour()
    {
        return $this->dateDeRetour;
    }

    /**
     * Set prixInitial
     *
     * @param float $prixInitial
     *
     * @return Reservation
     */
    public function setPrixInitial($prixInitial)
    {
        $this->prixInitial = $prixInitial;

        return $this;
    }

    /**
     * Get prixInitial
     *
     * @return float
     */
    public function getPrixInitial()
    {
        return $this->prixInitial;
    }
}
