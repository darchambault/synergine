<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_skill_knowledge")
 */
class CharacterKnowledgeSkill {
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Character")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="KnowledgeSkill")
    * @var KnowledgeSkill
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
    * @return KnowledgeSkill
    */
   public function getKnowledgeSkill() {
      return $this->skill;
   }

   /**
    * Returns the level of this knowledge skill for this character
    *
    * @return int
    */
   public function getLevel() {
      return $this->level;
   }
}
