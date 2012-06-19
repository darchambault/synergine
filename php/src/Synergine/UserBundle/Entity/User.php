<?php

namespace Synergine\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Synergine\CoreBundle\Entity\Game;
use Synergine\CoreBundle\Entity\Character;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    * @var int
    */
   protected $id;

   /**
    * @ORM\ManyToMany(targetEntity="Group")
    * @ORM\JoinTable(name="fos_user_group",
    *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
    *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
    * )
    * @var Group[]
    */
   protected $groups;

   /**
    * @ORM\OneToMany(targetEntity="Synergine\CoreBundle\Entity\Game", mappedBy="gameMaster")
    * @var Synergine\CoreBundle\Entity\Game[]
    */
   protected $games;

   /**
    * @ORM\OneToMany(targetEntity="Synergine\CoreBundle\Entity\Character", mappedBy="user")
    * @var Synergine\CoreBundle\Entity\Character[]
    */
   protected $characters;
}
