<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="game_type")
 */
class GameType {
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
    * Returns this game's ID
    *
    * @return int
    */
   public function getId() {
      return $this->id;
   }

   /**
    * Returns this game's name
    *
    * @return string
    */
   public function getName() {
      return $this->name;
   }

   /**
    * Sets this game's name
    *
    * @param string $name
    */
   public function setName($name) {
      $this->name = $name;
   }
}
