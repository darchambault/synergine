<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_equipment_weapon")
 */
class CharacterWeaponEquipment {
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Character")
    * @ORM\JoinColumn(name="character_id", referencedColumnName="id")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="WeaponEquipment")
    * @ORM\JoinColumn(name="equipment_weapon_id", referencedColumnName="id")
    * @var WeaponEquipment
    */
   protected $equipment;

   /**
    * Returns the character this relates to
    *
    * @return Character
    */
   public function getCharacter() {
      return $this->character;
   }

   /**
    * Returns the weapon equipment this relates to
    *
    * @return WeaponEquipment
    */
   public function getWeaponEquipment() {
      return $this->equipment;
   }
}
