<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="equipment_weapon")
 */
class WeaponEquipment extends Equipment {
   const DAMAGETYPE_STUN = 0;
   const DAMAGETYPE_PHYSICAL = 1;

   const DAMAGENATURE_STANDARD = 0;
   const DAMAGENATURE_ELECTRICITY = 1;

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
