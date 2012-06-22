<?php

namespace Synergine\CoreBundle\Entity\Shadowrun;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sr_character_skill_language")
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
    * @ORM\JoinColumn(name="language_skill_id")
    * @var LanguageSkill
    */
   protected $languageSkill;

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
      return $this->languageSkill;
   }

   /**
    * Returns the level of this language skill for this character
    *
    * @return int
    */
   public function getLevel() {
      return $this->level;
   }

   /**
    * Sets the character language skill's character
    *
    * @param \Synergine\CoreBundle\Entity\Character $character
    */
   public function setCharacter(Character $character) {
      $this->character = $character;
   }

   /**
    * Sets the character language skill's language skill
    *
    * @param \Synergine\CoreBundle\Entity\LanguageSkill $languageSkill
    */
   public function setLanguageSkill(LanguageSkill $languageSkill) {
      $this->languageSkill = $languageSkill;
   }

   /**
    * Sets the character language skill's level
    *
    * @param int $level
    */
   public function setLevel($level) {
      $this->level = $level;
   }
}
