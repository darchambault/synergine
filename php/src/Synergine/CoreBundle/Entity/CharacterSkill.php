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
    * @ORM\JoinColumn(name="character_id", referencedColumnName="id")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Skill")
    * @ORM\JoinColumn(name="skill_id", referencedColumnName="id")
    * @var Skill
    */
   protected $skill;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $level;
}
