<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_language_skill")
 */
class CharacterLanguageSkill {
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Character")
    * @ORM\JoinColumn(name="character_id", referencedColumnName="id")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="LanguageSkill")
    * @ORM\JoinColumn(name="language_skill_id", referencedColumnName="id")
    * @var LanguageSkill
    */
   protected $languageSkill;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $level;
}
