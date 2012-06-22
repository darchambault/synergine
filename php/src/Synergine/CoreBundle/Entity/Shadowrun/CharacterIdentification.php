<?php

namespace Synergine\CoreBundle\Entity\Shadowrun;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sr_character_identification")
 */
class CharacterIdentification {
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    * @var int
    */
   protected $id;

   /**
    * @ORM\ManyToOne(targetEntity="Character")
    * @var Character
    */
   protected $character;

   /**
    * @ORM\Column(type="string")
    * @var string
    */
   protected $name;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $rating;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $nuyens;

   /**
    * @ORM\OneToMany(targetEntity="Licence", mappedBy="characterId")
    * @var Licence[]
    */
   protected $licences;

   /**
    * Returns the character this relates to
    *
    * @return Character
    */
   public function getCharacter() {
      return $this->character;
   }

   /**
    * Returns this ID's name
    *
    * @return string
    */
   public function getName() {
      return $this->name;
   }

   /**
    * Returns this ID's rating
    *
    * @return int
    */
   public function getRating() {
      return $this->rating;
   }

   /**
    * Returns this ID's available nuyens
    *
    * @return int
    */
   public function getNuyens() {
      return $this->nuyens;
   }

   /**
    * Returns the licences for this ID
    *
    * @return Licence[]
    */
   public function getLicences() {
      return $this->licences;
   }

   /**
    * Sets the character identification's character
    *
    * @param \Synergine\CoreBundle\Entity\Character $character
    */
   public function setCharacter(Character $character) {
      $this->character = $character;
   }

   /**
    * Sets the character identification's name
    *
    * @param string $name
    */
   public function setName($name) {
      $this->name = $name;
   }

   /**
    * Sets the character identification's rating
    *
    * @param int $rating
    */
   public function setRating($rating) {
      $this->rating = $rating;
   }

   /**
    * Sets the character identification's available nuyens
    *
    * @param int $nuyens
    */
   public function setNuyens($nuyens) {
      $this->nuyens = $nuyens;
   }
}
