<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="spell")
 */
class Spell {
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
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $type;

   /**
    * @ORM\Column(type="smallint", name="range_rating")
    * @var int
    */
   protected $rangeRating;

   /**
    * @ORM\Column(type="smallint", name="duration_rating")
    * @var int
    */
   protected $durationRating;

   /**
    * @ORM\Column(type="smallint", name="damage_value")
    * @var int
    */
   protected $damageValue;

   /**
    * Returns this spell's ID
    *
    * @return int
    */
   public function getId() {
      return $this->id;
   }

   /**
    * Returns this spell's name
    *
    * @return string
    */
   public function getName() {
      return $this->name;
   }

   /**
    * Returns this spell's type
    *
    * @return int
    */
   public function getType() {
      return $this->type;
   }

   /**
    * Returns this spell's range rating
    *
    * @return int
    */
   public function getRangeRating() {
      return $this->rangeRating;
   }

   /**
    * Returns this spell's duration rating
    *
    * @return int
    */
   public function getDurationRating() {
      return $this->durationRating;
   }

   /**
    * Returns this spell's damage value
    *
    * @return int
    */
   public function getDamageValue() {
      return $this->damageValue;
   }
}
