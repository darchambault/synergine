<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Synergine\UserBundle\Entity\User;

/**
 * @ORM\Entity
 * @ORM\Table(name="game")
 */
class BaseGame {
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
    * @ORM\OneToOne(targetEntity="Synergine\UserBundle\Entity\User")
    * @ORM\JoinColumn(name="gamemaster_id")
    * @var Synergine\UserBundle\Entity\User
    */
   protected $gameMaster;

   /**
    * @ORM\ManyToOne(targetEntity="GameType")
    * @var GameType
    */
   protected $type;

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
    * Returns this game's game master
    *
    * @return User
    */
   public function getGameMaster() {
      return $this->gameMaster;
   }

   /**
    * Returns this game's type
    *
    * @return GameType
    */
   public function getType() {
      return $this->type;
   }

   /**
    * Sets this game's name
    *
    * @param string $name
    */
   public function setName($name) {
      $this->name = $name;
   }

   /**
    * Sets this game's game master
    *
    * @param \Synergine\UserBundle\Entity\User $gameMaster
    */
   public function setGameMaster(User $gameMaster=null) {
      $this->gameMaster = $gameMaster;
   }

   /**
    * Sets this game's type
    *
    * @param GameType $type
    */
   public function setType(GameType $type) {
      $this->type = $type;
   }
}
