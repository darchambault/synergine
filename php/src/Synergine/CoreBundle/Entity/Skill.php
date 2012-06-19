<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="skill")
 */
class Skill {
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    * @var int
    */
   protected $id;

   /**
    * @ORM\Column(type="string", length=255)
    * @var string
    */
   protected $name;

   /**
    * @ORM\ManyToOne(targetEntity="SkillGroup")
    * @ORM\JoinColumn(name="group_id", referencedColumnName="id")
    * @var SkillGroup
    */
   protected $group;
}
