<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="licence")
 */
class Licence {
   /**
    * @ORM\Id
    * @ORM\OneToOne(targetEntity="CharacterEquipment")
    * @ORM\JoinColumn(name="character_equipment_id")
    * @var CharacterEquipment
    */
   protected $characterEquipment;

   /**
    * @ORM\ManyToOne(targetEntity="CharacterIdentification")
    * @ORM\JoinColumn(name="character_identification_id")
    * @var CharacterIdentification
    */
   protected $characterIdentification;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $rating;

   /**
    * Returns the character equipment this licence is for
    *
    * @return CharacterEquipment
    */
   public function getCharacterEquipment() {
      return $this->characterEquipment;
   }

   /**
    * Returns the character identification this licence is bound to
    *
    * @return CharacterIdentification
    */
   public function getCharacterIdentification() {
      return $this->characterIdentification;
   }

   /**
    * Returns this licence's rating
    *
    * @return int
    */
   public function getRating() {
      return $this->rating;
   }

   /**
    * Sets the character equipment this licence is for
    *
    * @param \Synergine\CoreBundle\Entity\CharacterEquipment $characterEquipment
    */
   public function setCharacterEquipment(CharacterEquipment $characterEquipment) {
      $this->characterEquipment = $characterEquipment;
   }

   /**
    * Sets the character identification this licence is bound to
    *
    * @param \Synergine\CoreBundle\Entity\CharacterIdentification $characterIdentification
    */
   public function setCharacterIdentification(CharacterIdentification $characterIdentification) {
      $this->characterIdentification = $characterIdentification;
   }

   /**
    * Sets the licence's rating
    *
    * @param int $rating
    */
   public function setRating($rating) {
      $this->rating = $rating;
   }
}
