<?php

namespace Chestersa\Yugioh;

class YuGiOhFactory
{
    public static function getYugisDeck()
    {
        $yugi = new Deck('Yugi');
        $yugi->addCards([
            ['name' => 'Summoned Skull', 'atk' => 2500, 'type' => Field::$DAY],
            ['name' => 'Dark Magician', 'atk' => 2100, 'type' => Field::$NIGHT],
            ['name' => 'Winged Dragon Guardian of the Fortress #1', 'atk' => 1400, 'type' => Field::$NIGHT],
            ['name' => 'Berfomet', 'atk' => 1400, 'type' => Field::$GRASS],
            ['name' => 'Mammoth Graveyard', 'atk' => 1200, 'type' => Field::$DAY],
            ['name' => 'Beaver Warrior', 'atk' => 1200, 'type' => Field::$WATER],
            ['name' => 'Silver Fang', 'atk' => 1200, 'type' => Field::$FOREST],
            ['name' => 'Exodia the Forbidden One', 'atk' => 1000, 'type' => Field::$NIGHT],
        ]);
        return $yugi;
    }

    public static function getKaibasDeck()
    {
        $kaiba = new Deck('Kaiba');
        $kaiba->addCards([
            ['name' => 'Blue Eyes Ultimate Dragon', 'atk' => 4500, 'type' => Field::$FOREST],
            ['name' => 'Blue Eyes White Dragon', 'atk' => 3000, 'type' => Field::$FOREST],
            ['name' => 'Sword Stalker', 'atk' => 2000, 'type' => Field::$NIGHT],
            ['name' => 'Rabid Horseman', 'atk' => 2000, 'type' => Field::$NIGHT],
            ['name' => 'Vorse Raider', 'atk' => 1900, 'type' => Field::$DAY],
            ['name' => 'Battle Ox', 'atk' => 1700, 'type' => Field::$DAY],
            ['name' => 'Drillago', 'atk' => 1600, 'type' => Field::$WATER],
            ['name' => 'Hitotsu-Me Giant', 'atk' => 1200, 'type' => Field::$GRASS],
        ]);
        return $kaiba;
    }

    public static function getJoeysDeck()
    {
        $joey = new Deck('Joey');
        $joey->addCards([
            ['name' => 'Red Eyes B. Metal Dragon', 'atk' => 2800, 'type' => Field::$NIGHT],
            ['name' => 'Red Eyes B. Dragon', 'atk' => 2400, 'type' => Field::$NIGHT],
            ['name' => 'Gearfried the Iron Knight', 'atk' => 1800, 'type' => Field::$NIGHT],
            ['name' => 'Garoozis', 'atk' => 1800, 'type' => Field::$FOREST],
            ['name' => 'Alligator\'s Sword Dragon', 'atk' => 1700, 'type' => Field::$WATER],
            ['name' => 'Axe Raider', 'atk' => 1700, 'type' => Field::$DAY],
            ['name' => 'Tiger Axe', 'atk' => 1300, 'type' => Field::$FOREST],
            ['name' => 'Baby Dragon', 'atk' => 1200, 'type' => Field::$DAY],
        ]);
        return $joey;
    }

    public static function getMaisDeck()
    {
        $mai = new Deck('Mai');
        $mai->addCards([
            ['name' => 'Harpie\'s Pet Dragon', 'atk' => 2000, 'type' => Field::$DAY],
            ['name' => 'Harpie\'s Pet Dragon', 'atk' => 2000, 'type' => Field::$DAY],
            ['name' => 'Harpie Lady Sisters', 'atk' => 1950, 'type' => Field::$NIGHT],
            ['name' => 'Harpie Lady Sisters', 'atk' => 1950, 'type' => Field::$NIGHT],
            ['name' => 'Amazoness Fighter', 'atk' => 1500, 'type' => Field::$FOREST],
            ['name' => 'Amazoness Fighter', 'atk' => 1500, 'type' => Field::$FOREST],
            ['name' => 'Amazoness Chain Master', 'atk' => 1500, 'type' => Field::$WATER],
            ['name' => 'Amazoness Sword Woman', 'atk' => 1500, 'type' => Field::$GRASS],
        ]);
        return $mai;
    }

    public static function getOpponentsDeck()
    {
        $mai = new Deck('Opponents');
        $mai->addCards([
            ['name' => 'Gate Guardian', 'atk' => 3750, 'type' => Field::$NIGHT],
            ['name' => 'Blue-Eyes Toon Dragon', 'atk' => 3000, 'type' => Field::$NIGHT],
            ['name' => 'Great Moth', 'atk' => 2600, 'type' => Field::$GRASS],
            ['name' => 'Fortress Whale', 'atk' => 2350, 'type' => Field::$WATER],
            ['name' => 'Toon Summoned Skull', 'atk' => 2200, 'type' => Field::$FOREST],
            ['name' => 'Manga Ryu-Ran', 'atk' => 2200, 'type' => Field::$DAY],
            ['name' => 'Parrot Dragon', 'atk' => 2000, 'type' => Field::$FOREST],
            ['name' => 'King of Yamimaki', 'atk' => 2000, 'type' => Field::$FOREST],
            ['name' => 'The Legendary Fisherman', 'atk' => 1850, 'type' => Field::$WATER],
            ['name' => 'Relinquished', 'atk' => 1800, 'type' => Field::$NIGHT],
            ['name' => 'Pumpking the King of Ghosts', 'atk' => 1800, 'type' => Field::$GRASS],
            ['name' => 'Kairyu Shin', 'atk' => 1800, 'type' => Field::$WATER],
            ['name' => 'Sword Arm of Dragon', 'atk' => 1750, 'type' => Field::$FOREST],
            ['name' => 'Dragon Zombie', 'atk' => 1600, 'type' => Field::$FOREST],
            ['name' => 'Two Headed King Rex', 'atk' => 1600, 'type' => Field::$DAY],
            ['name' => 'Armored Zombie', 'atk' => 1500, 'type' => Field::$NIGHT],
            ['name' => 'Toon Mermaid', 'atk' => 1400, 'type' => Field::$WATER],
            ['name' => 'Thousand Eyes Restrict', 'atk' => 1400, 'type' => Field::$NIGHT],
            ['name' => 'Reaper of the Cards', 'atk' => 1380, 'type' => Field::$NIGHT],
            ['name' => 'Fiend Kraken', 'atk' => 1200, 'type' => Field::$WATER],
            ['name' => 'Dark Rabbit', 'atk' => 1100, 'type' => Field::$NIGHT],
            ['name' => 'Castle of Dark Illusions', 'atk' => 920, 'type' => Field::$NIGHT],
            ['name' => 'Dragon Piper', 'atk' => 200, 'type' => Field::$DAY],
        ]);
        return $mai;
    }

    public static function getDefaultField()
    {
        $field = new Field();

        $field->addNight(8);
        $field->addForest(7);
        $field->addDay(7);
        $field->addWater(6);
        $field->addGrass(6);

        return $field;
    }
}