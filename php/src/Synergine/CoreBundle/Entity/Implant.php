<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="implant")
 */
class Implant {
   const TYPE_CYBERWARE = 0;
   const TYPE_BIOWARE = 1;

   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    * @var int
    */
   protected $id;

   /**
    * @ORM\OneToOne(targetEntity="Equipment")
    * @ORM\JoinColumn(name="equipment_id", referencedColumnName="id")
    * @var Equipment
    */
   protected $equipment;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $type;

   /**
    * @ORM\Column(type="decimal")
    * @var float
    */
   protected $essenceCost;

   /**
    * Returns the implant's ID
    *
    * @return int
    */
   public function getId() {
      return $this->id;
   }

   /**
    * Returns the implant's equipment object
    *
    * @return Equipment
    */
   public function getEquipment() {
      return $this->equipment;
   }

   /**
    * Returns the implant's type
    *
    * @return int
    */
   public function getType() {
      return $this->type;
   }

   /**
    * Returns the implant's essence cost
    *
    * @return float
    */
   public function getEssenceCost() {
      return $this->essenceCost;
   }
}