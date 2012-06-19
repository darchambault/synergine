<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_knowledge_skill")
 */
class CharacterKnowledgeSkill {
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Character")
    * @ORM\JoinColumn(name="character_id", referencedColumnName="id")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="KnowledgeSkill")
    * @ORM\JoinColumn(name="knowledge_skill_id", referencedColumnName="id")
    * @var KnowledgeSkill
    */
   protected $knowledgeSkill;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $level;
}
