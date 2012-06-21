<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="skill_knowledge")
 */
class KnowledgeSkill extends Skill {
   const TYPE_ACADEMIC = 0;
   const TYPE_STREETWISE = 1;
   const TYPE_INTEREST = 2;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $type;

   /**
    * Returns the knowledge skill's type
    *
    * @return int
    */
   public function getType() {
      return $this->type;
   }

   /**
    * Sets the knowledge skill's type
    *
    * @param int $type
    */
   public function setType($type) {
      $this->type = $type;
   }
}
