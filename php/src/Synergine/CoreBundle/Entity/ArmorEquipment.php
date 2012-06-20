<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="equipment_armor")
 */
class ArmorEquipment extends Equipment {
   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $ballisticRating;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $impactRating;

   /**
    * Returns this armor's ballistic rating
    *
    * @return int
    */
   public function getBallisticRating() {
      return $this->ballisticRating;
   }

   /**
    * Returns this armor's impact rating
    *
    * @return int
    */
   public function getImpactRating() {
      return $this->impactRating;
   }
}
