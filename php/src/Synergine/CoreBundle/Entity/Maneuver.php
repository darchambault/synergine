<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="maneuver")
 */
class Maneuver {
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
    * Returns this maneuver's ID
    *
    * @return int
    */
   public function getId() {
      return $this->id;
   }

   /**
    * Returns this maneuver's name
    *
    * @return string
    */
   public function getName() {
      return $this->name;
   }
}
