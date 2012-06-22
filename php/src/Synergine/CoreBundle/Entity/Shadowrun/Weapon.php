<?php

namespace Synergine\CoreBundle\Entity\Shadowrun;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sr_weapon")
 */
class Weapon {
   const TYPE_MELEE = 1;
   const TYPE_RANGED = 2;

   const DAMAGETYPE_STUN = 1;
   const DAMAGETYPE_PHYSICAL = 2;

   const DAMAGENATURE_STANDARD = 1;
   const DAMAGENATURE_ELECTRICITY = 2;

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

   /**
    * Sets this weapon's equipment
    *
    * @param \Synergine\CoreBundle\Entity\Equipment $equipment
    */
   public function setEquipment(Equipment $equipment) {
      $this->equipment = $equipment;
   }

   /**
    * Sets this weapon's reach rating
    *
    * @param int $reachRating
    */
   public function setReachRating($reachRating) {
      $this->reachRating = $reachRating;
   }

   /**
    * Sets this weapon's damage rating
    *
    * @param int $damageRating
    */
   public function setDamageRating($damageRating) {
      $this->damageRating = $damageRating;
   }

   /**
    * Sets this weapon's damage type
    *
    * @param int $damageType
    */
   public function setDamageType($damageType) {
      $this->damageType = $damageType;
   }

   /**
    * Sets this weapon's damage nature
    *
    * @param int $damageNature
    */
   public function setDamageNature($damageNature) {
      $this->damageNature = $damageNature;
   }

   /**
    * Sets this weapon's armor penetration rating
    *
    * @param int $armorPenetrationRating
    */
   public function setArmorPenetrationRating($armorPenetrationRating) {
      $this->armorPenetrationRating = $armorPenetrationRating;
   }

   /**
    * Sets this weapon's ammo capacity
    *
    * @param int $ammoCapacity
    */
   public function setAmmoCapacity($ammoCapacity) {
      $this->ammoCapacity = $ammoCapacity;
   }
}
