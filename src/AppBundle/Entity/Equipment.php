<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipment
 *
 * @ORM\Table(name="equipment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EquipmentRepository")
 */
class Equipment
{
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ReservationEquipment", mappedBy="equipment")
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
     * @var int
     *
     * @ORM\Column(name="equipment_order", type="integer")
     */
    private $equipmentOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="text", nullable=true)
     */
    private $picture;


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
     * Set name
     *
     * @param string $name
     *
     * @return Equipment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Equipment
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Equipment
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
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
     * @return Equipment
     */
    public function addReservationEquipment(\AppBundle\Entity\ReservationEquipment $reservationEquipment)
    {
        $this->reservationEquipments[] = $reservationEquipment;
    }
    
    /**
     * Set equipmentOrder
     *
     * @param integer $equipmentOrder
     *
     * @return Equipment
     */
    public function setEquipmentOrder($equipmentOrder)
    {
        $this->equipmentOrder = $equipmentOrder;

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
     * Get equipmentOrder
     *
     * @return integer
     */
    public function getEquipmentOrder()
    {
        return $this->equipmentOrder;
    }
}
