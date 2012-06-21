<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_weapon")
 */
class CharacterWeapon {
   /**
    * @ORM\Id
    * @ORM\OneToOne(targetEntity="CharacterEquipment")
    * @ORM\JoinColumn(name="character_equipment_id")
    * @var CharacterEquipment
    */
   protected $characterEquipment;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $currentAmmo;

   /**
    * Returns the character equipment this relates to
    *
    * @return CharacterEquipment
    */
   public function getCharacterEquipment() {
      return $this->characterEquipment;
   }

   /**
    * Returns the character weapon's current ammo
    *
    * @return int
    */
   public function getCurrentAmmo() {
      return $this->currentAmmo;
   }

   /**
    * Sets the character weapon's character equipment
    *
    * @param \Synergine\CoreBundle\Entity\CharacterEquipment $characterEquipment
    */
   public function setCharacterEquipment(CharacterEquipment $characterEquipment) {
      $this->characterEquipment = $characterEquipment;
   }

   /**
    * Sets the character weapon's current ammo
    *
    * @param int $currentAmmo
    */
   public function setCurrentAmmo($currentAmmo) {
      $this->currentAmmo = $currentAmmo;
   }
}
