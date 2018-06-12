<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * ReservationEquipment
 *
 * @ORM\Table(name="reservation_equipment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationEquipmentRepository")
 * @UniqueEntity(fields={"equipment", "reservation", "reservationStart"})
 */
class ReservationEquipment
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Equipment", inversedBy="reservationEquipments")
     */
    private $equipment;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Reservation", inversedBy="reservationEquipments")
     */
    private $reservation;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var
     *
     * @ORM\Column(name="reservation_start", type="datetime")
     */
    private $reservationStart;

    /**
     * @var
     *
     * @ORM\Column(name="reservation_end", type="datetime")
     */
    private $reservationEnd;

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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return ReservationEquipment
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->equipments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set equipment
     *
     * @param \AppBundle\Entity\Equipment $equipment
     *
     * @return ReservationEquipment
     */
    public function setEquipment(\AppBundle\Entity\Equipment $equipment = null)
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Get equipment
     *
     * @return \AppBundle\Entity\Equipment
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Set reservation
     *
     * @param \AppBundle\Entity\Reservation $reservation
     *
     * @return ReservationEquipment
     */
    public function setReservation(\AppBundle\Entity\Reservation $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \AppBundle\Entity\Reservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Set reservationStart
     *
     * @param \DateTime $reservationStart
     *
     * @return ReservationEquipment
     */
    public function setReservationStart($reservationStart)
    {
        $this->reservationStart = $reservationStart;

        return $this;
    }

    /**
     * Get reservationStart
     *
     * @return \DateTime
     */
    public function getReservationStart()
    {
        return $this->reservationStart;
    }

    /**
     * Set reservationEnd
     *
     * @param \DateTime $reservationEnd
     *
     * @return ReservationEquipment
     */
    public function setReservationEnd($reservationEnd)
    {
        $this->reservationEnd = $reservationEnd;

        return $this;
    }

    /**
     * Get reservationEnd
     *
     * @return \DateTime
     */
    public function getReservationEnd()
    {
        return $this->reservationEnd;
    }
}
