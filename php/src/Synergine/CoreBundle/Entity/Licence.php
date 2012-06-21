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
    * @var string
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
}
