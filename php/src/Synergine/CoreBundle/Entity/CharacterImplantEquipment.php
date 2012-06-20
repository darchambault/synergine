<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_equipment_implant")
 */
class CharacterImplantEquipment {
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Character")
    * @ORM\JoinColumn(name="character_id", referencedColumnName="id")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="ImplantEquipment")
    * @ORM\JoinColumn(name="equipment_implant_id", referencedColumnName="id")
    * @var ImplantEquipment
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
    * Returns the implant equipment this relates to
    *
    * @return ImplantEquipment
    */
   public function getImplantEquipment() {
      return $this->equipment;
   }
}
