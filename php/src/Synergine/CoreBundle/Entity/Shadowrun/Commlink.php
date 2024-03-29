<?php

namespace Synergine\CoreBundle\Entity\Shadowrun;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sr_commlink")
 */
class Commlink {
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
    * @ORM\Column(type="smallint", name="response_rating")
    * @var int
    */
   protected $responseRating;

   /**
    * @ORM\Column(type="smallint", name="system_rating")
    * @var int
    */
   protected $systemRating;

   /**
    * @ORM\Column(type="smallint", name="firewall_rating")
    * @var int
    */
   protected $firewallRating;

   /**
    * @ORM\Column(type="smallint", name="signal_rating")
    * @var int
    */
   protected $signalRating;

   /**
    * Returns the commlink's ID
    *
    * @return int
    */
   public function getId() {
      return $this->id;
   }

   /**
    * Returns the commlink's equipment object
    *
    * @return Equipment
    */
   public function getEquipment() {
      return $this->equipment;
   }

   /**
    * Returns the commlink's response rating
    *
    * @return int
    */
   public function getResponseRating() {
      return $this->responseRating;
   }

   /**
    * Returns the commlink's system rating
    *
    * @return int
    */
   public function getSystemRating() {
      return $this->systemRating;
   }

   /**
    * Returns the commlink's firewall rating
    *
    * @return int
    */
   public function getFirewallRating() {
      return $this->firewallRating;
   }

   /**
    * Returns the commlink's signal rating
    *
    * @return int
    */
   public function getSignalRating() {
      return $this->signalRating;
   }

   /**
    * Sets the commlink's equipment
    *
    * @param \Synergine\CoreBundle\Entity\Equipment $equipment
    */
   public function setEquipment(Equipment $equipment) {
      $this->equipment = $equipment;
   }

   /**
    * Sets the commlink's response rating
    *
    * @param int $responseRating
    */
   public function setResponseRating($responseRating) {
      $this->responseRating = $responseRating;
   }

   /**
    * Sets the commlink's system rating
    *
    * @param int $systemRating
    */
   public function setSystemRating($systemRating) {
      $this->systemRating = $systemRating;
   }

   /**
    * Sets the commlink's firewall rating
    *
    * @param int $firewallRating
    */
   public function setFirewallRating($firewallRating) {
      $this->firewallRating = $firewallRating;
   }

   /**
    * Sets the commlink's signal rating
    *
    * @param int $signalRating
    */
   public function setSignalRating($signalRating) {
      $this->signalRating = $signalRating;
   }
}
