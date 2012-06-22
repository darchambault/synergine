<?php

namespace Synergine\CoreBundle\Entity\Shadowrun;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sr_character_armor")
 */
class CharacterArmor {
   /**
    * @ORM\Id
    * @ORM\OneToOne(targetEntity="CharacterEquipment")
    * @ORM\JoinColumn(name="character_equipment_id")
    * @var CharacterEquipment
    */
   protected $characterEquipment;

   /**
    * @ORM\Column(type="smallint", name="ballistic_damage")
    * @var int
    */
   protected $ballisticDamage;

   /**
    * @ORM\Column(type="smallint", name="impact_damage")
    * @var int
    */
   protected $impactDamage;

   /**
    * Returns the character equipment this relates to
    *
    * @return CharacterEquipment
    */
   public function getCharacterEquipment() {
      return $this->characterEquipment;
   }

   /**
    * Returns the character armor's ballistic damage
    *
    * @return int
    */
   public function getBallisticDamage() {
      return $this->ballisticDamage;
   }

   /**
    * Returns the character armor's impact damage
    *
    * @return int
    */
   public function getImpactDamage() {
      return $this->impactDamage;
   }

   /**
    * Sets the character armor's character equipment
    *
    * @param \Synergine\CoreBundle\Entity\CharacterEquipment $characterEquipment
    */
   public function setCharacterEquipment(CharacterEquipment $characterEquipment) {
      $this->characterEquipment = $characterEquipment;
   }

   /**
    * Sets the character armor's ballistic damage
    *
    * @param int $ballisticDamage
    */
   public function setBallisticDamage($ballisticDamage) {
      $this->ballisticDamage = $ballisticDamage;
   }

   /**
    * Sets the character armor's impact damage
    * @param int $impactDamage
    */
   public function setImpactDamage($impactDamage) {
      $this->impactDamage = $impactDamage;
   }
}
