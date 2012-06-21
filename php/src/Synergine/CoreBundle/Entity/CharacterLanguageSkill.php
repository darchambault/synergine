<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_skill_language")
 */
class CharacterLanguageSkill {
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Character")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="LanguageSkill")
    * @var LanguageSkill
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
    * @return LanguageSkill
    */
   public function getLanguageSkill() {
      return $this->skill;
   }

   /**
    * Returns the level of this language skill for this character
    *
    * @return int
    */
   public function getLevel() {
      return $this->level;
   }
}
