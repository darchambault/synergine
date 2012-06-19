<?php

namespace Synergine\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Synergine\UserBundle\Entity\User;

/**
 * @ORM\Entity
 * @ORM\Table(name="character")
 */
class Character {
   const METATYPE_HUMAN = 0;
   const METATYPE_ELF = 1;
   const METATYPE_ORC = 2;
   const METATYPE_TROLL = 3;

   const SEX_MALE = 0;
   const SEX_FEMALE = 1;

   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    * @var int
    */
   protected $id;

   /**
    * @ORM\ManyToOne(targetEntity="Game")
    * @ORM\JoinColumn(name="game_id", referencedColumnName="id")
    * @var Game
    */
   protected $game;

   /**
    * @ORM\OneToOne(targetEntity="Synergine\UserBundle\Entity\User")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    * @var Synergine\UserBundle\Entity\User
    */
   protected $user;

   /**
    * @ORM\Column(type="string", length=255)
    * @var string
    */
   protected $name;

   /**
    * @ORM\Column(type="string", length=255)
    * @var string
    */
   protected $alias;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $metatype;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $age;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $sex;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $nuyen;

   /**
    * @ORM\Column(type="integer", name="total_karma")
    * @var int
    */
   protected $totalKarma;

   /**
    * @ORM\Column(type="integer", name="current_karma")
    * @var int
    */
   protected $currentKarma;

   /**
    * @ORM\Column(type="integer", name="street_cred")
    * @var int
    */
   protected $streetCred;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $notoriety;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $body;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $agility;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $reaction;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $strength;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $charisma;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $intuition;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $logic;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $willpower;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $edge;

   /**
    * @ORM\Column(type="integer", name="available_edge")
    * @var int
    */
   protected $availableEdge;

   /**
    * @ORM\Column(type="integer")
    * @var int
    */
   protected $magic;

   /**
    * @ORM\OneToMany(targetEntity="CharacterSkill", mappedBy="character")
    * @var CharacterSkill[]
    */
   protected $skills;

   /**
    * @ORM\OneToMany(targetEntity="CharacterKnowledgeSkill", mappedBy="character")
    * @var CharacterKnowledgeSkill[]
    */
   protected $knowledgeSkills;

   /**
    * @ORM\OneToMany(targetEntity="CharacterLanguageSkill", mappedBy="character")
    * @var CharacterLanguageSkill[]
    */
   protected $languageSkills;

   /**
    * @ORM\ManyToMany(targetEntity="Quality")
    * @ORM\JoinTable(name="character_quality",
    *      joinColumns={@ORM\JoinColumn(name="character_id", referencedColumnName="id")},
    *      inverseJoinColumns={@ORM\JoinColumn(name="quality_id", referencedColumnName="id")}
    * )
    * @var Quality[]
    */
   protected $qualities;

   /**
    * @ORM\ManyToMany(targetEntity="Maneuver")
    * @ORM\JoinTable(name="character_maneuver",
    *      joinColumns={@ORM\JoinColumn(name="character_id", referencedColumnName="id")},
    *      inverseJoinColumns={@ORM\JoinColumn(name="maneuver_id", referencedColumnName="id")}
    * )
    * @var Maneuver[]
    */
   protected $maneuvers;

   /**
    * @ORM\OneToMany(targetEntity="Character", mappedBy="contactOwner")
    * @var Character[]
    */
   protected $contacts;

   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Character")
    * @ORM\JoinColumn(name="contact_owner_id", referencedColumnName="id")
    * @var Character
    */
   protected $contactOwner;

   /**
    * @ORM\Column(type="integer", name="physical_damage")
    * @var int
    */
   protected $physicalDamage;

   /**
    * @ORM\Column(type="integer", name="stun_damage")
    * @var int
    */
   protected $stunDamage;

   /**
    * @ORM\OneToMany(targetEntity="Wound", mappedBy="character")
    * @var Wound[]
    */
   protected $wounds;

   protected $inventory;
   protected $implants;
   protected $weapons;
   protected $armor;
   protected $vehicles;
   protected $ids;
   protected $commlinks;
   protected $programs;
   protected $spells;
   protected $spirits;
   protected $powers;
}
