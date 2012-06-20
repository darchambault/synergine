<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="equipment")
 */
class Equipment {
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
   protected $availability;

   /**
    * @ORM\Column(type="boolean")
    * @var bool
    */
   protected $restricted;

   /**
    * @ORM\Column(type="integer")
    * @var bool
    */
   protected $cost;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $rating;

   /**
    * Returns the equipment's ID
    *
    * @return int
    */
   public function getId() {
      return $this->id;
   }

   /**
    * Returns the equipment's name
    *
    * @return string
    */
   public function getName() {
      return $this->name;
   }

   /**
    * Returns the equipment's availability
    *
    * @return int
    */
   public function getAvailability() {
      return $this->availability;
   }

   /**
    * Indicates if this equipment is restricted
    *
    * @return bool
    */
   public function isRestricted() {
      return $this->restricted;
   }

   /**
    * Returns the equipment's cost
    *
    * @return int
    */
   public function getCost() {
      return $this->cost;
   }

   /**
    * Returns the equipment's rating
    *
    * @return int
    */
   public function getRating() {
      return $this->rating;
   }
}
