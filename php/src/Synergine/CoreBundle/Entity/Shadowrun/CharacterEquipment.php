<?php

namespace Synergine\CoreBundle\Entity\Shadowrun;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sr_character_equipment")
 */
class CharacterEquipment {
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    * @var int
    */
   protected $id;

   /**
    * @ORM\ManyToOne(targetEntity="Character")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\ManyToOne(targetEntity="Equipment")
    * @var Equipment
    */
   protected $equipment;

   /**
    * @ORM\Column(type="boolean")
    * @var bool
    */
   protected $equipped;

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

   /**
    * Indicates if the equipment is currently equipped
    *
    * @return bool
    */
   public function isEquipped() {
      return $this->equipped;
   }

   /**
    * Sets the character equipment's character
    * @param \Synergine\CoreBundle\Entity\Character $character
    */
   public function setCharacter(Character $character) {
      $this->character = $character;
   }

   /**
    * Sets the character equipment's equipment
    *
    * @param \Synergine\CoreBundle\Entity\Equipment $equipment
    */
   public function setEquipment(Equipment $equipment) {
      $this->equipment = $equipment;
   }

   /**
    * Sets the character equipment's equipped state
    *
    * @param boolean $equipped
    */
   public function setEquipped($equipped) {
      $this->equipped = $equipped;
   }
}
