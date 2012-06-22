<?php

namespace Synergine\CoreBundle\Entity\Shadowrun;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sr_character_implant")
 */
class CharacterImplant {
   const GRADE_STANDARD = 1;
   const GRADE_ALPHA = 2;
   const GRADE_BETA = 3;
   const GRADE_DELTA = 4;

   /**
    * @ORM\Id
    * @ORM\OneToOne(targetEntity="CharacterEquipment")
    * @ORM\JoinColumn(name="character_equipment_id")
    * @var CharacterEquipment
    */
   protected $characterEquipment;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $grade;

   /**
    * Returns the character equipment this relates to
    *
    * @return CharacterEquipment
    */
   public function getCharacterEquipment() {
      return $this->characterEquipment;
   }

   /**
    * Returns the character implant's grade
    *
    * @return int
    */
   public function getGrade() {
      return $this->grade;
   }

   /**
    * Sets the character implant's character equipment
    *
    * @param CharacterEquipment $characterEquipment
    */
   public function setCharacterEquipment(CharacterEquipment $characterEquipment) {
      $this->characterEquipment = $characterEquipment;
   }

   /**
    * Sets the character implant's grade
    *
    * @param int $grade
    */
   public function setGrade($grade) {
      $this->grade = $grade;
   }
}
