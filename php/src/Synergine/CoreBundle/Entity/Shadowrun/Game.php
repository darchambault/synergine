<?php

namespace Synergine\CoreBundle\Entity\Shadowrun;

use Doctrine\ORM\Mapping as ORM;
use Synergine\UserBundle\Entity\User;
use Synergine\CoreBundle\Entity\BaseGame;

/**
 * @ORM\Entity
 * @ORM\Table(name="sr_game")
 */
class Game {
   /**
    * @ORM\Id
    * @ORM\OneToOne(targetEntity="Synergine\CoreBundle\Entity\BaseGame")
    * @var BaseGame
    */
   protected $game;

   /**
    * @ORM\OneToMany(targetEntity="Character", mappedBy="game")
    * @var Character[]
    */
   protected $characters;

   /**
    * Returns this game's base game
    *
    * @return BaseGame
    */
   public function getGame() {
      return $this->game;
   }

   /**
    * Returns this game's characters
    *
    * @return Character[]
    */
   public function getCharacters() {
      return $this->characters;
   }

   /**
    * Sets this game's base game
    *
    * @param BaseGame $game
    */
   public function setGame(BaseGame $game) {
      $this->game = $game;
   }
}
