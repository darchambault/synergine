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
    * @var Game
    */
   protected $game;

   /**
    * @ORM\OneToOne(targetEntity="Synergine\UserBundle\Entity\User")
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
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $metatype;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $age;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $sex;

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
    * @ORM\Column(type="smallint", name="street_cred")
    * @var int
    */
   protected $streetCred;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $notoriety;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $body;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $agility;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $reaction;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $strength;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $charisma;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $intuition;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $logic;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $willpower;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $edge;

   /**
    * @ORM\Column(type="smallint", name="available_edge")
    * @var int
    */
   protected $availableEdge;

   /**
    * @ORM\Column(type="smallint")
    * @var int
    */
   protected $magic;

   /**
    * @ORM\OneToMany(targetEntity="CharacterSkill", mappedBy="character")
    * @var Skill[]
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
    * @var Quality[]
    */
   protected $qualities;

   /**
    * @ORM\ManyToMany(targetEntity="Maneuver")
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
    * @ORM\JoinColumn(name="contact_owner_id")
    * @var Character
    */
   protected $contactOwner;

   /**
    * @ORM\Column(type="smallint", name="physical_damage")
    * @var int
    */
   protected $physicalDamage;

   /**
    * @ORM\Column(type="smallint", name="stun_damage")
    * @var int
    */
   protected $stunDamage;

   /**
    * @ORM\OneToMany(targetEntity="CharacterWound", mappedBy="character")
    * @var CharacterWound[]
    */
   protected $wounds;

   /**
    * @ORM\OneToMany(targetEntity="CharacterEquipment", mappedBy="character")
    * @var CharacterEquipment[]
    */
   protected $inventory;

   /**
    * @ORM\OneToMany(targetEntity="CharacterWeapon", mappedBy="character")
    * @var CharacterWeapon[]
    */
   protected $weapons;

   /**
    * @ORM\OneToMany(targetEntity="CharacterArmor", mappedBy="character")
    * @var CharacterArmor[]
    */
   protected $armor;

   /**
    * @ORM\OneToMany(targetEntity="CharacterImplant", mappedBy="character")
    * @var CharacterImplant[]
    */
   protected $implants;

   /**
    * @ORM\OneToMany(targetEntity="CharacterVehicle", mappedBy="character")
    * @var CharacterVehicle[]
    */
   protected $vehicles;

   /**
    * @ORM\OneToMany(targetEntity="CharacterCommlink", mappedBy="character")
    * @var CharacterCommlink[]
    */
   protected $commlinks;

   /**
    * @ORM\OneToMany(targetEntity="CharacterIdentification", mappedBy="character")
    * @var CharacterIdentifications[]
    */
   protected $identifications;

   /**
    * @ORM\ManyToMany(targetEntity="Spell")
    * @var Spell[]
    */
   protected $spells;

