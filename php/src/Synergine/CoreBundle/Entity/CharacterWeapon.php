<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_weapon")
 */
class CharacterWeapon {
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Character")
    * @ORM\JoinColumn(name="character_id", referencedColumnName="id")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Weapon")
    * @ORM\JoinColumn(name="weapon_id", referencedColumnName="id")
    * @var Weapon
    */
   protected $weapon;

   /**
    * Returns the character this relates to
    *
    * @return Character
    */
   public function getCharacter() {
      return $this->character;
   }

   /**
    * Returns the weapon this relates to
    *
    * @return Weapon
    */
   public function getWeapon() {
      return $this->weapon;
   }
}
