<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * Office opens at 8 AM
     */
    const OPEN_OFFICE = 8;

    /**
     * Office opens at 18 PM
     */
    const END_OFFICE = 18;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reservationOver", type="boolean", nullable = true)
     */
    private $reservationOver;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Staff")
     * @var int
     */
    private $staff;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ReservationEquipment",
     *     mappedBy="reservation",
     *     cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $reservationEquipments;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
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
     * @ORM\Column(name="society", type="string", length=120, nullable=true)
     */
    private $society;

    /**
     * @var string
     *
     * @ORM\Column(name="commentary", type="text", nullable=true)
     */
    private $commentary;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="integer", nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=true)
     */
    private $email;

    /**
     * @var
     *
     * @Assert\DateTime
     *
     * @ORM\Column(name="reservationStart", type="datetime")
     */
    private $reservationStart;

    /**
     * @var
     *
     * @Assert\DateTime
     *
     * @ORM\Column(name="reservationEnd", type="datetime")
     */
    private $reservationEnd;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Room")
     * @ORM\JoinColumn(nullable=true)
     */
    private $room;

    /**
     * @var
     *
     * @ORM\Column(name="signature", type="string", nullable=true)
     */
    private $signature;

    /**
     * @var
     *
     * @ORM\Column(name="returnSignature", type="string", nullable=true)
     */
    private $returnSignature;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservationEquipments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
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
     * Set society
     *
     * @param string $society
     *
     * @return Reservation
     */
    public function setSociety($society)
    {
        $this->society = $society;

        return $this;
    }

    /**
     * Get society
     *
     * @return string
     */
    public function getSociety()
    {
        return $this->society;
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
     * Set staff
     *
     * @param \AppBundle\Entity\Staff $staff
     *
     * @return Reservation
     */
    public function setStaff(\AppBundle\Entity\Staff $staff = null)
    {
        $this->staff = $staff;

        return $this;
    }

    /**
     * Get staff
     *
     * @return \AppBundle\Entity\Staff
     */
    public function getStaff()
    {
        return $this->staff;
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

    /**
     * @return mixed
     */
    public function getReservationStart()
    {
        return $this->reservationStart;
    }

    /**
     * @param mixed $reservationStart
     */
    public function setReservationStart(\DateTime $reservationStart)
    {
        $this->reservationStart = $reservationStart;
    }

    /**
     * @return mixed
     */
    public function getReservationEnd()
    {
        return $this->reservationEnd;
    }

    /**
     * @param mixed $reservationEnd
     */
    public function setReservationEnd(\DateTime $reservationEnd)
    {
        $this->reservationEnd = $reservationEnd;
    }

    /**
     * Get room
     *
     * @return \AppBundle\Entity\Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set room
     *
     * @param \AppBundle\Entity\Room $room
     *
     * @return Reservation
     */
    public function setRoom(\AppBundle\Entity\Room $room)
    {
        $this->room = $room;
    }

    /**
     * Set signature
     *
     * @param mixed $signature
     *
     * @return Reservation
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return mixed
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @return mixed
     */
    public function getReturnSignature()
    {
        return $this->returnSignature;
    }

    /**
     * @param mixed $returnSignature
     */
    public function setReturnSignature($returnSignature)
    {
        $this->returnSignature = $returnSignature;
    }

    /**
     * Set reservationOver
     *
     * @param boolean $reservationOver
     *
     * @return Reservation
     */
    public function setReservationOver($reservationOver)
    {
        $this->reservationOver = $reservationOver;

        return $this;
    }

    /**
     * Get reservationOver
     *
     * @return boolean
     */
    public function getReservationOver()
    {
        return $this->reservationOver;
    }

    /**
     * @return string
     */
    public function getCommentary()
    {
        return $this->commentary;
    }

    /**
     * @param string $commentary
     */
    public function setCommentary($commentary)
    {
        $this->commentary = $commentary;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}
