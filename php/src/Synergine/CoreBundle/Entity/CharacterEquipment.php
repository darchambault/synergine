<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_equipment")
 */
class CharacterEquipment {
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Character")
    * @ORM\JoinColumn(name="character_id", referencedColumnName="id")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Equipment")
    * @ORM\JoinColumn(name="equipment_id", referencedColumnName="id")
    * @var Equipment
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
    * Returns the equipment this relates to
    *
    * @return Equipment
    */
   public function getEquipment() {
      return $this->equipment;
   }
}
