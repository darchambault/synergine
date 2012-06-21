<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="armor")
 */
class Armor {
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
   protected $ballisticRating;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $impactRating;

   /**
    * Returns the armor's ID
    *
    * @return int
    */
   public function getId() {
      return $this->id;
   }

   /**
    * Returns the armor's equipment object
    *
    * @return Equipment
    */
   public function getEquipment() {
      return $this->equipment;
   }

   /**
    * Returns this armor's ballistic rating
    *
    * @return int
    */
   public function getBallisticRating() {
      return $this->ballisticRating;
   }

   /**
    * Returns this armor's impact rating
    *
    * @return int
    */
   public function getImpactRating() {
      return $this->impactRating;
   }
}
