<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="skill_group")
 */
class SkillGroup {
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
    * @ORM\OneToMany(targetEntity="Skill", mappedBy="group")
    * @var Skill[]
    */
   protected $skills;

   /**
    * Returns this group's ID
    *
    * @return int
    */
   public function getId() {
      return $this->id;
   }

   /**
    * Returns this group's name
    *
    * @return string
    */
   public function getName() {
      return $this->name;
   }

   /**
    * Returns this group's skills
    *
    * @return Skill[]
    */
   public function getSkills() {
      return $this->skills;
   }
}
