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
    * @ORM\ManyToOne(targetEntity="Character")
    * @ORM\JoinColumn(name="character_id", referencedColumnName="id")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Armor")
    * @ORM\JoinColumn(name="armor_id", referencedColumnName="id")
    * @var Armor
    */
   protected $armor;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $ballisticDamage;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $impactDamage;

   /**
    * Returns the character this relates to
    *
    * @return Character
    */
   public function getCharacter() {
      return $this->character;
   }

   /**
    * Returns the armor this relates to
    *
    * @return Armor
    */
   public function getArmor() {
      return $this->armor;
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
