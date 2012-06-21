<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contact")
 */
class Contact {
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Character")
    * @ORM\JoinColumn(name="owner_character_id")
    * @var Character
    */
   protected $ownerCharacter;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Character")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Column(type="smallint", name="loyalty_rating")
    * @var int
    */
   protected $loyaltyRating;

   /**
    * @ORM\Column(type="smallint", name="connection_rating")
    * @var int
    */
   protected $connectionRating;

   /**
    * Returns the owner of this contact
    *
    * @return Character
    */
   public function getOwnerCharacer() {
      return $this->ownerCharacter;
   }

   /**
    * Returns the character of this contact
    *
    * @return Character
    */
   public function getCharacter() {
      return $this->character;
   }

   /**
    * Returns the contact's loyalty rating
    *
    * @return int
    */
   public function getLoyaltyRating() {
      return $this->loyaltyRating;
   }

   /**
    * Returns the contact's connection rating
    *
    * @return int
    */
   public function getConnectionRating() {
      return $this->connectionRating;
   }

   /**
    * Sets the contact's owner character
    *
    * @param \Synergine\CoreBundle\Entity\Character $ownerCharacter
    */
   public function setOwnerCharacter(Character $ownerCharacter) {
      $this->ownerCharacter = $ownerCharacter;
   }

   /**
    * Sets the contact's character
    *
    * @param \Synergine\CoreBundle\Entity\Character $character
    */
   public function setCharacter(Character $character) {
      $this->character = $character;
   }

   /**
    * Sets the contact's loyalty rating
    *
    * @param int $loyaltyRating
    */
   public function setLoyaltyRating($loyaltyRating) {
      $this->loyaltyRating = $loyaltyRating;
   }

   /**
    * Sets the contact's connection rating
    *
    * @param int $connectionRating
    */
   public function setConnectionRating($connectionRating) {
      $this->connectionRating = $connectionRating;
   }
}
