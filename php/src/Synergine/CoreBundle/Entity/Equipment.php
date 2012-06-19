<?php

namespace Synergine\CoreBundle\Entity;

interface Equipment {
   public function getName();

   public function getAvailability();

   public function isRestricted();

   public function getCost();
}
