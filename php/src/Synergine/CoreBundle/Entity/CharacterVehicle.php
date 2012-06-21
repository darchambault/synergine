<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_vehicle")
 */
class CharacterVehicle {
   /**
    * @ORM\Id
    * @ORM\OneToOne(targetEntity="CharacterEquipment")
    * @ORM\JoinColumn(name="character_equipment_id")
    * @var Character
    */
   protected $characterEquipment;

   /**
    * Returns the character equipment this relates to
    *
    * @return CharacterEquipment
    */
   public function getCharacterEquipment() {
      return $this->characterEquipment;
   }
}
