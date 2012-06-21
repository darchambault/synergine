<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="weapon")
 */
class Weapon {
   const DAMAGETYPE_STUN = 0;
   const DAMAGETYPE_PHYSICAL = 1;

   const DAMAGENATURE_STANDARD = 0;
   const DAMAGENATURE_ELECTRICITY = 1;

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
   protected $damageRating;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $damageType;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $damageNature;

   /**
    * Returns the weapon's ID
    *
    * @return int
    */
   public function getId() {
      return $this->id;
   }

   /**
    * Returns the weapon's equipment object
    *
    * @return Equipment
    */
   public function getEquipment() {
      return $this->equipment;
   }

   /**
    * Returns the weapon's damage rating
    *
    * @return int
    */
   public function getDamageRating() {
      return $this->damageRating;
   }

   /**
    * Returns the weapon's damage type
    *
    * @return int
    */
   public function getDamageType() {
      return $this->damageType;
   }

   /**
    * Returns the weapon's damage nature
    *
    * @return int
    */
   public function getDamageNature() {
      return $this->damageNature;
   }
}
