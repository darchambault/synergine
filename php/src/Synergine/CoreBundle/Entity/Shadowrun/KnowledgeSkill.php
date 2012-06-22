<?php

namespace Synergine\CoreBundle\Entity\Shadowrun;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sr_skill_knowledge")
 */
class KnowledgeSkill extends Skill {
   const TYPE_ACADEMIC = 1;
   const TYPE_PROFESSIONAL = 2;
   const TYPE_STREETWISE = 3;
   const TYPE_INTEREST = 4;

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
