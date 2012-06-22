SELECT @Athletics:=`id` FROM sr_skill_group WHERE `name` = 'Athletics';
SELECT @Biotech:=`id` FROM sr_skill_group WHERE `name` = 'Biotech';
SELECT @CloseCombat:=`id` FROM sr_skill_group WHERE `name` = 'Close Combat';
SELECT @Conjuring:=`id` FROM sr_skill_group WHERE `name` = 'Conjuring';
SELECT @Cracking:=`id` FROM sr_skill_group WHERE `name` = 'Cracking';
SELECT @Electronics:=`id` FROM sr_skill_group WHERE `name` = 'Electronics';
SELECT @Firearms:=`id` FROM sr_skill_group WHERE `name` = 'Firearms';
SELECT @Influence:=`id` FROM sr_skill_group WHERE `name` = 'Influence';
SELECT @Mechanic:=`id` FROM sr_skill_group WHERE `name` = 'Mechanic';
SELECT @Outdoors:=`id` FROM sr_skill_group WHERE `name` = 'Outdoors';
SELECT @Sorcery:=`id` FROM sr_skill_group WHERE `name` = 'Sorcery';
SELECT @Stealth:=`id` FROM sr_skill_group WHERE `name` = 'Stealth';
SELECT @Tasking:=`id` FROM sr_skill_group WHERE `name` = 'Tasking';

INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Aeronautics Mechanic', @Mechanic);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Archery', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Armorer', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Artisan', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Artist', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Assensing', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Astral', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Automatics', @Firearms);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Automotive Mechanic', @Mechanic);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Banishing', @Conjuring);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Binding', @Conjuring);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Blades', @CloseCombat);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Climbing', @Athletics);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Clubs', @CloseCombat);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Combat', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Compiling', @Tasking);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Computer', @Electronics);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Con', @Influence);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Counterspelling', @Sorcery);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Cybercombat', @Cracking);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Cybertechnology', @Biotech);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Data Search', @Electronics);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Decompiling', @Tasking);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Demolitions', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Disguise', @Stealth);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Diving', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Dodge', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Electronic Warfare', @Cracking);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Escape', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Etiquette', @Influence);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Exotic Ranged (weapon)', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('First Aid', @Biotech);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Forgery', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Gunnery', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Gymnastics', @Athletics);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Hacking', @Cracking);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Hardware', @Electronics);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Heavy Weapons', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Industrial Mechanic', @Mechanic);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Infiltration', @Stealth);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Instruction', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Intimidation', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Leadership', @Influence);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Locksmith', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Longarms', @Firearms);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Medicine', @Biotech);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Nautical Mechanic', @Mechanic);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Navigation', @Outdoors);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Negotiation', @Influence);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Palming', @Stealth);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Parachuting', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Perception', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Pilot Aerospace', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Pilot Aircraft', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Pilot Anthroform', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Pilot Exotic Vehicle', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Pilot Ground Craft', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Pilot Watercraft', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Pistols', @Firearms);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Registering', @Tasking);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Ritual Spellcasting', @Sorcery);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Running', @Athletics);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Shadowing', @Stealth);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Software', @Electronics);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Spellcasting', @Sorcery);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Summoning', @Conjuring);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Survival', @Outdoors);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Swimming', @Athletics);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Throwing Weapons', NULL);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Tracking', @Outdoors);
INSERT INTO `sr_skill` (`name`, `group_id`) VALUES ('Unarmed Combat', @CloseCombat);