<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="equipment_implant")
 */
class ImplantEquipment extends Equipment {
   const TYPE_CYBERWARE = 0;
   const TYPE_BIOWARE = 1;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $type;

   /**
    * @ORM\Column(type="decimal")
    * @var float
    */
   protected $essenceCost;

   /**
    * Returns the implant's type
    *
    * @return int
    */
   public function getType() {
      return $this->type;
   }

   /**
    * Returns the implant's essence cost
    *
    * @return float
    */
   public function getEssenceCost() {
      return $this->essenceCost;
   }
}
