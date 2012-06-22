<?php

namespace Synergine\CoreBundle\Entity\Shadowrun;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sr_equipment")
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
    * @var int
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

   /**
    * Sets the equipment's name
    *
    * @param string $name
    */
   public function setName($name) {
      $this->name = $name;
   }

   /**
    * Sets the equipment's availability
    *
    * @param int $availability
    */
   public function setAvailability($availability) {
      $this->availability = $availability;
   }

   /**
    * Sets the equipment's restricted status
    *
    * @param boolean $restricted
    */
   public function setRestricted($restricted) {
      $this->restricted = $restricted;
   }

   /**
    * Sets the equipment's cost
    *
    * @param int $cost
    */
   public function setCost($cost) {
      $this->cost = $cost;
   }

   /**
    * Sets the equipment's rating
    *
    * @param int $rating
    */
   public function setRating($rating) {
      $this->rating = $rating;
   }
}
