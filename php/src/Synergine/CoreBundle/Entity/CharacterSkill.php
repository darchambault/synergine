<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_skill")
 */
class CharacterSkill {
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Character")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Skill")
    * @var Skill
    */
   protected $skill;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $level;

   /**
    * Returns the character this relates to
    *
    * @return Character
    */
   public function getCharacter() {
      return $this->character;
   }

   /**
    * Returns the skill this relates to
    *
    * @return Skill
    */
   public function getSkill() {
      return $this->skill;
   }

   /**
    * Returns the level of this skill for this character
    *
    * @return int
    */
   public function getLevel() {
      return $this->level;
   }
}
