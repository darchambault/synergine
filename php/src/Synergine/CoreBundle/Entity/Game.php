<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Synergine\UserBundle\Entity\User;

/**
 * @ORM\Entity
 * @ORM\Table(name="game")
 */
class Game {
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
    * @ORM\OneToMany(targetEntity="Character", mappedBy="game")
    * @var Character[]
    */
   protected $characters;

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
    * Returns this game's characters
    *
    * @return Character[]
    */
   public function getCharacters() {
      return $this->characters;
   }
}
