<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="vehicle")
 */
class Vehicle {
   const TYPE_GROUND = 0;
   const TYPE_AIR = 1;
   const TYPE_SEA = 2;

   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    * @var int
    */
   protected $id;

   /**
    * @ORM\OneToOne(targetEntity="Equipment")
    * @var Equipment
    */
   protected $equipment;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $type;

   /**
    * @ORM\Column(type="integer", name="handling_rating")
    * @var int
    */
   protected $handlingRating;

   /**
    * @ORM\Column(type="integer", name="acceleration_rating")
    * @var int
    */
   protected $accelerationRating;

   /**
    * @ORM\Column(type="integer", name="speed_rating")
    * @var int
    */
   protected $speedRating;

   /**
    * @ORM\Column(type="smallint", name="pilot_rating")
    * @var int
    */
   protected $pilotRating;

   /**
    * @ORM\Column(type="smallint", name="body_rating")
    * @var int
    */
   protected $bodyRating;

   /**
    * @ORM\Column(type="smallint", name="armor_rating")
    * @var int
    */
   protected $armorRating;

   /**
    * @ORM\Column(type="smallint", name="sensor_rating")
    * @var int
    */
   protected $sensorRating;

   /**
    * Returns the vehicle's ID
    *
    * @return int
    */
   public function getId() {
      return $this->id;
   }

   /**
    * Returns the vehicle's equipment object
    *
    * @return Equipment
    */
   public function getEquipment() {
      return $this->equipment;
   }

   /**
    * Returns the vehicle's type
    *
    * @return int
    */
   public function getType() {
      return $this->type;
   }

   /**
    * Returns the vehicle's handling rating
    *
    * @return int
    */
   public function getHandlingRating() {
      return $this->handlingRating;
   }

   /**
    * Returns the vehicle's acceleration rating
    *
    * @return int
    */
   public function getAccelerationRating() {
      return $this->accelerationRating;
   }

   /**
    * Returns the vehicle's speed rating
    *
    * @return int
    */
   public function getSpeedRating() {
      return $this->speedRating;
   }

   /**
    * Returns the vehicle's pilot rating
    *
    * @return int
    */
   public function getPilotRating() {
      return $this->pilotRating;
   }

   /**
    * Returns the vehicle's body rating
    *
    * @return int
    */
   public function getBodyRating() {
      return $this->bodyRating;
   }

   /**
    * Returns the vehicle's armor rating
    *
    * @return int
    */
   public function getArmorRating() {
      return $this->armorRating;
   }

   /**
    * Returns the vehicle's sensor rating
    *
    * @return int
    */
   public function getSensorRating() {
      return $this->sensorRating;
   }

   /**
    * Sets the vehicle's equipment
    *
    * @param \Synergine\CoreBundle\Entity\Equipment $equipment
    */
   public function setEquipment(Equipment $equipment) {
      $this->equipment = $equipment;
   }

   /**
    * Sets this vehicle's type
    *
    * @param int $type
    */
   public function setType($type) {
      $this->type = $type;
   }

   /**
    * Sets this vehicle's handling rating
    *
    * @param int $handlingRating
    */
   public function setHandlingRating($handlingRating) {
      $this->handlingRating = $handlingRating;
   }

   /**
    * Sets this vehicle's acceleration rating
    *
    * @param int $accelerationRating
    */
   public function setAccelerationRating($accelerationRating) {
      $this->accelerationRating = $accelerationRating;
   }

   /**
    * Sets this vehicle's speed rating
    *
    * @param int $speedRating
    */
   public function setSpeedRating($speedRating) {
      $this->speedRating = $speedRating;
   }

   /**
    * Sets this vehicle's pilot rating
    *
    * @param int $pilotRating
    */
   public function setPilotRating($pilotRating) {
      $this->pilotRating = $pilotRating;
   }

   /**
    * Sets this vehicle's body rating
    *
    * @param int $bodyRating
    */
   public function setBodyRating($bodyRating) {
      $this->bodyRating = $bodyRating;
   }

   /**
    * Sets this vehicle's armor rating
    *
    * @param int $armorRating
    */
   public function setArmorRating($armorRating) {
      $this->armorRating = $armorRating;
   }

   /**
    * Sets this vehicle's sensor rating
    *
    * @param int $sensorRating
    */
   public function setSensorRating($sensorRating) {
      $this->sensorRating = $sensorRating;
   }
}
