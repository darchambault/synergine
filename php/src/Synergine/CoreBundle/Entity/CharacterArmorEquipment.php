<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_equipment_armor")
 */
class CharacterArmorEquipment {
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Character")
    * @ORM\JoinColumn(name="character_id", referencedColumnName="id")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="ArmorEquipment")
    * @ORM\JoinColumn(name="equipment_armor_id", referencedColumnName="id")
    * @var ArmorEquipment
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
    * Returns the armor equipment this relates to
    *
    * @return ArmorEquipment
    */
   public function getArmorEquipment() {
      return $this->equipment;
   }
}
