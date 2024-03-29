<?php

namespace Synergine\CoreBundle\Entity\Shadowrun;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sr_quality")
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

   /**
    * Sets the quality's name
    *
    * @param string $name
    */
   public function setName($name) {
      $this->name = $name;
   }

   /**
    * Sets the quality's BP cost
    *
    * @param int $bpCost
    */
   public function setBpCost($bpCost) {
      $this->bpCost = $bpCost;
   }
}
