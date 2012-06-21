<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_armor")
 */
class CharacterArmor {
   /**
    * @ORM\Id
    * @ORM\OneToOne(targetEntity="CharacterEquipment")
    * @ORM\JoinColumn(name="character_equipment_id")
    * @var Character
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
}
