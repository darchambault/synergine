<?php

namespace Synergine\CoreBundle\Entity\Shadowrun;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sr_character_skill_knowledge")
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
    * @ORM\JoinColumn(name="knowledge_skill_id")
    * @var KnowledgeSkill
    */
   protected $knowledgeSkill;

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
      return $this->knowledgeSkill;
   }

   /**
    * Returns the level of this knowledge skill for this character
    *
    * @return int
    */
   public function getLevel() {
      return $this->level;
   }

   /**
    * Sets the character knowledge skill's character
    *
    * @param \Synergine\CoreBundle\Entity\Character $character
    */
   public function setCharacter(Character $character) {
      $this->character = $character;
   }

   /**
    * Sets the character knowledge skill's knowledge skill
    *
    * @param \Synergine\CoreBundle\Entity\KnowledgeSkill $knowledgeSkill
    */
   public function setKnowledgeSkill(KnowledgeSkill $knowledgeSkill) {
      $this->knowledgeSkill = $knowledgeSkill;
   }

   /**
    * Sets the character knowledge skill's level
    *
    * @param int $level
    */
   public function setLevel($level) {
      $this->level = $level;
   }
}
