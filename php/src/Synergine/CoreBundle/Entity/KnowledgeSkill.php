<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="knowledge_skill")
 */
class KnowledgeSkill {
   const TYPE_ACADEMIC = 0;
   const TYPE_STREETWISE = 1;
   const TYPE_INTEREST = 2;

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
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $type;
}
