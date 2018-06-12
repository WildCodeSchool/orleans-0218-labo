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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ReservationEquipment", mappedBy="reservation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reservationEquipments;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=120)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=120)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250)
     */
    private $email;


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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Reservation
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Reservation
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Reservation
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservationEquipments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reservationEquipment
     *
     * @param \AppBundle\Entity\ReservationEquipment $reservationEquipment
     *
     * @return Reservation
     */
    public function addReservationEquipment(\AppBundle\Entity\ReservationEquipment $reservationEquipment)
    {
        $this->reservationEquipments[] = $reservationEquipment;

        return $this;
    }

    /**
     * Remove reservationEquipment
     *
     * @param \AppBundle\Entity\ReservationEquipment $reservationEquipment
     */
    public function removeReservationEquipment(\AppBundle\Entity\ReservationEquipment $reservationEquipment)
    {
        $this->reservationEquipments->removeElement($reservationEquipment);
    }

    /**
     * Get reservationEquipments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservationEquipments()
    {
        return $this->reservationEquipments;
    }
}