//   protected $spirits;
//   protected $adeptPowers;
//   protected $complexForms;

   /**
    * Returns the character's ID
    *
    * @return int
    */
   public function getId() {
      return $this->id;
   }

   /**
    * Returns the game which this character is part of
    *
    * @return Game
    */
   public function getGame() {
      return $this->game();
   }

   /**
    * Returns the user to whom this character belongs to
    *
    * @return \Synergine\UserBundle\Entity\User
    */
   public function getUser() {
      return $this->user;
   }

   /**
    * Returns the character's name
    *
    * @return string
    */
   public function getName() {
      return $this->name;
   }

   /**
    * Returns the character's alias
    *
    * @return string
    */
   public function getAlias() {
      return $this->alias;
   }

   /**
    * Returns the character's metatype
    *
    * @return int
    */
   public function getMetatype() {
      return $this->metatype;
   }

   /**
    * Returns the character's age
    *
    * @return int
    */
   public function getAge() {
      return $this->age;
   }

   /**
    * Returns the character's age
    *
    * @return int
    */
   public function getSex() {
      return $this->sex;
   }

   /**
    * Returns the character's total karma
    *
    * @return int
    */
   public function getTotalKarma() {
      return $this->totalKarma;
   }

   /**
    * Returns the character's current karma
    *
    * @return int
    */
   public function getCurrentKarma() {
      return $this->currentKarma;
   }

   /**
    * Returns the character's street cred
    *
    * @return int
    */
   public function getStreetCred() {
      return $this->streetCred;
   }

   /**
    * Returns the character's notoriety
    *
    * @return int
    */
   public function getNotoriety() {
      return $this->notoriety;
   }

   /**
    * Returns the character's body attribute
    *
    * @return int
    */
   public function getBody() {
      return $this->body;
   }

   /**
    * Returns the character's agility attribute
    *
    * @return int
    */
   public function getAgility() {
      return $this->agility;
   }

   /**
    * Returns the character's reaction attribute
    *
    * @return int
    */
   public function getReaction() {
      return $this->reaction;
   }

   /**
    * Returns the character's strength attribute
    *
    * @return int
    */
   public function getStrength() {
      return $this->strength;
   }

   /**
    * Returns the character's charisma attribute
    *
    * @return int
    */
   public function getCharisma() {
      return $this->charisma;
   }

   /**
    * Returns the character's intuition attribute
    *
    * @return int
    */
   public function getIntuition() {
      return $this->intuition;
   }

   /**
    * Returns the character's logic attribute
    *
    * @return int
    */
   public function getLogic() {
      return $this->logic;
   }

   /**
    * Returns the character's willpower attribute
    *
    * @return int
    */
   public function getWillpower() {
      return $this->willpower;
   }

   /**
    * Returns the character's edge points
    *
    * @return int
    */
   public function getEdge() {
      return $this->edge;
   }

   /**
    * Returns the character's available edge points
    *
    * @return int
    */
   public function getAvailableEdge() {
      return $this->availableEdge;
   }

   /**
    * Returns the character's magic attribute
    *
    * @return int
    */
   public function getMagic() {
      return $this->magic;
   }

   /**
    * Returns the character's skills
    *
    * @return Skill[]
    */
   public function getSkills() {
      return $this->skills;
   }

   /**
    * Returns the character's knowledge skills
    *
    * @return CharacterKnowledgeSkill[]
    */
   public function getKnowledgeSkills() {
      return $this->knowledgeSkills;
   }

   /**
    * Returns the character's language skills
    *
    * @return CharacterLanguageSkill[]
    */
   public function getLanguageSkills() {
      return $this->languageSkills;
   }

   /**
    * Returns the character's qualities
    *
    * @return Quality[]
    */
   public function getQualities() {
      return $this->qualities;
   }

   /**
    * Returns the character's maneuvers
    *
    * @return Maneuver[]
    */
   public function getManeuvers() {
      return $this->maneuvers;
   }

   /**
    * Returns the character's contacts
    *
    * @return Character[]
    */
   public function getContacts() {
      return $this->contacts;
   }

   /**
    * Returns the character's contact owner
    *
    * @return \Synergine\CoreBundle\Entity\Character
    */
   public function getContactOwner() {
      return $this->contactOwner;
   }

   /**
    * Returns the character's physical damage
    *
    * @return int
    */
   public function getPhysicalDamage() {
      return $this->physicalDamage;
   }

   /**
    * Returns the character's stun damage
    *
    * @return int
    */
   public function getStunDamage() {
      return $this->stunDamage;
   }

   /**
    * Returns the character's wounds
    *
    * @return CharacterWound[]
    */
   public function getWounds() {
      return $this->wounds;
   }

   /**
    * Returns the character's inventory
    *
    * @return CharacterEquipment[]
    */
   public function getInventory() {
      return $this->inventory;
   }

   /**
    * Returns the character's weapons
    *
    * @return CharacterWeapon[]
    */
   public function getWeapons() {
      return $this->weapons;
   }

   /**
    * Returns the character's armor
    *
    * @return CharacterArmor[]
    */
   public function getArmor() {
      return $this->armor;
   }

   /**
    * Returns the character's implants
    *
    * @return CharacterImplant[]
    */
   public function getImplants() {
      return $this->implants;
   }

   /**
    * Returns the character's vehicles
    *
    * @return CharacterVehicle[]
    */
   public function getVehicles() {
      return $this->vehicles;
   }

   /**
    * Returns the character's commlinks
    *
    * @return CharacterCommlink[]
    */
   public function getCommlinks() {
      return $this->commlinks;
   }

   /**
    * Returns the character's identifications
    *
    * @return CharacterIdentification[]
    */
   public function getIdentifications() {
      return $this->identifications;
   }

   /**
    * Returns the character's spells
    *
    * @return Spell[]
    */
   public function getSpells() {
      return $this->spells;
   }

   /**
    * Returns the character's public awareness
    *
    * @return int
    */
   public function getPublicAwareness() {
      return ($this->getStreetCred() + $this->getNotoriety());
   }

   /**
    * Returns the character's initiative
    *
    * @return int
    */
   public function getInitiative() {
      return ($this->getReaction() + $this->getIntuition());
   }

   /**
    * Returns the character's maximum physical damage
    *
    * @return int
    */
   public function getMaximumPhysicalDamage() {
      return (ceil($this->getBody() / 2) + 8);
   }

   /**
    * Returns the character's maximum stun damage
    *
    * @return int
    */
   public function getMaximumStunDamage() {
      return (ceil($this->getWillpower() / 2) + 8);
   }

   /**
    * Sets the game which the character belongs to
    *
    * @param \Synergine\CoreBundle\Entity\Game $game
    */
   public function setGame(Game $game) {
      $this->game = $game;
   }

   /**
    * Sets the user which the character belongs to
    *
    * @param \Synergine\UserBundle\Entity\User $user
    */
   public function setUser(User $user) {
      $this->user = $user;
   }

   /**
    * Sets the character's name
    *
    * @param string $name
    */
   public function setName($name) {
      $this->name = $name;
   }

   /**
    * Sets the character's alias
    *
    * @param string $alias
    */
   public function setAlias($alias) {
      $this->alias = $alias;
   }

   /**
    * Sets the character's metatype
    *
    * @param int $metatype
    */
   public function setMetatype($metatype) {
      $this->metatype = $metatype;
   }

   /**
    * Sets the character's age
    *
    * @param int $age
    */
   public function setAge($age) {
      $this->age = $age;
   }

   /**
    * Sets the character's sex
    *
    * @param int $sex
    */
   public function setSex($sex) {
      $this->sex = $sex;
   }

   /**
    * Sets the character's total karma
    *
    * @param int $totalKarma
    */
   public function setTotalKarma($totalKarma) {
      $this->totalKarma = $totalKarma;
   }

   /**
    * Sets the character's current karma
    *
    * @param int $currentKarma
    */
   public function setCurrentKarma($currentKarma) {
      $this->currentKarma = $currentKarma;
   }

   /**
    * Sets the character's street cred
    *
    * @param int $streetCred
    */
   public function setStreetCred($streetCred) {
      $this->streetCred = $streetCred;
   }

   /**
    * Sets the character's notoriety
    * @param int $notoriety
    */
   public function setNotoriety($notoriety) {
      $this->notoriety = $notoriety;
   }

   /**
    * Sets the character's body attribute
    *
    * @param int $body
    */
   public function setBody($body) {
      $this->body = $body;
   }

   /**
    * Sets the character's agility attribute
    *
    * @param int $agility
    */
   public function setAgility($agility) {
      $this->agility = $agility;
   }

   /**
    * Sets the character's reaction attribute
    *
    * @param int $reaction
    */
   public function setReaction($reaction) {
      $this->reaction = $reaction;
   }

   /**
    * Sets the character's strength attribute
    *
    * @param int $strength
    */
   public function setStrength($strength) {
      $this->strength = $strength;
   }

   /**
    * Sets the character's charisma attribute
    *
    * @param int $charisma
    */
   public function setCharisma($charisma) {
      $this->charisma = $charisma;
   }

   /**
    * Sets the character's intuition attribute
    *
    * @param int $intuition
    */
   public function setIntuition($intuition) {
      $this->intuition = $intuition;
   }

   /**
    * Sets the character's logic attribute
    *
    * @param int $logic
    */
   public function setLogic($logic) {
      $this->logic = $logic;
   }

   /**
    * Sets the character's willpower attribute
    *
    * @param int $willpower
    */
   public function setWillpower($willpower) {
      $this->willpower = $willpower;
   }

   /**
    * Sets the character's edge points
    *
    * @param int $edge
    */
   public function setEdge($edge) {
      $this->edge = $edge;
   }

   /**
    * Sets the character's available edge points
    *
    * @param int $availableEdge
    */
   public function setAvailableEdge($availableEdge) {
      $this->availableEdge = $availableEdge;
   }

   /**
    * Sets the character's magic attribute
    *
    * @param int $magic
    */
   public function setMagic($magic) {
      $this->magic = $magic;
   }

   /**
    * Sets the character's qualities
    *
    * @param Quality[] $qualities
    */
   public function setQualities($qualities) {
      $this->qualities = $qualities;
   }

   /**
    * Sets the character's maneuvers
    *
    * @param Maneuver[] $maneuvers
    */
   public function setManeuvers($maneuvers) {
      $this->maneuvers = $maneuvers;
   }

   /**
    * Sets the character's contact owner
    *
    * @param \Synergine\CoreBundle\Entity\Character $contactOwner
    */
   public function setContactOwner(Character $contactOwner) {
      $this->contactOwner = $contactOwner;
   }

   /**
    * Sets the character's physical damage
    *
    * @param int $physicalDamage
    */
   public function setPhysicalDamage($physicalDamage) {
      $this->physicalDamage = $physicalDamage;
   }

   /**
    * Sets the character's stun damage
    *
    * @param int $stunDamage
    */
   public function setStunDamage($stunDamage) {
      $this->stunDamage = $stunDamage;
   }

   /**
    * Sets the character's spells
    *
    * @param Spell[] $spells
    */
   public function setSpells($spells) {
      $this->spells = $spells;
   }
}
