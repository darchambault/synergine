<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_identification")
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
    * Returns the licences for this ID
    *
    * @return Licence[]
    */
   public function getLicences() {
      return $this->licences;
   }
}
