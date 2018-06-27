<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Equipment
 *
 * @ORM\Table(name="equipment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EquipmentRepository")
 * @Vich\Uploadable
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
     *
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="picture", size="imageSize")
     * @Assert\File(
     * maxSize="1000k",
     * maxSizeMessage="Le fichier excède 1000Ko.",
     * mimeTypes={"image/png", "image/jpeg", "image/jpg", "image/svg+xml", "image/gif"},
     * mimeTypesMessage= "formats autorisés: png, jpeg, jpg, svg, gif"
     * )
     *
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $picture;

    /**
     * @ORM\Column(type="datetime", nullable = true)
     *
     * @var \DateTime
     */
    private $updatedAt;

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
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     */
    public function setImageFile(?File $image = null)
    {
        $this->imageFile = $image;
        if (null !== $image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setPicture(string $imageName)
    {
        $this->picture = $imageName;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setImageSize(int $imageSize)
    {
        $this->imageSize = $imageSize;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
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
