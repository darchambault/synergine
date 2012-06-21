<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_commlink")
 */
class CharacterCommlink {
   /**
    * @ORM\Id
    * @ORM\OneToOne(targetEntity="CharacterEquipment")
    * @ORM\JoinColumn(name="character_equipment_id")
    * @var CharacterEquipment
    */
   protected $characterEquipment;

   /**
    * @ORM\ManyToMany(targetEntity="Program")
    * @ORM\JoinTable(name="character_commlink_program",
    *    joinColumns={@ORM\JoinColumn(name="character_commlink_id", referencedColumnName="character_equipment_id")}
    * )
    * @var Program[]
    */
   protected $programs;

   /**
    * Returns the character equipment this relates to
    *
    * @return CharacterEquipment
    */
   public function getCharacterEquipment() {
      return $this->characterEquipment;
   }

   /**
    * Returns the programs on this commlink
    *
    * @return Program[]
    */
   public function getPrograms() {
      return $this->programs;
   }

   /**
    * Sets the character commlink's character equipment
    *
    * @param \Synergine\CoreBundle\Entity\CharacterEquipment $characterEquipment
    */
   public function setCharacterEquipment(CharacterEquipment $characterEquipment) {
      $this->characterEquipment = $characterEquipment;
   }

   /**
    * Sets the character commlink's programs
    *
    * @param Program[] $programs
    */
   public function setPrograms($programs) {
      $this->programs = $programs;
   }
}
