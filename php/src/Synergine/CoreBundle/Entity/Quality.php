<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="quality")
 */
class Quality {
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
    * @ORM\Column(type="integer", name="bp_cost")
    * @var int
    */
   protected $bpCost;

   /**
    * Returns this quality's ID
    *
    * @return int
    */
   public function getId() {
      return $this->id;
   }

   /**
    * Returns this quality's name
    *
    * @return string
    */
   public function getName() {
      return $this->name;
   }

   /**
    * Returns this quality's BP cost
    *
    * @return int
    */
   public function getBpCost() {
      return $this->bpCost;
   }
}
