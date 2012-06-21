<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_wound")
 */
class CharacterWound {
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $id;

   /**
    * @ORM\ManyToOne(targetEntity="Character")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $damage;

   /**
    * @ORM\Column(type="boolean")
    * @var bool
    */
   protected $healed;

   /**
    * Returns this wound's ID
    *
    * @return int
    */
   public function getId() {
      return $this->id;
   }

   /**
    * Returns this wound's character
    *
    * @return Character
    */
   public function getCharacter() {
      return $this->character;
   }

   /**
    * Returns this wound's damage
    *
    * @return int
    */
   public function getDamage() {
      return $this->damage;
   }

   /**
    * Indicates if this wound has been healed
    *
    * @return bool
    */
   public function isHealed() {
      return $this->healed;
   }
}
