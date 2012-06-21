<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_implant")
 */
class CharacterImplant {
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Character")
    * @ORM\JoinColumn(name="character_id", referencedColumnName="id")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Implant")
    * @ORM\JoinColumn(name="implant_id", referencedColumnName="id")
    * @var Implant
    */
   protected $implant;

   /**
    * Returns the character this relates to
    *
    * @return Character
    */
   public function getCharacter() {
      return $this->character;
   }

   /**
    * Returns the implant this relates to
    *
    * @return Implant
    */
   public function getImplant() {
      return $this->implant;
   }
}
