<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="weapon")
 */
class Weapon {
   const TYPE_MELEE = 0;
   const TYPE_RANGED = 1;

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
    * @var Equipment
    */
   protected $equipment;

   /**
    * @ORM\Column(type="smallint", name="reach_rating")
    * @var int
    */
   protected $reachRating;

   /**
    * @ORM\Column(type="smallint", name="damage_rating")
    * @var int
    */
   protected $damageRating;

   /**
    * @ORM\Column(type="smallint", name="damage_type")
    * @var int
    */
   protected $damageType;

   /**
    * @ORM\Column(type="smallint", name="damage_nature")
    * @var int
    */
   protected $damageNature;

   /**
    * @ORM\Column(type="smallint", name="armor_penetration_rating")
    * @var int
    */
   protected $armorPenetrationRating;

   /**
    * @ORM\Column(type="smallint", name="ammo_capacity")
    * @var int
    */
   protected $ammoCapacity;

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
    * Returns the weapon's reach rating
    *
    * @return int
    */
   public function getReachRating() {
      return $this->reachRating;
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

   /**
    * Returns the weapon's armor penetration rating
    *
    * @return int
    */
   public function getArmorPenetrationRating() {
      return $this->armorPenetrationRating;
   }

   /**
    * Returns the weapon's armor penetration
    *
    * @return int
    */
   public function getAmmoCapacity() {
      return $this->ammoCapacity;
   }
}
