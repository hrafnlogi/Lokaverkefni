<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('hrafn', 'PagesController@hrafn');
Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');
Route::get('/', function() {
    $Champs = '{"data": [{
"id": 266,
"title": "the Darkin Blade",
"name": "Aatrox",
"key": "Aatrox"
},{
"id": 412,
"title": "the Chain Warden",
"name": "Thresh",
"key": "Thresh"
},{
"id": 23,
"title": "the Barbarian King",
"name": "Tryndamere",
"key": "Tryndamere"
},{
"id": 79,
"title": "the Rabble Rouser",
"name": "Gragas",
"key": "Gragas"
},{
"id": 136,
"title": "The Star Forger",
"name": "Aurelion Sol",
"key": "AurelionSol"
},{
"id": 69,
"title": "the Serpent\'s Embrace",
"name": "Cassiopeia",
"key": "Cassiopeia"
},{
"id": 78,
"title": "Keeper of the Hammer",
"name": "Poppy",
"key": "Poppy"
},{
"id": 13,
"title": "the Rogue Mage",
"name": "Ryze",
"key": "Ryze"
},{
"id": 14,
"title": "The Undead Juggernaut",
"name": "Sion",
"key": "Sion"
},{
"id": 1,
"title": "the Dark Child",
"name": "Annie",
"key": "Annie"
},{
"id": 202,
"title": "the Virtuoso",
"name": "Jhin",
"key": "Jhin"
},{
"id": 111,
"title": "the Titan of the Depths",
"name": "Nautilus",
"key": "Nautilus"
},{
"id": 43,
"title": "the Enlightened One",
"name": "Karma",
"key": "Karma"
},{
"id": 99,
"title": "the Lady of Luminosity",
"name": "Lux",
"key": "Lux"
},{
"id": 103,
"title": "the Nine-Tailed Fox",
"name": "Ahri",
"key": "Ahri"
},{
"id": 2,
"title": "the Berserker",
"name": "Olaf",
"key": "Olaf"
},{
"id": 112,
"title": "the Machine Herald",
"name": "Viktor",
"key": "Viktor"
},{
"id": 27,
"title": "the Mad Chemist",
"name": "Singed",
"key": "Singed"
},{
"id": 86,
"title": "The Might of Demacia",
"name": "Garen",
"key": "Garen"
},{
"id": 34,
"title": "the Cryophoenix",
"name": "Anivia",
"key": "Anivia"
},{
"id": 57,
"title": "the Twisted Treant",
"name": "Maokai",
"key": "Maokai"
},{
"id": 127,
"title": "the Ice Witch",
"name": "Lissandra",
"key": "Lissandra"
},{
"id": 25,
"title": "Fallen Angel",
"name": "Morgana",
"key": "Morgana"
},{
"id": 28,
"title": "the Widowmaker",
"name": "Evelynn",
"key": "Evelynn"
},{
"id": 105,
"title": "the Tidal Trickster",
"name": "Fizz",
"key": "Fizz"
},{
"id": 74,
"title": "the Revered Inventor",
"name": "Heimerdinger",
"key": "Heimerdinger"
},{
"id": 238,
"title": "the Master of Shadows",
"name": "Zed",
"key": "Zed"
},{
"id": 68,
"title": "the Mechanized Menace",
"name": "Rumble",
"key": "Rumble"
},{
"id": 82,
"title": "the Iron Revenant",
"name": "Mordekaiser",
"key": "Mordekaiser"
},{
"id": 37,
"title": "Maven of the Strings",
"name": "Sona",
"key": "Sona"
},{
"id": 55,
"title": "the Sinister Blade",
"name": "Katarina",
"key": "Katarina"
},{
"id": 96,
"title": "the Mouth of the Abyss",
"name": "Kog\'Maw",
"key": "KogMaw"
},{
"id": 22,
"title": "the Frost Archer",
"name": "Ashe",
"key": "Ashe"
},{
"id": 117,
"title": "the Fae Sorceress",
"name": "Lulu",
"key": "Lulu"
},{
"id": 30,
"title": "the Deathsinger",
"name": "Karthus",
"key": "Karthus"
},{
"id": 12,
"title": "the Minotaur",
"name": "Alistar",
"key": "Alistar"
},{
"id": 122,
"title": "the Hand of Noxus",
"name": "Darius",
"key": "Darius"
},{
"id": 67,
"title": "the Night Hunter",
"name": "Vayne",
"key": "Vayne"
},{
"id": 77,
"title": "the Spirit Walker",
"name": "Udyr",
"key": "Udyr"
},{
"id": 110,
"title": "the Arrow of Retribution",
"name": "Varus",
"key": "Varus"
},{
"id": 126,
"title": "the Defender of Tomorrow",
"name": "Jayce",
"key": "Jayce"
},{
"id": 89,
"title": "the Radiant Dawn",
"name": "Leona",
"key": "Leona"
},{
"id": 134,
"title": "the Dark Sovereign",
"name": "Syndra",
"key": "Syndra"
},{
"id": 80,
"title": "the Artisan of War",
"name": "Pantheon",
"key": "Pantheon"
},{
"id": 121,
"title": "the Voidreaver",
"name": "Kha\'Zix",
"key": "Khazix"
},{
"id": 92,
"title": "the Exile",
"name": "Riven",
"key": "Riven"
},{
"id": 42,
"title": "the Daring Bombardier",
"name": "Corki",
"key": "Corki"
},{
"id": 51,
"title": "the Sheriff of Piltover",
"name": "Caitlyn",
"key": "Caitlyn"
},{
"id": 268,
"title": "the Emperor of the Sands",
"name": "Azir",
"key": "Azir"
},{
"id": 76,
"title": "the Bestial Huntress",
"name": "Nidalee",
"key": "Nidalee"
},{
"id": 85,
"title": "the Heart of the Tempest",
"name": "Kennen",
"key": "Kennen"
},{
"id": 3,
"title": "the Sentinel\'s Sorrow",
"name": "Galio",
"key": "Galio"
},{
"id": 45,
"title": "the Tiny Master of Evil",
"name": "Veigar",
"key": "Veigar"
},{
"id": 432,
"title": "the Wandering Caretaker",
"name": "Bard",
"key": "Bard"
},{
"id": 150,
"title": "the Missing Link",
"name": "Gnar",
"key": "Gnar"
},{
"id": 90,
"title": "the Prophet of the Void",
"name": "Malzahar",
"key": "Malzahar"
},{
"id": 104,
"title": "the Outlaw",
"name": "Graves",
"key": "Graves"
},{
"id": 254,
"title": "the Piltover Enforcer",
"name": "Vi",
"key": "Vi"
},{
"id": 10,
"title": "The Judicator",
"name": "Kayle",
"key": "Kayle"
},{
"id": 39,
"title": "the Will of the Blades",
"name": "Irelia",
"key": "Irelia"
},{
"id": 64,
"title": "the Blind Monk",
"name": "Lee Sin",
"key": "LeeSin"
},{
"id": 420,
"title": "the Kraken Priestess",
"name": "Illaoi",
"key": "Illaoi"
},{
"id": 60,
"title": "the Spider Queen",
"name": "Elise",
"key": "Elise"
},{
"id": 106,
"title": "the Thunder\'s Roar",
"name": "Volibear",
"key": "Volibear"
},{
"id": 20,
"title": "the Yeti Rider",
"name": "Nunu",
"key": "Nunu"
},{
"id": 4,
"title": "the Card Master",
"name": "Twisted Fate",
"key": "TwistedFate"
},{
"id": 24,
"title": "Grandmaster at Arms",
"name": "Jax",
"key": "Jax"
},{
"id": 102,
"title": "the Half-Dragon",
"name": "Shyvana",
"key": "Shyvana"
},{
"id": 429,
"title": "the Spear of Vengeance",
"name": "Kalista",
"key": "Kalista"
},{
"id": 36,
"title": "the Madman of Zaun",
"name": "Dr. Mundo",
"key": "DrMundo"
},{
"id": 223,
"title": "the River King",
"name": "Tahm Kench",
"key": "TahmKench"
},{
"id": 131,
"title": "Scorn of the Moon",
"name": "Diana",
"key": "Diana"
},{
"id": 63,
"title": "the Burning Vengeance",
"name": "Brand",
"key": "Brand"
},{
"id": 113,
"title": "the Winter\'s Wrath",
"name": "Sejuani",
"key": "Sejuani"
},{
"id": 8,
"title": "the Crimson Reaper",
"name": "Vladimir",
"key": "Vladimir"
},{
"id": 154,
"title": "the Secret Weapon",
"name": "Zac",
"key": "Zac"
},{
"id": 421,
"title": "the Void Burrower",
"name": "Rek\'Sai",
"key": "RekSai"
},{
"id": 133,
"title": "Demacia\'s Wings",
"name": "Quinn",
"key": "Quinn"
},{
"id": 84,
"title": "the Fist of Shadow",
"name": "Akali",
"key": "Akali"
},{
"id": 18,
"title": "the Yordle Gunner",
"name": "Tristana",
"key": "Tristana"
},{
"id": 120,
"title": "the Shadow of War",
"name": "Hecarim",
"key": "Hecarim"
},{
"id": 15,
"title": "the Battle Mistress",
"name": "Sivir",
"key": "Sivir"
},{
"id": 236,
"title": "the Purifier",
"name": "Lucian",
"key": "Lucian"
},{
"id": 107,
"title": "the Pridestalker",
"name": "Rengar",
"key": "Rengar"
},{
"id": 19,
"title": "the Blood Hunter",
"name": "Warwick",
"key": "Warwick"
},{
"id": 72,
"title": "the Crystal Vanguard",
"name": "Skarner",
"key": "Skarner"
},{
"id": 54,
"title": "Shard of the Monolith",
"name": "Malphite",
"key": "Malphite"
},{
"id": 157,
"title": "the Unforgiven",
"name": "Yasuo",
"key": "Yasuo"
},{
"id": 101,
"title": "the Magus Ascendant",
"name": "Xerath",
"key": "Xerath"
},{
"id": 17,
"title": "the Swift Scout",
"name": "Teemo",
"key": "Teemo"
},{
"id": 58,
"title": "the Butcher of the Sands",
"name": "Renekton",
"key": "Renekton"
},{
"id": 75,
"title": "the Curator of the Sands",
"name": "Nasus",
"key": "Nasus"
},{
"id": 119,
"title": "the Glorious Executioner",
"name": "Draven",
"key": "Draven"
},{
"id": 35,
"title": "the Demon Jester",
"name": "Shaco",
"key": "Shaco"
},{
"id": 50,
"title": "the Master Tactician",
"name": "Swain",
"key": "Swain"
},{
"id": 40,
"title": "the Storm\'s Fury",
"name": "Janna",
"key": "Janna"
},{
"id": 91,
"title": "the Blade\'s Shadow",
"name": "Talon",
"key": "Talon"
},{
"id": 115,
"title": "the Hexplosives Expert",
"name": "Ziggs",
"key": "Ziggs"
},{
"id": 245,
"title": "the Boy Who Shattered Time",
"name": "Ekko",
"key": "Ekko"
},{
"id": 61,
"title": "the Lady of Clockwork",
"name": "Orianna",
"key": "Orianna"
},{
"id": 9,
"title": "the Harbinger of Doom",
"name": "Fiddlesticks",
"key": "FiddleSticks"
},{
"id": 114,
"title": "the Grand Duelist",
"name": "Fiora",
"key": "Fiora"
},{
"id": 31,
"title": "the Terror of the Void",
"name": "Cho\'Gath",
"key": "Chogath"
},{
"id": 33,
"title": "the Armordillo",
"name": "Rammus",
"key": "Rammus"
},{
"id": 7,
"title": "the Deceiver",
"name": "LeBlanc",
"key": "Leblanc"
},{
"id": 16,
"title": "the Starchild",
"name": "Soraka",
"key": "Soraka"
},{
"id": 26,
"title": "the Chronokeeper",
"name": "Zilean",
"key": "Zilean"
},{
"id": 56,
"title": "the Eternal Nightmare",
"name": "Nocturne",
"key": "Nocturne"
},{
"id": 222,
"title": "the Loose Cannon",
"name": "Jinx",
"key": "Jinx"
},{
"id": 83,
"title": "the Gravedigger",
"name": "Yorick",
"key": "Yorick"
},{
"id": 6,
"title": "the Headsman\'s Pride",
"name": "Urgot",
"key": "Urgot"
},{
"id": 203,
"title": "The Eternal Hunters",
"name": "Kindred",
"key": "Kindred"
},{
"id": 21,
"title": "the Bounty Hunter",
"name": "Miss Fortune",
"key": "MissFortune"
},{
"id": 62,
"title": "the Monkey King",
"name": "Wukong",
"key": "MonkeyKing"
},{
"id": 53,
"title": "the Great Steam Golem",
"name": "Blitzcrank",
"key": "Blitzcrank"
},{
"id": 98,
"title": "the Eye of Twilight",
"name": "Shen",
"key": "Shen"
},{
"id": 201,
"title": "the Heart of the Freljord",
"name": "Braum",
"key": "Braum"
},{
"id": 5,
"title": "the Seneschal of Demacia",
"name": "Xin Zhao",
"key": "XinZhao"
},{
"id": 29,
"title": "the Plague Rat",
"name": "Twitch",
"key": "Twitch"
},{
"id": 11,
"title": "the Wuju Bladesman",
"name": "Master Yi",
"key": "MasterYi"
},{
"id": 44,
"title": "the Shield of Valoran",
"name": "Taric",
"key": "Taric"
},{
"id": 32,
"title": "the Sad Mummy",
"name": "Amumu",
"key": "Amumu"
},{
"id": 41,
"title": "the Saltwater Scourge",
"name": "Gangplank",
"key": "Gangplank"
},{
"id": 48,
"title": "the Troll King",
"name": "Trundle",
"key": "Trundle"
},{
"id": 38,
"title": "the Void Walker",
"name": "Kassadin",
"key": "Kassadin"
},{
"id": 161,
"title": "the Eye of the Void",
"name": "Vel\'Koz",
"key": "Velkoz"
},{
"id": 143,
"title": "Rise of the Thorns",
"name": "Zyra",
"key": "Zyra"
},{
"id": 267,
"title": "the Tidecaller",
"name": "Nami",
"key": "Nami"
},{
"id": 59,
"title": "the Exemplar of Demacia",
"name": "Jarvan IV",
"key": "JarvanIV"
},{
"id": 81,
"title": "the Prodigal Explorer",
"name": "Ezreal",
"key": "Ezreal"
}]}';

    return view('welcome')->with('Champs', json_decode($Champs, true));
});
Route::get('champion/', function() {
    $Champs = '{
   "data": {
      "Aatrox": {
         "id": 266,
         "title": "the Darkin Blade",
         "name": "Aatrox",
         "key": "Aatrox",
         "lore": "Aatrox is a legendary warrior, one of only five that remain of an ancient race known as the Darkin. He wields his massive blade with grace and poise, slicing through legions in a style that is hypnotic to behold. With each foe felled, Aatrox\'s seemingly living blade drinks in their blood, empowering him and fueling his brutal, elegant campaign of slaughter.The earliest tale of Aatrox is as old as recorded history. It tells of a war between two great factions remembered only as the Protectorate and the Magelords. Over time, the Magelords won a series of crushing victories, leaving them on the brink of obliterating their sworn enemy forever. On the day of their final confrontation, the Protectorate army found themselves outnumbered, exhausted, and poorly equipped. They braced for inevitable defeat.Just when all hope seemed lost, Aatrox appeared among the ranks of the Protectorate. With but a few words, he urged the soldiers to fight to the last before throwing himself into battle. His presence inspired the desperate warriors. At first, they could only watch in awe as this unknown hero cleaved through their enemies, his body and blade moving in unison as if one being. Soon, the warriors found themselves imbued with a potent thirst for battle. They followed Aatrox into the fray, each fighting with the furious strength of ten until they had won a most unlikely victory.Aatrox vanished after that battle, but the Protectorate army\'s newfound fury did not. Their surprising triumph led to many more until they were able to finally return home victorious. Their countrymen hailed them as heroes, but though they had saved their entire civilization from destruction, darkness lingered in the mind of each warrior. Something within them had changed. Over time, their memories of battle faded, only to be replaced with a grim revelation: their acts of heroism were, in fact, brutal atrocities committed by their own hands.Tales like these appear among the myths of many cultures. If they are all to be believed, Aatrox\'s presence has changed the course of some of the most important wars in history. Though these stories remember him as a savior in dark times, Aatrox\'s true legacy may be a world filled with conflict and strife.\'\'Some fight for honor, some fight for glory. It matters only that you fight.\'\'-- Aatrox"
      },
      "Thresh": {
         "id": 412,
         "title": "the Chain Warden",
         "name": "Thresh",
         "key": "Thresh",
         "lore": "\'\'The mind is a wondrous thing to tear apart.\'\'Sadistic and cunning, Thresh is a restless spirit who prides himself on tormenting mortals and breaking them with slow, excruciating inventiveness. His victims suffer far beyond the point of death, for Thresh wreaks agony upon their souls, imprisoning them in his lantern to torture for all eternity."
      },
      "Tryndamere": {
         "id": 23,
         "title": "the Barbarian King",
         "name": "Tryndamere",
         "key": "Tryndamere",
         "lore": "Fueled by his unbridled fury and rage, Tryndamere cuts his way through the tundra, mastering the art of battle by challenging the Freljord\'s greatest warriors. The wrathful barbarian seeks revenge on the one who decimated his clan and strikes down all those who stand between him and his final retribution.Struggling to survive in the harsh, frostbitten Freljord, the young Tryndamere and his people warred with other tribes over the scarce resources of the land. One such battle changed his life forever. Raiders ambushed Tryndamere\'s clan in the dead of night, and though his warriors were able to push the first wave of attackers back, they weren\'t prepared for the dark figure that next stepped forth. He wielded a cruel, living sword, and inspired an unhinged bloodlust in the invaders with his unearthly magic. Tryndamere\'s tribe was overrun within moments. With no hope of defeating the enigmatic being, Tryndamere threw himself at certain death. The dark figure swatted him aside, mortally wounding the young barbarian.Tryndamere saw death and destruction engulf his home as his life slipped away. No one was left standing - only the screams of the dying remained. Unable to surrender to death, Tryndamere gave in fully to his wrath. His blood boiled and his anger consumed him, banishing his mortality. He staggered to his feet - barely able to take hold of his sword - steeling himself for the decisive confrontation with the shadowy being. But the dark figure did not even lift his blade, and instead gave Tryndamere a knowing smile as he withdrew into the shadows. That was the last time the barbarian ever saw his nemesis.A man robbed of his home and his people, Tryndamere wandered across the Freljord for years, vowing to forge himself into a brutal instrument of revenge. He visited all the tribes in the frozen wastes, besting each of their warriors until there were none left to challenge. In doing so, he mastered the barbarian ways of war and harnessed his anger as a force to be reckoned with. With sword in hand and rage in his heart, he is now on an undying quest for vengeance against the one who destroyed the life he once knew. \'\'Rage is my weapon.\'\' -- Tryndamere"
      },
      "Gragas": {
         "id": 79,
         "title": "the Rabble Rouser",
         "name": "Gragas",
         "key": "Gragas",
         "lore": "The only thing more important to Gragas than fighting is drinking. His unquenchable thirst for stronger ale has led him in search of the most potent and unconventional ingredients to toss in his still. Impulsive and unpredictable, this rowdy carouser loves cracking kegs as much as cracking heads. Thanks to his strange brews and temperamental nature, drinking with Gragas is always a risky proposition.Gragas has an eternal love of good drink, but his massive constitution prevented him from reaching a divine state of intoxication. One night, when he had drained all the kegs and was left wanting, Gragas was struck by a thought rather than the usual barstool: why couldn\'t he brew himself something that would finally get him truly drunk? It was then that he vowed to create the ultimate ale.Gragas\' quest eventually brought him to the Freljord, where the promise of acquiring the purest arctic water for his recipe led him into uncharted glacial wastes. While lost in an unyielding blizzard, Gragas stumbled upon a great howling abyss. There he found it: a flawless shard of ice unlike anything he had ever seen. Not only did this unmelting shard imbue his lager with incredible properties, but it also had a handy side effect - it kept the mixture chilled at the perfect serving temperature.Under the spell of his new concoction, Gragas headed for civilization, eager to share the fermented fruits of his labor. As fate would have it, the first gathering to catch Gragas\' bleary eyes would shape the future of the Freljord. He blundered into a deteriorating negotiation between two tribes discussing an alliance with Ashe. Though Ashe welcomed a break in the tension, the other warriors bristled at the intrusion and hurled insults at the drunken oaf. True to his nature, Gragas replied with a diplomatic headbutt, setting off a brawl matched only in the legends of the Freljord.When the fallen from that great melee finally awoke, Ashe proposed a friendly drink as an alternative to fighting. With their tempers doused in suds, the two tribes, formerly on the brink of war, bonded over a common love of Gragas\' brew. Although strife was averted and Gragas hailed a hero, he still had not achieved his dream of drunken blissfulness. So once more, he set off to wander the tundra in search of ingredients for Runeterra\'s perfect pint.\'\'Now this\'ll put hair on your chest!\'\' -- Gragas"
      },
      "AurelionSol": {
         "id": 136,
         "title": "The Star Forger",
         "name": "Aurelion Sol",
         "key": "AurelionSol",
         "lore": "Aurelion Sol once graced the vast emptiness of the cosmos with celestial wonders of his own devising. Now, he is forced to wield his awesome power at the behest of a space-faring empire that tricked him into servitude. Desiring a return to his star-forging ways, Aurelion Sol will drag the very stars from the sky, if he must, in order to regain his freedom."
      },
      "Cassiopeia": {
         "id": 69,
         "title": "the Serpent\'s Embrace",
         "name": "Cassiopeia",
         "key": "Cassiopeia",
         "lore": "Cassiopeia is a terrifying creature - half woman, half snake - whose slightest glance brings death. The youngest daughter of one of Noxus\' most influential families, she was once a beautiful and cunning temptress capable of manipulating the hardest heart. Transformed by the venom of an ancient Shuriman tomb guardian, she continues to serve Noxian interests as she always has, just in a more... visceral way."
      },
      "Poppy": {
         "id": 78,
         "title": "Keeper of the Hammer",
         "name": "Poppy",
         "key": "Poppy",
         "lore": "\'\'I\'m no hero. Just a yordle with a hammer.\'\'Runeterra has no shortage of valiant champions, but few are as tenacious as Poppy. Bearing a hammer twice the length of her body, this determined yordle has spent untold years searching for the \'\'Hero of Demacia,\'\' a fabled warrior said to be the rightful wielder of her weapon."
      },
      "Ryze": {
         "id": 13,
         "title": "the Rogue Mage",
         "name": "Ryze",
         "key": "Ryze",
         "lore": "There are many on Runeterra who are attracted to the study of magic or, in recent times, the emerging field of techmaturgy. For most, pursuit of such knowledge is formalized in a college or university. The halls of traditional study were never for Ryze, however, who felt a more raw and primal connection to the magic of Runeterra than those who tried to teach him. He struck out on his own as a young man to discover what already called to him. Ryze traveled the world, seeking the wisdom of powerful hermits, witches, and shamans - anyone who had something to share beyond what was taught in the city-states of Valoran. When he had learned all he could from these fonts of wisdom, Ryze turned to seek the lost, forgotten, and forbidden knowledge in the world, delving into mystical worlds where others feared to tread.Ryze\'s tireless searching for magical knowledge led him to an ancient form of spellcraft known as thorn magic. This art required Ryze to tattoo spells on his body, permanently infusing his being with vast arcane power and finally fulfilling his need to bond with the mystical energies of Runeterra. His travels also led him to uncover the giant indestructible scroll he now carries on his back - the purpose of the inscribed spell remains a secret only Ryze knows. He claims it is an abomination - something that he must safeguard from the world. This has piqued the curiosity of many, though no one is sure how to separate the scroll from Ryze, or if it is possible to overcome the rogue mage to do so. Since then, Ryze has joined the League of Legends to study the magical creatures and powerful will-workers that fight there, in order to complete his exploration of mystical Runeterra.\'\'Ryze is no longer just a mage - he has become a creature of magic itself.\'\'-- High Councilor Heywan Relivash"
      },
      "Sion": {
         "id": 14,
         "title": "The Undead Juggernaut",
         "name": "Sion",
         "key": "Sion",
         "lore": "BLOOD.SMELL IT.WANT. ACHING. NEED!CLOSE NOW. THEY COME.NO CHAINS? FREE! KILL!IN REACH. YES! DIE! DIE!Gone. Too quick. No fight. More. I want... more.A voice? Unfamiliar. I see him. The Grand General. My general.He leads. I follow. Marching. To where? I should know. I can\'t remember.It all bleeds together. Does it matter? Noxus conquers. The rest? Trivial. So long...  since I\'ve tasted victory.The war wagon rocks. Rattles. A cramped cage. Pointless ceremony. The waiting. Maddening. Faster, dogs!There. Banners. Demacians and their walls. Cowards. Their gates will shatter. Thoughts of the massacre come easily.Who gave the order to halt? The underlings don\'t answer. No familiar faces. If I do not remember, neither will history.The cage is opened. Finally! No more waiting. WE CHARGE!Slings and arrows? The weapons of children! Their walls will not save them!I can taste their fear. They shrink at every blow as their barricades splinter. SOON!Noxian drums. Demacian screams. Glory isn\'t accolades; glory is hot blood on your hands! This is life!A thousand shattered corpses lie at my feet, and Demacian homes burn all around me. It\'s over too quickly! Just one more...The men stare. There\'s fear in their eyes. If they\'re afraid to look upon victory, I should pluck those craven eyes out. There is no fear in the Grand General\'s eyes, only approval. He is pleased with this conquest.Walking the field with the Grand General, surveying the carnage, I ache for another foe. He is hobbled, a leg wound from the battle? If it pains him, he does not show it. A true Noxian. I do not like his pet, though; it picks over the dead, having earned nothing. His war hounds were more fitting company.Demacia will be within our grasp soon. I can feel it. I am ready to march. The Grand General insists that I rest. How can I rest when my enemies still live?Why do we mill about? The waiting eats at me. I\'m left to my own devices. The bird watches. It\'s unsettling. Were it anyone else\'s, I would crush it.Fatigue sets in. I\'ve never felt so... tired.Boram? Is that you? What are you whispering?Where am I?Captured? Kenneled like some dog. How?There was... the battle, the razing of the fortress, the quiet of the aftermath. Were we ambushed? I can\'t remember.I was wounded. I can feel the ragged gash... but no pain. They thought me dead. Now, I am their prize. Fate is laughing. I will not be caged! They will regret sparing me.Demacian worms! They parrot kind words, but they are ruthless all the same. This place is a dank pit. They bring no food. There is no torture. They do not make a show of me. I am left to rot.I remember my finest hour. I held a king by his throat and felt the final beat of his heart through my tightening grasp. I don\'t remember letting go. Is this your vengeance, Jarvan?I hear the triumphal march. Boots on stone. Faint, through the dungeon walls. The cadence of Noxian drums. I shall be free. Demacian blood will run in the streets!No one came. I heard no struggle. No retreat. Did I imagine it?There is no aching in this stump. I barely noticed the iron boot. It\'s caked in rust.When did I lose my leg?I still smell the blood. Battle. It brings comfort.The hunger gnaws. I have not slept. Time crawls. So tired.How long?So dark. This pit. I remember. Grand General. His whispering. What was it?Not who I think.Fading. Mustn\'t forget.Message. Cut. Remember.\'\'SION – Beware ravens.\'\'FREE ME!BLOOD."
      },
      "Annie": {
         "id": 1,
         "title": "the Dark Child",
         "name": "Annie",
         "key": "Annie",
         "lore": "There have always been those within Noxus who did not agree with the evils perpetrated by the Noxian High Command. The High Command had just put down a coup attempt from the self-proclaimed Crown Prince Raschallion, and a crackdown on any form of dissent against the new government was underway. These political and social outcasts, known as the Gray Order, sought to leave their neighbors in peace as they pursued dark arcane knowledge.The leaders of this outcast society were a married couple: Gregori Hastur, the Gray Warlock, and his wife Amoline, the Shadow Witch. Together they led an exodus of magicians and other intelligentsia from Noxus, resettling their followers beyond the Great Barrier to the northern reaches of the unforgiving Voodoo Lands. Though survival was a challenge at times, the Gray Order\'s colony managed to thrive in a land where so many others would have failed.Years after the exodus, Gregori and Amoline had a child: Annie. Early on, Annie\'s parents knew there was something special about their daughter. At the age of two, Annie miraculously ensorcelled a shadow bear - a ferocious denizen of the petrified forests outside the colony - turning it into her pet. To this day she keeps her bear \'\'Tibbers\'\' by her side, often keeping him spellbound as a stuffed doll to be carried like a child\'s toy. The combination of Annie\'s lineage and the dark magic of her birthplace have given this little girl tremendous arcane power."
      },
      "Jhin": {
         "id": 202,
         "title": "the Virtuoso",
         "name": "Jhin",
         "key": "Jhin",
         "lore": "\'\'Art requires a certain...cruelty.\'\'Jhin is a meticulous criminal psychopath who believes murder is art. Once an Ionian prisoner, but freed by shadowy elements within Ionia\'s ruling council, the serial killer now works as their cabal\'s assassin. Using his gun as his paintbrush, Jhin creates works of artistic brutality, horrifying victims and onlookers. He gains a cruel pleasure from putting on his gruesome theater, making him the best choice to send the most powerful of messages: terror."
      },
      "Nautilus": {
         "id": 111,
         "title": "the Titan of the Depths",
         "name": "Nautilus",
         "key": "Nautilus",
         "lore": "Once, Nautilus was a sailor commissioned by the Institute of War to explore the uncharted reaches of the Guardian\'s Sea. This expedition took him deep into unknown waters where he and his crew found a vast section of black oozing liquid that none of the crew could identify. Though their job was to investigate anything new that they found, no man aboard was willing to brave the murk except Nautilus. Only moments after he donned the hulking diver\'s suit and climbed over the ship\'s rail, something lurking in the muck grabbed hold of him. He clung to the side of the ship, but the thing below pulled him fiercely, rocking the entire ship. The other sailors grew afraid and made a terrible decision. As he stared and pled for help, they wrenched his grip free of the rail. He tumbled into the ink, grabbing the anchor in futile desperation. Dark tendrils enveloped him and he could do nothing but watch as the dimming outline of his ship faded away. Then everything went black.When Nautilus awoke, he was something... different. The great iron suit had become a seamless shell around him, concealing whatever awful truth lay inside. All the details of his memory seemed fuzzy and indistinct but one fact remained clear: he was left here, alone in the sunless depths, to die. In his hands he still clutched the anchor that belonged to the men who had condemned him. Having no other purpose, he took this clue and trudged - too heavy to swim or run - in search of answers. He wandered without direction or sense of passing time in what felt like an eternal dream. By the time he stumbled upon the shores of Bilgewater, he could find no traces of the man he was. No house, no family, no life to which he could return. Terrified sailors who\'d heard his tale directed Nautilus back to the Institute, but the summoners refused to relinquish the names of the others they commissioned. By then Nautilus had learned about the League of Legends and there he saw an opportunity to discover and punish those responsible for the time and life he lost.\'\'When consumed by utter darkness, there is nothing left but forward.\'\'-- Nautilus"
      },
      "Karma": {
         "id": 43,
         "title": "the Enlightened One",
         "name": "Karma",
         "key": "Karma",
         "lore": "Karma is a woman of indomitable will and unbound spiritual power. She is the soul of Ionia made manifest and an inspiring presence on the battlefield, shielding her allies and turning back her foes. A strong leader torn between tradition and revolution, Karma seeks to protect the peace of Ionia - by force if necessary.Karma once lived a tranquil life in a small Ionian village. Led by elder monks, the villagers practiced a tradition of benevolent magic and pacifism. Known for her powerful connection to the spiritual realm and beloved as a just mediator amongst her people, Karma embraced these traditions as an essential aspect of the enlightenment sought by all Ionians. Her inner peace was tested when the armies of Noxus invaded Ionia. While the village\'s elder monks insisted their peaceful ways would spare them from violence, Karma had heard enough tales of Noxian cruelty to openly question the elders\' wisdom. Stern and unmoving, they told her to trust in tradition. When the invaders marched on the village, the elder monks rode out to negotiate a bloodless end to the battle. The Noxian general was offended by their show of weakness and slaughtered the monks himself as he ordered his soldiers to strike the village.As the Noxians advanced, the villagers prepared to accept death, bound to their peaceful vows. But Karma would not accept death and instead saw another way: sacrificing a single life to spare many others. To save her people, she drew upon the power within and summoned the full force of her will. A burst of spirit fire emerged from her body and spiraled towards the Noxian general. The flame took the form of twin dragons, the symbol of Ionia itself. It was the first time Karma had ever used her powers to harm instead of protect, and neither she nor the villagers had ever seen anything like it. When the magic subsided, the general had fallen before her and his soldiers had scattered. The opposing forces surrendered to Karma\'s strength leaving her people, and their traditions, untouched. While the war raged on, Karma became a formidable leader of the Ionian resistance, but the conflict did not end when Noxus\'s armies fled the Ionian shores. Ionia became divided between the resistance fighters who craved vengeance and the monks who demanded a return to spiritual tradition. Karma saw a third path, one that combined the strength Ionia found in war with the peaceful traditions the nation still held dear. She now seeks to return her ravaged land to an enduring peace.\'\'Your spirit is something no one can take from you. Use it wisely.\'\' -- Karma"
      },
      "Lux": {
         "id": 99,
         "title": "the Lady of Luminosity",
         "name": "Lux",
         "key": "Lux",
         "lore": "Born to the prestigious Crownguards, the paragon family of Demacian service, Luxanna was destined for greatness. She grew up as the family\'s only daughter, and she immediately took to the advanced education and lavish parties required of families as high profile as the Crownguards. As Lux matured, it became clear that she was extraordinarily gifted. She could play tricks that made people believe they had seen things that did not actually exist. She could also hide in plain sight. Somehow, she was able to reverse engineer arcane magical spells after seeing them cast only once. She was hailed as a prodigy, drawing the affections of the Demacian government, military, and citizens alike.As one of the youngest women to be tested by the College of Magic, she was discovered to possess a unique command over the powers of light. The young Lux viewed this as a great gift, something for her to embrace and use in the name of good. Realizing her unique skills, the Demacian military recruited and trained her in covert operations. She quickly became renowned for her daring achievements; the most dangerous of which found her deep in the chambers of the Noxian High Command. She extracted valuable inside information about the Noxus-Ionian conflict, earning her great favor with Demacians and Ionians alike. However, reconnaissance and surveillance was not for her. A light of her people, Lux\'s true calling was the League of Legends, where she could follow in her brother\'s footsteps and unleash her gifts as an inspiration for all of Demacia. \'\'Her guiding light makes enemies wary, but they should worry most when the light fades.\'\' - Garen, The Might of Demacia"
      },
      "Ahri": {
         "id": 103,
         "title": "the Nine-Tailed Fox",
         "name": "Ahri",
         "key": "Ahri",
         "lore": "Unlike other foxes that roamed the woods of southern Ionia, Ahri had always felt a strange connection to the magical world around her; a connection that was somehow incomplete. Deep inside, she felt the skin she had been born into was an ill fit for her and dreamt of one day becoming human. Her goal seemed forever out of reach, until she happened upon the wake of a human battle. It was a grisly scene, the land obscured by the forms of wounded and dying soldiers. She felt drawn to one: a robed man encircled by a waning field of magic, his life quickly slipping away. She approached him and something deep inside of her triggered, reaching out to the man in a way she couldn\'t understand. His life essence poured into her, carried on invisible strands of magic. The sensation was intoxicating and overwhelming. As her reverie faded, she was delighted to discover that she had changed. Her sleek white fur had receded and her body was long and lithe - the shape of the humans who lay scattered about her.However, though she appeared human, she knew that in truth the transformation was incomplete. A cunning creature, she adapted herself to the customs of human society and used her profound gift of beauty to attract unsuspecting men. She could consume their life essences when they were under the spell of her seductive charms. Feeding on their desires brought her closer to her dream, but as she took more lives, a strange sense of regret began to well within her. She had reservations about actions which never troubled her as a fox. She realized that she could not overcome the pangs of her evolving morality. In search of a solution, Ahri found the Institute of War, home of the most gifted mages on Runeterra. They offered her a chance to attain her humanity without further harm through service in the League of Legends.\'\'Mercy is a human luxury... and responsibility.\'\'-- Ahri"
      },
      "Olaf": {
         "id": 2,
         "title": "the Berserker",
         "name": "Olaf",
         "key": "Olaf",
         "lore": "Most men would say that death is a thing to be feared; none of those men would be Olaf. The Berserker lives only for the roar of a battle cry and the clash of steel. Spurred on by his hunger for glory and the looming curse of a forgettable death, Olaf throws himself into every fight with reckless abandon. Surrendering to the bloodlust deep within his being, Olaf is only truly alive when grappling with the jaws of death.The coastal peninsula of Lokfar is among the most brutal places in the Freljord. There, rage is the only fire to warm frozen bones, blood is the only liquid that flows freely, and there is no worse fate than to grow old, frail, and forgotten. Olaf was a warrior of Lokfar with no shortage of glories and no hesitation to share them. While boasting one evening with his clansmen over the burning embers of a razed village, one of the elder warriors grew tired of Olaf\'s bluster. The old fighter goaded Olaf to read the omens and see if Olaf\'s fortunes matched his gloating. Emboldened by the challenge, Olaf mocked the aged raider\'s envy and tossed the knuckle bones of a long-dead beast to predict the heights of glory he\'d achieve in death. All mirth left the gathering as the clansmen read the portents: the bones spoke of a long life and a quiet passing.Infuriated, Olaf stormed into the night determined to prove the prediction false by finding and slaughtering Lokfar\'s feared frost serpent. The monster had consumed thousands, man and ship alike, in its long lifetime and to die in battle with it would be a fitting end for any warrior. As Olaf hurled himself into the blackness of its maw, he fell deeper into the blackness of his mind. When the shock of freezing water roused him from the dark, there was only the butchered carcass of the beast afloat beside him. Thwarted but not defeated, Olaf set out to hunt down every legendary creature with claws and fangs, hoping that the next battle would be his last. Each time he charged headlong toward his coveted death, only to be spared by the frenzy that washed over him while on its brink.Olaf concluded that no mere beast could grant him a warrior\'s death. His solution was to take on the most fearsome tribe in the Freljord: the Winter\'s Claw. Sejuani appeared amused by Olaf\'s challenge to her warband, but his audacity would earn him no mercy. She ordered the charge and sent scores of her warriors to overwhelm Olaf. One by one, they fell until he lost himself in the bloodlust once again, effortlessly cutting a path to the leader of the Winter\'s Claw. The clash between Olaf and Sejuani rocked the glaciers with its force, and though he seemed unstoppable, Sejuani battled the berserker to a standstill. As they stood deadlocked, Sejuani\'s glare penetrated Olaf\'s berserker haze in a way no weapon ever could. His frenzy abated long enough for her to make him an offer: Sejuani swore that she would find Olaf his glorious death if he would lend his axe to her campaign of conquest. In that moment, Olaf vowed he would carve his legacy into the Freljord itself.\'\'When you meet your ancestors, tell them Olaf sent you.\'\' -- Olaf"
      },
      "Viktor": {
         "id": 112,
         "title": "the Machine Herald",
         "name": "Viktor",
         "key": "Viktor",
         "lore": "Early in life, Viktor discovered his passion for science and invention, particularly in the field of mechanical automation. He attended Zaun\'s prestigious College of Techmaturgy and led the team that constructed Blitzcrank - a scientific breakthrough that he expected to vault him to the top of his profession. Unfortunately his triumph was usurped by Professor Stanwick, who stole credit for developing Blitzcrank\'s sentience and later used Viktor\'s research to revive Urgot. Viktor\'s appeals for justice fell on deaf ears, and he sank into a deep depression. He withdrew from the College and barricaded himself in his private laboratory, cutting all human ties.  There, in secret, he conceived a project for which nobody else could claim credit. Desiring both to revolutionize his field and to eliminate the jealous human emotions which festered inside him, he engineered parts to replace and improve his own body.When Viktor re-emerged, almost no trace of the original man remained. Not only had he supplanted the majority of his anatomy, but his personality had changed. His previous hope to better society was replaced by an obsession with what he called \'\'the glorious evolution.\'\' He saw himself as the patron and pioneer of Valoran\'s future - a future in which man would renounce his flesh in favor of superior hextech augmentations. Though Viktor\'s initial appeals were met with heavy skepticism, scientists were confounded by the sophistication of his machinery. By integrating his mind with techmaturgical devices, he had been able to drastically accelerate the progress of his research.  His transformation had stripped him of what he perceived as his emotional weaknesses, but there was some lingering residue of resentment against the Professor. Viktor joined the League of Legends to pit his inventions against the greatest opponents Valoran could offer, and to correct any weaknesses or inefficiencies that remained.\'\'In one\'s hand, techmaturgy is a tool. As one\'s hand, it is liberation.\'\'-- Viktor"
      },
      "Singed": {
         "id": 27,
         "title": "the Mad Chemist",
         "name": "Singed",
         "key": "Singed",
         "lore": "Singed descended from a long line of Zaun\'s revered chemists. Even in his youth, his talent for concocting potions far outstripped that of his peers, and he quickly distinguished himself from his less extraordinary chemist compatriots. It came as no surprise to anyone when he was selected for apprenticeship by the infamous Warwick, master apothecary on a lucrative retainer with the Noxian military during their campaign against Ionia. Within Warwick\'s laboratories, Singed toiled without end, rapidly absorbing every detail of his predecessor\'s deadly craft. Singed had little concern for the death and destruction that was the fruit of his labors. By the time the curse of lycanthropy descended to claim his master, Singed was poised and eager to make the transition from workhorse to innovator; he was ready to share his genius by bringing a new brand of suffering to the Ionian front. His zeal for progress was unquenchable, and when suitable test subjects proved to be in short supply, the eager chemist was often thought to turn his volatile mixtures on his own flesh.When the uneasy peace created by the League of Legends settled on the world, Singed journeyed to the one place where he was still able to showcase his beloved craft: the Institute of War. By this time he was barely even a man, his body both ruined and sustained by his ingenious craft. A thousand burns - accidents of shadow and flame - mar his ravaged form, and exposure to such harsh conditions has deadened his nerves, hardened his body, and strengthened his physique, transforming him into a veritable juggernaut. This, combined with a formidable arsenal of deadly concoctions, makes Singed a force to be reckoned with on the Fields of Justice.\'\'My deadliest dose shall bear my patron\'s name!\'\'-- Singed, having just christened the Insanity Potion"
      },
      "Garen": {
         "id": 86,
         "title": "The Might of Demacia",
         "name": "Garen",
         "key": "Garen",
         "lore": "Throughout Valoran, the resolve of Demacia\'s military is alternately celebrated or despised, but always respected. Their \'\'zero tolerance\'\' moral code is strictly upheld by civilians and soldiers alike. In combat, this means Demacian troops may not make excuses, flee, or surrender under any circumstance. These principles are espoused to their forces by unrivaled demagogues who lead by example. Garen, the valiant warrior who bears the title \'\'the Might of Demacia\'\', is the paradigm to which these leaders are compared. Thousands of great heroes have risen and fallen on the bloody battlefields between Demacia and its preeminent rival, Noxus. It was beneath their mighty banners of war that Garen first met steel with Katarina, the Sinister Blade. The infantrymen who beheld this event (and survived) commented that it seemed as though the two were locked in a mortal waltz against a symphony of clashing blades.Garen, the pride of the Demacian military and leader of the Dauntless Vanguard, returned from this battle breathless for the first time in his career, though some speculate that this was due to reasons other than exhaustion. The plausibility of these rumors was bolstered when, in every instance thereafter, Garen seized the opportunity to encounter the Sinister Blade again. A paragon of Demacian ethic, Garen never entertained such allegations, for he knew others couldn\'t understand. Even simply the pursuit of a worthy opponent on the battlefield is, to a true warrior, the reason to rise each morning. The promise of one, particularly so beautifully and diametrically opposed, is the validation of his existence. \'\'The most effective way to kill an opponent is to slice through the man next to him.\'\'-- Garen, on front line strategy"
      },
      "Anivia": {
         "id": 34,
         "title": "the Cryophoenix",
         "name": "Anivia",
         "key": "Anivia",
         "lore": "Anivia is a being of the coldest winter, a mystical embodiment of ice magic, and an ancient protector of the Freljord. She commands all the power and fury of the land itself, calling the snow and bitter wind to defend her home from those who would harm it. A benevolent but mysterious creature, Anivia is eternally bound to keep vigil over the Freljord through life, death, and rebirth.Anivia is as much a part of the Freljord as the never-ending frost. Long before mortals had ever set foot on the land\'s frigid tundra, she had lived countless lifetimes and died as many deaths. The beginnings and ends of her eternal cycle always heralded great change, from the calming of raging storms to the ebb and flow of ice ages. It is said that when the cryophoenix dies, an era ends; and when she is reborn, a new era begins.Though Anivia\'s past lifetimes have faded from her memory, she knows her purpose: she must protect the Freljord at all costs.When she was last reborn, Anivia witnessed the rise of a mighty and united human tribe. She guarded their lands with pride as they prospered, but such unity could not last forever. The great tribe fractured into three, and after that upheaval, Anivia watched the people of the Freljord become embroiled in battle. As she strove to calm the turmoil tearing her home apart, Anivia began to sense a greater threat: an ancient evil growing deep within the earth. To her horror, she felt the pure magic of the ice itself become blackened and corrupt. Like blood in water, darkness crept into the Freljord. With her destiny so tied to the power of the land, Anivia knew if such evil took root in her home, that same darkness would find its way into her heart. She could no longer remain a mere guardian - the cryophoenix had to act.Anivia soon discovered an ally in Ashe, the Frost Archer. Ashe too believed in unification as an end to the Freljord\'s perpetual strife, and Anivia offered the tribal leader her aid. Now, with war on the horizon, Anivia prepares to fight for peace, but she knows the inevitable truth of her destiny. One day, evil will rise from the ice, and she must destroy it - no matter the cost.\'\'I am the fury of the blizzard, the bite of the wind, and the cold of the ice. I am the Freljord.\'\'-- Anivia"
      },
      "Maokai": {
         "id": 57,
         "title": "the Twisted Treant",
         "name": "Maokai",
         "key": "Maokai",
         "lore": "Maokai was once a peaceful nature spirit dwelling in an idyllic forest, but the arrogance of humans brought an end to that life. Now he is a gnarled shadow of his former self, twisted by dark magics that defied the natural order of life and death. Infused with power he never asked for, the mighty treant has become a vengeful force of nature, sundering his enemies with wild magic and iron-hard limbs as he searches Valoran for the means to restore the Shadow Isles to its former glory.Before the Shadow Isles became a land of death, the islands teemed with natural life and beauty. This was never truer than in the isles\' sacred forest: a paradise of thriving trees and countless species, both animal and spirit alike. When the king of the Shadow Isles ordered his sorcerers to crack open the barrier separating life and death, the forest served as a well of power the magi drank deeply from. The sorcerers\' ritual succeeded in corrupting the cycle of life and unleashing forces they could not hope to contain. Vitality seeped from every living thing in the Shadow Isles: great trees withered into gnarled husks, people warped into twisted shades, and forest spirits became hollow wisps. Maokai, the strongest spirit of the sacred forest, watched in horror as his world crumbled and died around him. He fought to mend the wound in the world, but could not halt the destruction wrought by human folly. As the ghastly energies sought to overwhelm the great spirit, he made one last desperate attempt to preserve the life of the land. Maokai inhabited the ancient oak at the heart of the forest\'s spiritual power. There he gathered the essence of the isles into the tree as the corruption of undeath clawed hungrily at anything within reach. Fortified by boundless magic, Maokai could not be consumed entirely, though the spirit was not left unscathed.Maokai, now saturated with the essences of life and death, became fused with the ancient oak and contorted into an abomination. For ages, pain and grief were the only companions the spirit had. His boughs grew heavy as he wept at the desolation of everything he had known and loved, and his roots tore from the earth as he raged at the reckless sorcerers that had ruined his home. But all was not lost. Maokai had preserved the last vital spark remaining in the Shadow Isles, and with it, the hope of returning life to the land.Like moths to a flame, the tormented shades of the Shadow Isles were drawn to the living essence within Maokai. The spirit guarded the seed of life from the relentless undead, but Maokai knew he could not fend them off forever. He needed to escape the land of death his home had become, so he cast himself into the sea and trusted in nature to guide him towards a living land. There he hoped to find the means to cast out the forces of undeath and restore life to the Shadow Isles. Maokai --  \'\'To defy the natural order has consequences.\'\'"
      },
      "Lissandra": {
         "id": 127,
         "title": "the Ice Witch",
         "name": "Lissandra",
         "key": "Lissandra",
         "lore": "Lissandra\'s magic twists the pure power of ice into something dark and terrible. With the force of her black ice, she does more than freeze - she impales and crushes those who oppose her. To the terrified denizens of the north, she is known only as \'\'The Ice Witch.\'\' The truth is much more sinister: Lissandra is a corruptor of nature who plots to unleash an ice age on the world.Centuries ago, Lissandra betrayed her tribe to evil creatures, known as the Frozen Watchers, in return for power. That was the last day that warm blood ran through her veins. With her corrupted tribesmen and the strength of the Watchers, she swept across the land like a terrible blizzard. As her empire spread, the world grew colder and ice choked the land. When the Watchers were defeated by ancient heroes, Lissandra did not lose faith and swore to prepare the world for their return.Lissandra worked to purge all knowledge of the Watchers from the world. Using magic to take human form, she masqueraded as numerous seers and elders. Over the course of generations, she rewrote the stories of the Freljord, and so the history of its people changed. Today the fragmented retellings of the Watchers are seen as children\'s tales. But this deception wasn\'t enough - Lissandra also needed an army.She set her sights on the noble Frostguard tribe. Lissandra knew corrupting the Frostguard would take centuries, and so she launched her greatest deception. She murdered and stole the identity of the Frostguard leader. Then she slowly began to warp the tribe\'s proud traditions. When her human form grew old, she faked her own death and then murdered her successor to steal her identity. With each generation, the Frostguard grew more insular, cruel and twisted. Today, the world still sees them as a noble and peaceful tribe that guards against evil creatures like the Ice Witch. In truth, they now serve the witch and long for the glorious return of the Watchers.Lissandra knows that on that day nations will fall and the world will be reborn in ice.\'\'Close your eyes and let the cold take you.\'\' -- Lissandra"
      },
      "Morgana": {
         "id": 25,
         "title": "Fallen Angel",
         "name": "Morgana",
         "key": "Morgana",
         "lore": "There is a world far away populated by graceful and beautiful winged beings gifted with immortality, where an ancient conflict still rages. Like so many conflicts, this war split families. One side proclaimed themselves as beings of perfect order and justice, fighting to unite the world under their law and strong central governance. Those that fought against them saw their kin as tyrants, creatures incapable of seeing the larger view, who would sacrifice individuality and freedom for the illusion of efficiency and safety. Morgana was one who fought against what she perceived as the tyranny of her kind, and for that she was branded \'\'fallen.\'\' Morgana was not innocent, having plumbed forgotten ways to gather forbidden might to become a powerful mistress of the black arts. This goal was driven by her obsession to defeat the general of the opposition\'s army - her sister, Kayle.While the two were in fact birth-sisters, Kayle struck the first blow by disowning any filial connection when Morgana refused to join her cause. Eventually, Morgana grew in power enough to not only reach, but challenge Kayle. As the time approached when the two would meet in what could be their final conflict, Morgana was suddenly summoned to Valoran. At first, Morgana made a deal with the League\'s summoners to fight in exchange for greater power. With the advent of Kayle into the League, Morgana now willingly fights in the League of Legends for the privilege of being able to destroy her sister again, and again, and again. She lies in wait for the day the bonds of the Institute of War no longer hold her, and on that day she plans to destroy Kayle once and for all and return home a hero.\'\'There is no rest while Kayle\'s brand of tyranny still exists.\'\'-- Morgana"
      },
      "Evelynn": {
         "id": 28,
         "title": "the Widowmaker",
         "name": "Evelynn",
         "key": "Evelynn",
         "lore": "Swift and lethal, Evelynn is one of the most deadly - and expensive - assassins in all of Runeterra. Able to merge with the shadows at will, she patiently stalks her prey, waiting for the right moment to strike. While Evelynn is clearly not entirely human, and her heritage remains unclear, it is believed that she hails from the Shadow Isles - though her link with that tortured realm remains shrouded in mystery."
      },
      "Fizz": {
         "id": 105,
         "title": "the Tidal Trickster",
         "name": "Fizz",
         "key": "Fizz",
         "lore": "Centuries ago, an ancient water-dwelling race built a hidden city beneath a mountain in the sea. Though these creatures had their enemies, the city was an impenetrable fortress, and, in the safety it provided, they grew complacent. Fizz, however, harbored a curious spirit that could not be satisfied living so cushioned a life. Unable to resist the allure of danger, Fizz had a habit of sneaking out of the city to look for trouble. In his many adventures he grew to be a powerful fighter with a keen resourcefulness that let him skirt danger with clever ease. One day, Fizz returned to find the city abandoned: his people had vanished, leaving Fizz without a clue to explain their disappearance. With nothing left in the city to keep him, Fizz salvaged an enchanted trident from the ruins and set out alone.For years, Fizz wandered the ocean, using the skills he\'d learned during his adventures as a young boy to survive. Finally, Fizz discovered the port of Bilgewater. He was fascinated with the existence of life above the water and could not resist exploring the island. In his endless curiosity, Fizz inadverently meddled in the affairs of the humans who lived there and his presence did not go unnoticed. His mischief angered many residents who eventually sought to capture or kill him. Fizz found himself cornered, and he prepared to return to the sea despite the fondness he\'d come to hold for Bilgewater. As he stood at the docks, a massive dragon-shark attacked the port. Fizz defeated the beast, using his resourcefulness and knowledge of the creatures\' weaknesses to his advantage. Having earned the gratitude and respect of the humans, Fizz decided to stay in Bilgewater. He joined the League of Legends to further serve his new home.\'\'Fizz makes even the saltiest sailors of Bilgewater look like drunken landlubbers in a fight. Good thing he\'s on our side.\'\'-- Miss Fortune, the Bounty Hunter"
      },
      "Heimerdinger": {
         "id": 74,
         "title": "the Revered Inventor",
         "name": "Heimerdinger",
         "key": "Heimerdinger",
         "lore": "From the Journal of Professor Cecil B. Heimerdinger10.1409:15Current meteorological conditions in Bandle City seem optimal. Atmospheric pressure is ideal for today\'s experiments!Running a fifth trial for my Tridyminiumobulator this afternoon. Some fine tuning is required; singed my mustache. Need to adjust the energy throughput.16:00Tridyminiumobulator is still not maintaining intended proper energy efficiency! Necessary to run more numbers. In the meantime, I have found something else that\'s very intriguing.While returning home after today\'s tests, I passed a gaggle of young yordles throwing a spherical projectile at each other. It\'s a simple enough concept: throw the object at someone, catch it, throw it at another yordle, repeat. But yordle miscalculations result in several errors! They throw with inconsistent accuracy and force, and the \'\'ball\'\' (as they refer to it) is frequently dropped... There are many ways for this process to be improved. According to my calculations, and after collecting data from the participants, if the pitching was consistent in both speed and arc there would be a 44.57% increase to fun! I need to ponder this for the evening.10.1505:20Eureka! I\'ve devised a solution.I\'ve invented an automated ball pitcher. Current name: H-28G. It employs a consistent speed and trajectory, ensuring that the recipient will always be able to catch the ball. It redirects itself to the nearest yordle (if there is more than one in the vicinity) ensuring everyone has a turn. I\'ll take it to the young yordles today and demonstrate my invention.Also: spilled toxic acid on my shoes this morning. Bothersome.10:30Tested the automated pitcher today. It did not go as planned. The young ones were excited enough about my invention, but, when the machine was turned on, it was far too powerful! Even at its lowest setting it completely knocked a yordle off his feet. Clearly, I overestimated the velocity behind their throws... I\'ll return soon to make adjustments.But my priority, for now, is the Tridyminiumobulator; I must fix its complications before lunch. Once it\'s in good shape, I\'ll need to test it somewhere else. Bandle City is proving insufficient for field research.10.1615:55Apparently, there\'s a giant in town. A highly annoying anomaly. The noise outside is disturbing my research!Must check fish tank today. They\'ve been strangely quiet...10.1710:40I have heard that many yordles have been injured due to the giant-related disturbance. If this doesn\'t stop soon, intervention will be necessary! I hope H-28G is still intact. I would lose a lot of time if it has to be rebuilt.16:30Everything is quiet again. It seems that the giant came to his senses and ran off. I need to gather H-28G tomorrow, once I\'ve finished with more pressing matters. I\'ve almost perfected the Tridyminiumobulator!10.1808:30Today has been quite eventful already. I was surprised by a knock at my door. It seemed like the entire city was standing in front of my house. Normally, when a crowd has gathered, it\'s because they have some petty grievance about my work. But this time, they were celebrating!Astonishingly, it seems one of the young yordles took advantage of the H-28G prototype I had left behind amidst the giant tomfoolery. He proved to be innovative, and repurposed the invention into a makeshift turret. It\'s powerful enough to scare off a giant - imagine that! What an ingenious little fellow.I wish I could employ his like-minded encephalon in the near future - I have big plans and his assistance could be valuable - but he\'d have to leave Bandle City. The scope of my plans necessitates a more expansive testing ground.Runeterra should suffice!"
      },
      "Zed": {
         "id": 238,
         "title": "the Master of Shadows",
         "name": "Zed",
         "key": "Zed",
         "lore": "Zed is the first ninja in 200 years to unlock the ancient, forbidden ways. He defied his clan and master, casting off the balance and discipline that had shackled him all his life. Zed now offers power to those who embrace knowledge of the shadows, and slays those who cling to ignorance.An orphan, Zed was taken in and trained by a great ninja master. Only one other student appeared to be Zed\'s equal - the master\'s son, Shen. It seemed Zed could never win the favor of the master, as every match between the rivals ended in a draw. Frustrated and jealous, he sought an advantage. The young ninja ventured into a sealed part of the clan\'s temple, where he found an ornate, foreboding box. Sensing the dark knowledge within, Zed knew he should not open it, but he peered inside nonetheless. In an instant, shadows touched his mind, revealing techniques that had long been hidden. Now armed with a secret edge, he challenged Shen, and this time he defeated the master\'s son. He expected praise and recognition in his moment of victory, but somehow the master knew Zed had used forbidden ways, and banished him.Humiliated, the young ninja wandered for years. His bitterness turned to ambition, and he began to train others in the style of the shadows. As his power grew, so did his circle of followers, but he knew that without the box, his technique would never be perfect. One day, Zed looked at his followers and saw that his students were now an army. He led them back to the temple to claim his prize. At the gates, he was surprised to find the old master waiting, receiving Zed and his disciples as if they were welcome guests. The old man laid his sword at Zed\'s feet, declaring that he had failed Zed as his master. By banishing his former student, the master had doomed Zed to the shadows, instead of leading him to the balanced path. The old man implored Zed to enter the temple, destroy the box, and lead his followers to balance. The dark ninja followed the master inside. Moments later, the assembled ninjas heard Zed cry out in pain. Mysteriously, he emerged unscathed, and threw the severed head of the master at Shen\'s feet. Screaming in rage, Zed commanded his followers to slaughter the master\'s students and seize the box.That day, the old ninja order fell. Though many students died, some escaped thanks to Shen\'s heroic efforts. Now the temple is a dark training ground for the Order of the Shadow. Zed rules as the Order\'s master, and his edict is simple: perfect one\'s technique, and kill all ninjas who refuse to embrace the shadows.\'\'Balance is a lie - we are the true ninjas.\'\'-- Zed"
      },
      "Rumble": {
         "id": 68,
         "title": "the Mechanized Menace",
         "name": "Rumble",
         "key": "Rumble",
         "lore": "\'\'Ugh, it\'s gonna take forever to scrape your face off my suit!\'\'Even amongst yordles, Rumble was always the runt of the litter. As such, he was used to being bullied. In order to survive, he had to be scrappier and more resourceful than his peers. He developed a quick temper and a reputation for getting even, no matter who crossed him. This made him something of a loner, but he didn\'t mind. He liked to tinker, preferring the company of gadgets, and he could usually be found rummaging through the junkyard.Rumble showed great potential as a mechanic, and his teachers recommended him for enrollment at the Yordle Academy of Science and Progress in Piltover. He may very well have become one of Heimerdinger\'s esteemed proteges, but Rumble refused to go. He believed that Heimerdinger and his associates were \'\'sellouts,\'\' trading superior yordle technology to humans for nothing more than a pat on the head while yordles remained the butt of their jokes.When a group of human graduates from the Yordle Academy sailed to Bandle City to visit the place where their mentor was born and raised, Rumble couldn\'t resist the temptation to see them face-to-face (so to speak). He only intended to get a good look at the humans, but four hours and several choice words later, he returned home bruised and bloodied with an earful about how he was an embarrassment to \'\'enlightened\'\' yordles like Heimerdinger.The next morning, Rumble left Bandle City without a word, and wasn\'t seen again for months. When he returned, he was at the helm of a clanking, mechanized monstrosity. He marched it to the center of town amidst dumbfounded onlookers and there announced that he would show the world what yordle-tech was really capable of achieving."
      },
      "Mordekaiser": {
         "id": 82,
         "title": "the Iron Revenant",
         "name": "Mordekaiser",
         "key": "Mordekaiser",
         "lore": "\'\'All things must die... and yet I live on.\'\'The baleful revenant Mordekaiser is among the most terrifying and hateful spirits haunting the Shadow Isles. He has existed for countless centuries, shielded from true death by necromantic sorcery and the force of his own dark will. Those who dare face Mordekaiser in battle risk a horrific curse: he enslaves his victims\' souls to become instruments of destruction."
      },
      "Sona": {
         "id": 37,
         "title": "Maven of the Strings",
         "name": "Sona",
         "key": "Sona",
         "lore": "Sona has no memories of her true parents. As an infant, she was found abandoned on the doorstep of an Ionian adoption house, nestled atop an ancient instrument in an exquisite case of unknown origins. She was an unusually well-behaved child, always quiet and content. Her caretakers were sure she would find a home quickly, but it soon became apparent that what they mistook for uncommon geniality was actually an inability to speak or to produce any sound whatsoever. Sona remained at the adoption house until her teens, watching in hopeless silence as prospective adopters passed her by. During this time, the caretakers sold her unusual instrument to anxious collectors, hoping to build her a trust. For a myriad of bizarre and unexpected reasons, however, it would be returned, or simply appear again outside the house.When a wealthy Demacian woman named Lestara Buvelle learned of the instrument, she immediately embarked to Ionia. When the caretakers showcased the instrument for her, she rose wordlessly and explored the house, stopping outside Sona\'s room. Without hesitation, Lestara adopted her and left a generous donation for the instrument. With Lestara\'s guidance, Sona discovered a deep connection with the instrument which Lestara called an \'etwahl\'. In her hands, it played tones which stilled or quivered the hearts of those around her. Within months, she was headlining with the mysterious etwahl for sold-out audiences. She played as though plucking heartstrings, effortlessly manipulating the emotions of her listeners - all without a single written note. In secret, she discovered a potent and deadly use for her etwahl, using its vibrations to slice objects from a distance. She honed this discipline in private, mastering her gift. When she felt prepared, she went to the only place which could offer her a fitting recital: the League of Legends.\'\'Her melody moves the soul, her silence sunders the body.\'\'-- Jericho Swain, after attending her concert"
      },
      "Katarina": {
         "id": 55,
         "title": "the Sinister Blade",
         "name": "Katarina",
         "key": "Katarina",
         "lore": "Driven by an intense killer instinct, Katarina uses her talents as an assassin for the glory of Noxus, and the continued elevation of her family. While her fervor drives her to ever-greater feats, it can sometimes lead her astray.From childhood, Katarina displayed a natural gift for combat. As the daughter of a prominent Noxian general many paths were open to her, but she rejected them all for the path of the blade. Rigorously trained by the finest assassins in Noxus, her father the best among them, it was not long before Katarina demanded her first assignment. The task they gave her was aggravatingly simple: assassinate a low-ranking Demacian officer. As she set to her work infiltrating the enemy camp, Katarina discovered an opportunity too tantalizing to pass by - the arrival of a Demacian General. Stalking him to his tent, she quietly dispatched his guards and slit his throat. Pleased with her impressive kill, she disappeared into the night. Katarina\'s elation faded the next day when her original objective, the Demacian officer, led his forces to ambush unprepared Noxian soldiers. Though the Noxians fought valiantly, they suffered heavy casualties. Furious at her mistake, Katarina set off to complete her original task. Returning to the camp, she spied her now heavily guarded target and realized a stealthy kill was no longer possible. Drawing her blades, Katarina swore the officer would die, no matter the cost. She leapt into battle, unleashing a whirlwind of steel. One by one blades flashed and guards fell, each strike bringing her one step closer to the officer. A final thrown dagger restored her honor. Bloody and bruised, Katarina barely escaped the Demacian forces, and returned to Noxus a changed woman. The scar she earned that night now serves as a constant reminder that she must never let passion interfere with duty.\'\'Never question my loyalty. You will never know what I endure for it.\'\'-- Katarina"
      },
      "KogMaw": {
         "id": 96,
         "title": "the Mouth of the Abyss",
         "name": "Kog\'Maw",
         "key": "KogMaw",
         "lore": "\'\'If that\'s just hungry, I don\'t want to see angry.\'\'When the prophet Malzahar was reborn in Icathia, he was led there by an ominous voice which thereafter anchored itself to his psyche. From within, this voice bestowed upon him terrible purpose, and though Malzahar was no longer tormented by its call, the voice did not cease its unrelenting summons. This baleful beacon\'s gentle flicker - now fastened to Runeterra - drew forth a putrid beast that ambled across a threshold it did not understand, widening a fissure between the spaces which were never meant to meet. There amongst the haunting ruins of Icathia, Kog\'Maw manifested in Valoran with unsettling curiosity. The spark which led him to Runeterra teased him still, urging him gently towards Malzahar. It also encouraged him to familiarize himself with his new environment, to the stark horror of everything he encountered on his journey.The enchanting colors and aromas of Runeterra intoxicated Kog\'Maw, and he explored the fruits of the strange world the only way he knew how: by devouring them. At first he sampled only the wild flora and fauna he happened across. As he traversed the parched Tempest Flats, however, he came upon a tribe of nomads. Seemingly unhampered by conventional rules of physics, Kog\'Maw consumed every nomad and any obstacles they put in his way, amounting to many times his own mass and volume. The most composed of his victims may have had time to wonder if this was due to the caustic enzymes which stung the ground as they dripped from his gaping mouth, although such musings were abruptly concluded. Even this feeding frenzy did nothing to satiate Kog\'Maw\'s appetite. His swathe of destruction continues still as he is inexorably drawn towards Malzahar. What happens when he finds him is anyone\'s guess."
      },
      "Ashe": {
         "id": 22,
         "title": "the Frost Archer",
         "name": "Ashe",
         "key": "Ashe",
         "lore": "With each arrow she fires from her ancient ice-enchanted bow, Ashe proves she is a master archer. She chooses each target carefully, waits for the right moment, and then strikes with power and precision. It is with this same vision and focus that she pursues her goal of uniting the tribes of the Freljord and forging them into a mighty nation.As a child, Ashe was always a dreamer. She marveled at the colossal, abandoned fortresses of her ancestors, and spent hours by the fire listening to tales of the Freljord\'s fabled champions. Most of all she loved the legend of Avarosa, the renowned Queen of the once magnificent and united Freljord. Though her mother chided her foolishness, Ashe swore one day she would join the scattered and warlike tribes of the tundra. She knew in her heart that if her people would stand together once more, they would reach greatness again.When Ashe was only fifteen, her mother was killed while commanding the tribe on a brash raid. Suddenly thrust into the role of leader, Ashe made the difficult decision to follow her childhood vision instead of seeking the revenge she craved. She spoke passionately against her tribe\'s demand for retribution, declaring the time had come to put blood feuds aside and broker a lasting peace. Some of her warriors questioned her fitness to rule and soon hatched a treasonous plot to kill the young leader.The assassins struck while Ashe was on a routine hunt, but their plan was interrupted by the warning cry of a great hawk. Ashe looked back to see her tribesmen approaching with swords drawn. Outnumbered and overwhelmed, Ashe ran for hours. She found herself deep in uncharted territory, her weapon lost in the chase. When she heard another cry from the hawk, Ashe put her faith in the strange creature and followed it to a clearing. There she found the bird perched on a pile of stones - an ancient Freljord burial cairn. With a last glance at her, the hawk screeched and flew away. Approaching the mound, Ashe felt her breath turn to frost and an unnatural cold chill her to the bone. The stone at the top of the cairn was marked with a single rune: Avarosa.The assassins burst into the clearing. Ashe lifted the runestone from the cairn to defend herself, revealing something hidden underneath: an ornate bow carved from ice. She grasped it, crying out in pain as frost formed on her fingers, and tore the bow from its resting place. Cold flowed from the enchanted weapon into Ashe, awakening a tremendous power that had always lived within her. Ashe turned to face the assassins. She drew the bow, and by sheer instinct, willed arrows of pure ice to form from the cold, crisp air. With a single frozen volley, she ended the insurrection. Carefully replacing the cairn stone, she gave thanks to Avarosa for her gift, and returned home. Ashe\'s tribe immediately recognized the legendary weapon in the archer\'s hand as a blessing from the ancient Freljord queen herself.With Avarosa\'s bow and her vision of peaceful unification, Ashe\'s tribe soon swelled, becoming the largest in the Freljord. Now known as the Avarosan, they stand together with the belief that a united Freljord will once again become a great nation.\'\'One tribe, one people, one Freljord.\'\' -- Ashe"
      },
      "Lulu": {
         "id": 117,
         "title": "the Fae Sorceress",
         "name": "Lulu",
         "key": "Lulu",
         "lore": "Perhaps more than any other champion in the League, Lulu marches to the beat of her own drum. During her youth in Bandle City, she spent most of her time wandering alone in the forest or lost in a daydream. It wasn\'t that she was antisocial; the day-to-day bustle of Bandle City just couldn\'t compete with the vibrant world of her imagination. She saw wonder in places most people overlooked. This was how she found Pix, a fae spirit, pretending to be stuck in a birdhouse. Lulu\'s imagination distinguished her to Pix and he seized the opportunity to lure her into his world. He brought her to the Glade, the enchanted home of the fae, which lay nestled in a clearing in the woods. There the rigid properties of the outside world - things like size and color - changed as frequently and whimsically as the direction of the wind. Lulu felt at home in the Glade and she lingered there with Pix, fascinated by this secret place.She quickly lost track of time. Her life in the Glade was comfortable and natural. She and Pix played fae games together, the sorts of games that she had been told were \'\'make believe\'\'... and she got exceedingly good at them. It caught her by surprise when she suddenly remembered that she had left a life behind in Bandle City. The Glade had a way of making everything outside seem distant and surreal. Lulu decided to revisit her former home, to share some of the lovely things she\'d learned, but when she and Pix returned the world had changed. Time, she discovered, was another property that behaved differently in the Glade, and centuries had passed while she was away. Lulu sought to reconnect to the residents of the outside world but her attempts had unfortunate results. She led all the children off to play hide and seek, temporarily changing them into flowers and animals to spice up the game, but their parents didn\'t appreciate her efforts. When the yordles insisted that she leave their land, she turned to a vibrant magical place where those with unusual gifts were not just accepted but adored: the League of Legends.\'\'The best path between two points is upside-down, between, then inside-out and round again.\'\'-- Lulu"
      },
      "Karthus": {
         "id": 30,
         "title": "the Deathsinger",
         "name": "Karthus",
         "key": "Karthus",
         "lore": "\'\'Death is not the end of the journey, it is just the beginning...\'\'The harbinger of oblivion, Karthus is an undying spirit whose haunting songs are a prelude to the horror of his nightmarish appearance. The living fear the eternity of undeath, but Karthus sees only beauty and purity in its embrace, a perfect union of life and death. When Karthus emerges from the Shadow Isles, it is to bring the joy of death to mortals as an apostle of the unliving."
      },
      "Alistar": {
         "id": 12,
         "title": "the Minotaur",
         "name": "Alistar",
         "key": "Alistar",
         "lore": "As the mightiest warrior to ever emerge from the Minotaur tribes of the Great Barrier, Alistar defended his tribe from Valoran\'s many dangers; that is, until the coming of the Noxian army. Alistar was lured from his village by the machinations of Keiran Darkwill, General Boram Darkwill\'s youngest son and commander of the Noxian expeditionary force. When Alistar returned, he found his village burning and his family slain. Bellowing with rage, he charged an entire regiment of Noxus\' elite, slaughtering them by the hundreds. Only the intervention of some of Noxus\' most skilled summoners checked Alistar\'s rage. Brought in chains to Noxus, Alistar spent the intervening years as a gladiator in the Fleshing, pitted in endless battle for the entertainment of Noxus\' wealthy leaders.Alistar\'s once noble soul slowly became twisted, and he would have been driven to insanity if not for Ayelia, a young servant girl who befriended him and eventually arranged for his escape. Suddenly free, Alistar joined the newly formed League of Legends to fight as a champion, hoping to one day exact his final vengeance upon Noxus and find the girl who had renewed his hope. Initially unwilling to cater to his celebrity status as a champion, Alistar has since discovered that there is power in fame, and he has become a vocal advocate for those whom the Noxian government treads upon. He also calls to light things that the Noxian military would prefer remain hidden -- something that has made him very unpopular with Noxus\' nobles. His charitable work has earned him several philanthropic awards, which serve as an interesting contrast to the rage and destruction he brings to the League of Legends.If you intend to grab the bull by the horns as a summoner, Alistar might have something to say about that."
      },
      "Darius": {
         "id": 122,
         "title": "the Hand of Noxus",
         "name": "Darius",
         "key": "Darius",
         "lore": "There is no greater symbol of Noxian might than Darius, the nation\'s most feared and battle-hardened warrior. Orphaned at a young age, Darius had to fight to keep himself and his younger brother alive. By the time he joined the military, he had already developed the strength and discipline of a veteran soldier. The first true test of Darius\'s resolve occurred in a crucial battle against Demacia, where the Noxian forces were exhausted and outnumbered. Darius\'s captain called for his troops to retreat, but Darius refused to accept such an act of cowardice. Breaking formation, Darius strode towards the captain and decapitated him with one sweep of his gigantic axe. Both terrified and inspired, the soldiers followed Darius into battle and fought with incredible strength and fervor. After a long and grueling battle, they ultimately emerged victorious.Seizing momentum from this victory, Darius led his now fiercely loyal troops in a devastating campaign against Demacia. After proving his power on the battlefield, Darius turned his gaze homeward. He saw a Noxus riddled with weakness, where greedy, complacent nobles drained the nation\'s strength. Seeking to restore his country to greatness, Darius took it upon himself to reshape the Noxian leadership. He identified weak figureheads and violently removed them from their positions of power. Many in Noxus saw Darius\'s cull as an attempt to seize power, but he had a different plan for the throne. He had been watching the rise of Jericho Swain with keen interest. In Swain, Darius saw a leader with the mind and determination to bring Noxus to glory. Now allied with the Master Tactician, Darius works to unite the nation behind his vision of true Noxian strength.\'\'A united Noxus could control the world - and would deserve to.\'\'-- Darius"
      },
      "Vayne": {
         "id": 67,
         "title": "the Night Hunter",
         "name": "Vayne",
         "key": "Vayne",
         "lore": "The world is not always as civilized as people might think. There are still those who would follow the blackest paths of magic and become corrupted by the darker powers that flow through Runeterra. Shauna Vayne knows this fact well.As a young privileged girl in the heart of Demacia\'s elite, her father tried to convince her of the constabulary\'s ever-vigilant eye. Young and naive, she truly believed that her world was one of perfect safety, until one night, when a twisted witch took interest in her father. The malevolent woman overcame her father\'s conciliar guard, then tortured her family before murdering them. The young Shauna escaped only by hiding herself and then fleeing once the hag had departed, plagued by the screams of her loved ones as she ran. A burning hatred was born in her that day, one that could never be denied.Vayne was able to take care of herself using her father\'s money, and she began to train as soon as an instructor would have her as a student. By the time she was a fully grown woman, she had become a grim warrior. However, the fields of battle were not to be her home.Demacia needed a protector, one who hunted those lost to the darkness. Shauna used her family\'s contacts to become the first Night Hunter, and now her prowess is legendary. It is said that those who practice the black arts quake when they hear that the Night Hunter is on the prowl.Not all shadows are to be feared. At least, if Vayne has her way."
      },
      "Udyr": {
         "id": 77,
         "title": "the Spirit Walker",
         "name": "Udyr",
         "key": "Udyr",
         "lore": "Udyr is more than a man; he is a vessel for the untamed power of four primal animal spirits. When tapping into the spirits\' bestial natures, Udyr can harness their unique strengths: the tiger grants him speed and ferocity, the turtle resilience, the bear might, and the phoenix its eternal flame. With their combined power, Udyr can turn back all those who would attempt to harm the natural order.In the Freljord, there is a unique caste that lives outside the society of those savage lands. They are the custodians of the natural world: the Spirit Walkers. Once a generation, a child is born under a blood red moon, a child said to live between the two worlds of spirit and man. This child is brought to the Spirit Walker to continue the shamanic line. Udyr was such a child, and knew the howl of the tundra wolves even before he learned the language of his ancestors. Through the Spirit Walker, Udyr would one day learn the meaning of the spirits\' calls and tend to the balance of nature. The Spirit Walker often told Udyr he would be tested more than those who had come before him, for the spirits of the Freljord were growing ever more restless, though the reason remained clouded. The answer arrived in the dead of winter, as Udyr and the Spirit Walker were descended upon by a fearsome figure known only through frightened whispers: the Ice Witch. Knowing the boy would fall easy prey to her vile magic, the Spirit Walker shielded the child from her assault at the cost of his own life. Wracked by grief, Udyr howled with fury, and he felt the Freljord itself howl with him. In that moment, the child embraced the spirits\' primal nature and became a beast himself. Coursing with their untamed power, Udyr\'s angry roar shook the mountaintops and brought down a torrential avalanche. Once Udyr had finally clawed his way out of the frost, the Ice Witch was nowhere to be found.For years, the tribes of the north learned to avoid the wildman and his domain. Then one day, Udyr caught the scent of a fearless trespasser. Determined to chase the intruder from his territory, he attacked, only to be deflected with ease. The wildman launched himself at the stranger again and again, only to be effortlessly cast aside each time. Exhausted and defeated, Udyr felt his animosity ebb and croaked a clumsy \'\'who\'\' to the stranger. Lee Sin had come seeking the Spirit Walker\'s guidance and instead found a man who had also lost his way. The monk promised he would right Udyr\'s path and guided him to a monastery said to be protected by four eternal spirits of great power and wisdom. There, Udyr would find harmony.Lee Sin brought Udyr to a land that was a stark contrast to his birthplace. Survival was not the only law that governed the lives of Ionians or creatures of the land. For the first time, Udyr felt at peace with the spirits surrounding him and found comfort in human companionship. His time among the monks taught him to temper his instincts, while his meditations with the ancient temple spirits taught him wisdom. Through them both, Udyr learned to truly embrace his life as the next Spirit Walker.Udyr owed much to the Ionians. It was a debt he was never asked to honor, but one he would ultimately repay many times over. When the armies of Noxus invaded, Udyr did not stand idle as the brutal soldiers oppressed the peaceful Ionians - he had not forgotten how to bare his teeth. Udyr leapt at their armies with all the ferocity of a cornered beast and gave the invaders good reason to fear the wilderness. From the trees, his claws tore the Noxians down in scores; on the river banks, he threw them back like a flood, and in the fields, he consumed them with searing wildfire. Only when the Noxians fled with their tails between their legs did Udyr quell his rage. Peace returned to Ionia, but still Udyr felt something stirring him from his rest. The spirits of the Freljord called out to him, warning of an unnatural evil emerging from the ice. Udyr understood the true threat that the Ice Witch posed to his homeland: she was the herald of a greater darkness that would soon envelop the land. Armed with the potent spirits of the temple, Udyr returned to the Freljord, seeking to defend the natural world from all who would threaten its balance. \'\'Through us, nature\'s will is done.\'\' -- Udyr"
      },
      "Varus": {
         "id": 110,
         "title": "the Arrow of Retribution",
         "name": "Varus",
         "key": "Varus",
         "lore": "\'\'The life of an arrow is fleeting, built of nothing but direction and intent.\'\'For his incomparable skill with the bow and his unquestioned sense of honor, Varus was chosen to be the warden of a sacred Ionian temple. The temple was built to contain an ancient pit of corruption so vile that Ionian Elders feared it could envelop the island in darkness. Varus prided himself on his position, as only the most exceptional Ionian warriors were selected for the role. He lived with his family in a nearby village and led a quiet life of disciplined routine until the day the forces of Noxus invaded Ionia. Their shock troops left nothing but death and desolation in their wake, and the temple lay in their path. Varus was forced to make a decision. He was bound by honor to stay and defend the temple, but without him the village\'s few inhabitants could offer little resistance against the oncoming war machine. Gravely, he chose to fulfill his duty as a warden. The corruption could not be allowed to escape.His arrows sundered the troops who tried to wrest the temple from him that day. However, when he returned to the village, he found that it had been reduced to a smoldering graveyard. Remorse at the sight of his slain family gave way to overwhelming regret, and then to seething hatred. He swore to slaughter every Noxian invader, but first he needed to become stronger. He turned to that which he had sacrificed everything to protect. The pit of corruption would consume him wholly, as a flame devours a wick, but its abominable power would burn within him until he was lost. This was a path from which there could be no return. With grim resolve, he condemned himself to the black flames, feeling malevolent energy bond to his skin...and with it, the promise of ruin. He left, seeking the blood of all Noxians involved with the invasion, a grisly task that eventually led him to the invasion\'s most infamous perpetrators."
      },
      "Jayce": {
         "id": 126,
         "title": "the Defender of Tomorrow",
         "name": "Jayce",
         "key": "Jayce",
         "lore": "Armed with wit, charm, and his signature transforming hammer, Jayce lives to protect his native Piltover. Long before his nation called him a hero, however, he was a promising young inventor. When Piltover commissioned him to study a rare arcane crystal, Jayce discovered it could be used as a vast energy source. Eager to make a name for himself, he began developing a device to harness its power. Word of the crystal\'s potential reached beyond the borders of Piltover. Viktor, the machine-augmented scientist from Zaun, brought Jayce an offer - together, they could use the crystal to advance his \'\'glorious evolution,\'\' a vision of humanity fused with technology. Jayce refused, but the Zaunite had no intention of leaving empty handed. He effortlessly blasted Jayce aside and seized the crystal, incinerating the lab\'s meager security force as he left for Zaun. Jayce implored the Piltover government to respond, but the officials refused to support an act of aggression. He decided to act alone, realizing that if no one struck back, Piltover would never be safe.Jayce returned to the lab to prepare for his attack. After intense research, development, and hands-on testing, he emerged with his crowning achievement - the Mercury Hammer. Weapon in hand, Jayce marched to Zaun and began his one-man assault. Viktor\'s acolytes rushed to stop him, but Jayce smashed them aside, fighting his way into the heart of the lab. Inside, Jayce saw the horrifying brilliance of Viktor\'s creations, all powered by the energy of the arcane crystal. He realized that his only option was to destroy the power source, but Viktor stood in his way. Though their clash left both scientists heavily wounded, Jayce managed a desperate strike at the crystal. He shattered it and escaped as Viktor\'s machines erupted in flames. When he returned home, exhausted but victorious, the citizens of Piltover hailed Jayce as a hero. He reveled in the adoration, but knew that his actions had drawn the attention of dangerous enemies. Now devoted to the defense of his people, Jayce is Piltover\'s best hope for a bright future.\'\'Trust me: if we\'re smart, Piltover can stand strong against any threat. Hey, I\'m living proof.\'\'-- Jayce"
      },
      "Leona": {
         "id": 89,
         "title": "the Radiant Dawn",
         "name": "Leona",
         "key": "Leona",
         "lore": "\'\'If you would shine like a sun, first you must burn like one.\'\'Imbued with the fire of the sun, Leona is a warrior templar of the Solari who defends Mount Targon with her Zenith Blade and Shield of Daybreak. Her skin shimmers with starfire while her eyes burn with the power of the celestial Aspect within her. Armored in gold and bearing a terrible burden of ancient knowledge, Leona brings enlightenment to some, death to others."
      },
      "Syndra": {
         "id": 134,
         "title": "the Dark Sovereign",
         "name": "Syndra",
         "key": "Syndra",
         "lore": "Born with immense magical potential, Syndra loves nothing more than exercising the incredible power at her command. With each passing day, her mastery of magical force grows more potent and devastating. Refusing any notion of balance or restraint, Syndra wants only to retain control of her power, even if it means annihilating the authorities that seek to stop her.Throughout her youth in Ionia, Syndra\'s reckless use of magic terrified the elders of her village. They took her to a remote temple, leaving her in the care of an old mage. To Syndra\'s delight, the mage explained that the temple was a school - a place where she could develop her talents under his guidance. Though she learned much during her time there, Syndra no longer felt her power growing as it had in her youth. Her frustration grew, and she finally confronted her mentor, demanding an explanation. He revealed that he had dampened Syndra\'s magic, hoping to help her learn control and restraint. Accusing him of betrayal, she advanced on the mage, commanding him to lift the spell that was holding her back. He backed away, telling her that if she couldn\'t control herself, he would be forced to nullify Syndra\'s magic completely. Furious, she summoned her power and dashed the old man against the walls. With her mentor dead, Syndra felt the rush of her unbounded potential for the first time in years. Though she had won her freedom, she refused to return to the society that had tried to steal her gift. Instead, Syndra decided to claim her former prison as a stronghold. Pushing the boundaries of her magic, she tore the structure from its foundations and raised it into the sky. Free to delve further into her art, Syndra now aims to grow powerful enough to destroy the weak, foolish leaders of Ionia - and anyone else who would dare to shackle her greatness.\'\'Power belongs to those who can wield it.\'\'-- Syndra"
      },
      "Pantheon": {
         "id": 80,
         "title": "the Artisan of War",
         "name": "Pantheon",
         "key": "Pantheon",
         "lore": "\'\'Bring forth one true champion, or a hundred more like you, and then we shall have a battle that will be spoken of until the end of time.\'\'The peerless warrior known as Pantheon is a nigh-unstoppable paragon of battle. He was born among the Rakkor, a warlike people living on the flanks of Mount Targon, and after climbing the mountain\'s treacherous peak and being deemed worthy, he was chosen to become the earthly incarnation of the celestial Aspect of War. Imbued with inhuman power, he relentlessly seeks the enemies of Targon, leaving only corpses in his wake."
      },
      "Khazix": {
         "id": 121,
         "title": "the Voidreaver",
         "name": "Kha\'Zix",
         "key": "Khazix",
         "lore": "A vicious Void predator, Kha\'Zix infiltrated Valoran to devour the land\'s most promising creatures. With each kill he absorbs his prey\'s strength, evolving to grow more powerful. Kha\'Zix hungers most to conquer and consume Rengar, the one beast he considers his equal.When Kha\'Zix crossed over into this world, he was fragile and ravenous. The animals he first encountered were too small to fuel the rapid evolution he craved. Kha\'Zix focused his hunger on the most dangerous creatures he could find, risking his life to satisfy his need. With each kill he feasted and changed, becoming a stronger, faster predator. Kha\'Zix soon chased his prey with unrestrained aggression, believing he was unstoppable. One day, while savoring a fresh kill, the predator became the prey. From cover a creature pounced in a blur of fangs and steel, tackling him to the ground. It roared in his face slashing and clawing, and Kha\'Zix felt his blood spill for the first time. Screeching in fury, he sliced at the brute\'s eye driving it back. They fought from sunset to sunrise. Finally, near death, they reluctantly separated. As his wounds closed, Kha\'Zix burned with anticipation at the idea of devouring one who could match the Void\'s strength. He resumed his search for powerful prey with renewed vigor. Someday, Kha\'Zix will feast on Rengar.\'\'Kill. Consume. Adapt.\'\'-- Kha\'Zix"
      },
      "Riven": {
         "id": 92,
         "title": "the Exile",
         "name": "Riven",
         "key": "Riven",
         "lore": "\'\'There is a place between war and murder in which our demons lurk.\'\'In Noxus, any citizen may rise to power regardless of race, gender, or social standing - strength is all that matters. It was with committed faith in this ideal that Riven strove to greatness. She showed early potential as a soldier, forcing herself to master the weight of a long sword when she was barely its height. She was ruthless and efficient as a warrior, but her true strength lay in her conviction. She entered battles without any trace of doubt in her mind: no ethical pause, no fear of death.Riven became a leader amongst her peers; a poster child of the Noxian spirit. So exceptional was her passion that the High Command recognized her with a black stone rune sword forged and enchanted with Noxian sorcery. The weapon was heavier than a kite shield and nearly as broad - perfectly suited to her tastes. Soon after, she was deployed to Ionia as part of the Noxian invasion.What began as war quickly became extermination. Noxian soldiers followed the terrifying Zaunite war machines across fields of death. It wasn\'t the glorious combat for which Riven trained. She carried out the orders of her superiors, terminating the remnants of a beaten and fractured enemy with extreme prejudice.As the invasion continued, it became clear that the Ionian society would not be reformed, merely eliminated. During one bitter engagement, Riven\'s unit became surrounded by Ionian forces. They called for support as the enemy closed in around them. What they received instead was a barrage of biochemical terror launched by Singed. Riven watched as around her Ionian and Noxian alike fell victim to an unspeakably gruesome fate. She managed to escape the bombardment, though she could not erase the memory.Counted dead by Noxus, she saw an opportunity to start anew. She shattered her sword, severing ties with the past, and wandered in self-imposed exile - on a quest to seek atonement and a way to save the pure Noxian vision in which she believed."
      },
      "Corki": {
         "id": 42,
         "title": "the Daring Bombardier",
         "name": "Corki",
         "key": "Corki",
         "lore": "When Heimerdinger and his yordle colleagues migrated to Piltover, they embraced science as a way of life, and they immediately made several groundbreaking contributions to the techmaturgical community. What yordles lack in stature, they make up for with industriousness. Corki, the Daring Bombardier, gained his title by test-piloting one of these contributions - the original design for the Reconnaissance Operations Front-Line Copter, an aerial assault vehicle which has become the backbone of the Bandle City Expeditionary Force (BCEF). Together with his squadron - the Screaming Yipsnakes - Corki soars over Valoran, surveying the landscape and conducting aerial acrobatics for the benefit of onlookers below.Corki is the most renowned of the Screaming Yipsnakes for remaining cool under fire and exhibiting bravery to the point of madness. Before the League, he served several tours of duty, often volunteering for missions that would take him behind enemy lines, either gathering intelligence or delivering messages through hot zones. He thrived on danger, and enjoyed nothing more than a good dogfight in the morning. More than just an ace pilot, Corki also made several modifications to his copter, outfitting it with an arsenal of weapons which some speculate were more for show than functionality. When open hostilities ceased as part of the agreement surrounding the formation of the League, Corki was forced into a retirement, which he felt \'\'cut the engines and clipped the wings\'\'. He tried to make do with stunt flying and canyon running, but it was never the same without the refreshing smell of gunpowder streaking through the air around him. When Heimerdinger joined the League of Legends, it was no surprise to see Corki follow soon after, eager to test his mettle against the best the world has to offer.He is Corki - death from above!"
      },
      "Caitlyn": {
         "id": 51,
         "title": "the Sheriff of Piltover",
         "name": "Caitlyn",
         "key": "Caitlyn",
         "lore": "\'\'Go ahead, run. I\'ll give you a five minute head start.\'\'One of the reasons Piltover is known as the City of Progress is because it has an extraordinarily low crime rate. This hasn\'t always been the case; brigands and thieves of all sorts used to find the city-state an ideal mark for plunder, primarily due to the valuable resources it imports to fuel its techmaturgical research. Some even theorize that it would have fallen long ago to the chaos of organized crime if not for Caitlyn, the Sheriff of Piltover.Born the daughter of a wealthy statesman and a pioneering hextech researcher, Caitlyn discovered her natural gift for investigation when, at age 14, her father was assaulted and robbed on his way home. She snuck out of her house that night with her father\'s rifle and tracked down the muggers from the crime scene. At first, her parents did their best to discourage her from such risky hobbies, but she was incorrigible. Wishing to protect her daughter in the only way she knew how, Caitlyn\'s mother began outfitting her with techmaturgical devices tailored to her sleuthing needs.Caitlyn quickly gained notoriety, as she was single-handedly defeating crime in Piltover and had developed into a ravishing beauty as well. She never backed down from a case or a challenge, and she was one of the sharpest shots in the city-state. Her services were soon requested by Demacia to help track down a mysterious outlaw who had begun committing high-profile heists.The bandit, who always left a card with an ornate \'C\' at the scene of the crime, became Caitlyn\'s arch-nemesis. To this day, Caitlyn still searches for this cat burglar, and the chase has led her all across Valoran. As she travels, she seeks to hone her skills and gain the influence necessary to track down the only quarry that has managed to evade her."
      },
      "Azir": {
         "id": 268,
         "title": "the Emperor of the Sands",
         "name": "Azir",
         "key": "Azir",
         "lore": "Once a mortal man blinded by his own hubris, Azir has recently returned as an Ascended being with unmatched dominion over the burning sands. He seeks to restore Shurima to its former glory, but some dispute his right to rule them. Azir\'s power, however, is undeniable."
      },
      "Nidalee": {
         "id": 76,
         "title": "the Bestial Huntress",
         "name": "Nidalee",
         "key": "Nidalee",
         "lore": "There are few dwellers, let alone champions, residing in the blasted and dangerous lands that lie south of the Great Barrier. Much of that world still bears the scars of past Runes Wars, especially the mysterious Kumungu Jungle. There are long-forgotten treasures in these strange places which many risk life and limb to acquire. Nidalee was only a young girl travelling with her treasure-seeking parents when they lost their way in the dense, rainy jungles. The jungle was unforgiving, and she watched her parents suffer agonizing final days as they fell victim to a mysterious and vicious disease.As improbable as it was for a child to survive in the inhospitable jungle by herself, she did just that. Her youthful innocence and a fortunate naivete caused her to appeal to the beasts of that place and she was taken in by a family of cougars and raised as one of their own. She grew and somehow absorbed the raw magic of the dense wilds, evolving beyond both her human physiology and her feline affectation. Now a fierce, nigh-mythical protector,  Nidalee battles  viciously tooth and nail against any who would threaten the vast jungle she calls home."
      },
      "Kennen": {
         "id": 85,
         "title": "the Heart of the Tempest",
         "name": "Kennen",
         "key": "Kennen",
         "lore": "There exists an ancient order originating in the Ionian Isles dedicated to the preservation of balance. Order, chaos, light, darkness -- all things must exist in perfect harmony for such is the way of the universe. This order is known as the Kinkou and it employs a triumvirate of shadow warriors to uphold its causes in the world. Kennen is one of these shadow warriors, entrusted with the sacred duty of Coursing the Sun - tirelessly conveying the justice of the Kinkou.Kennen was born in Bandle City and it was said that in his first living moments he bolted first from the womb and second from the midwife who delivered him. His parents had thought that he would outgrow his boundless energy, but as he matured his energy found no limits and was matched only by his unnerving speed. Despite his astonishing gifts, he remained unnoticed (or at least uncaught, as he was quite the prankster) until, on a dare, he ran straight up the great outer wall of the Placidium. When word of this feat reached Kinkou ears, Kennen was quickly and quietly brought in for an audience. He found that the role of the Heart of the Tempest suited him, frenetically delivering both the word and the punishments of the Kinkou across the realm. He now works with his fellows Akali and Shen to enforce the balance of Valoran. This hallowed pursuit has unsurprisingly led the triumvirate to the Fields of Justice.\'\'The Heart of the Tempest beats eternal...and those beaten remember eternally.\'\'"
      },
      "Galio": {
         "id": 3,
         "title": "the Sentinel\'s Sorrow",
         "name": "Galio",
         "key": "Galio",
         "lore": "\'\'There is no such thing as redemption. Only penance.\'\'Long before the regulation of magic, mages experimented with the creation of artificial life. Now forbidden, instilling golems with reason was once not so uncommon a practice amongst the more expert of craftsmen. One such visionary was the Demacian artificer, Durand. Peerless at crafting sentient beings, Durand\'s constructs served as tireless guardians for the border towns of his beloved city-state, affording them protection from their Noxian neighbors. For his own defense, however, Durand kept his magnum opus: Galio. This mighty construct - forged in the image of a gargoyle - kept him safe on his journeys, allowing him to perform his important work without fear of reprisal from those hostile to his homeland. That is, until dealing with his taxing sentinels finally roused the ire of the Noxian High Command.As Durand crossed the Howling Marsh with his masterwork in tow, he was set upon by Noxian assassins in force. Outnumbered and overwhelmed, Galio looked on in horror as the murderers cut down his charge, executing him swiftly before vanishing back into the mists. Stripped of his reason for being, Galio despaired. For years he remained in solitude, standing vigil over the bones of the master he had failed to protect... a literal monument to his own everlasting shame.Then, one nondescript day, a sad but determined yordle girl carrying a mighty Demacian crown stopped in the shadow of the great statue to rest. Hidden in plain sight from his unsuspecting visitor, Galio studied the forlorn yordle. She looked as though she too shouldered a tremendous burden. As quietly and as stoically as she had arrived, she departed in the direction of Demacia. This encounter lit a spark in Galio\'s eye. Remembering the cause that his master had died defending, Galio arose from his silent purgatory and followed in the wake of this brave creature. He had a new reason to live: to fight for the will of Demacia."
      },
      "Veigar": {
         "id": 45,
         "title": "the Tiny Master of Evil",
         "name": "Veigar",
         "key": "Veigar",
         "lore": "To most, thoughts of yordles do not conjure images to be feared. The easygoing half-pint race, though fierce, is often regarded with some degree of joviality. Their high-pitched voices and naturally cute forms inspire something of a protective instinct in the larger races, or at least bring to mind images of children playing at being adults. Every now and again, however, a yordle turns so bad that even at its small stature it strikes terror into the hearts of others. Veigar is one such twisted yordle. As a master of the magical black arts, as well as a corrupter of cosmic energy, he is one of the most powerful sorcerers on Valoran.As a child, Veigar was a normal yordle with one small exception - he had a deep curiosity for the world beyond Bandle City. The young yordle spent much of his time studying the rest of Valoran, and he jumped at the chance to join a business that traded with other major city-states. Unfortunately for both him and the world, a deal with Noxian trader turned into shady business and went bad; Veigar and his companions were subsequently set up to take the fall. Arrested by the authorities, he was imprisoned within the walls of Noxus for years. Such isolation is very dangerous for yordles - undoubtedly why his cruel jailers did such a thing - and Veigar was slowly driven mad.He eventually escaped, having become a twisted version of his former self. Instead of returning to his people and Bandle City, he sought tutelage from dark wizards across the land. With his demented will focused on one task, he quickly became a dangerous and powerful wizard in his own right. Now he seeks to end all conflict on Valoran by bringing all of the city-states to their knees, regardless of their affiliation. The League of Legends is the perfect tool to help him meet his ends - for now.Who says evil needs to come in a fearsome-looking package?"
      },
      "Bard": {
         "id": 432,
         "title": "the Wandering Caretaker",
         "name": "Bard",
         "key": "Bard",
         "lore": "Bard travels through realms beyond the imagination of mortal beings. Some of Valoran\'s greatest scholars have spent their lives trying to understand the mysteries he embodies. This enigmatic spirit has been given many names throughout the history of Valoran, but titles such as Cosmic Vagabond and Great Caretaker only capture a fleeting aspect of his true purpose. When the unknowable structure of the universe is threatened, Bard steers all existence away from utter annihilation."
      },
      "Gnar": {
         "id": 150,
         "title": "the Missing Link",
         "name": "Gnar",
         "key": "Gnar",
         "lore": "The jungle does not forgive blindness. Every broken branch tells a story.I\'ve hunted every creature this jungle has to offer. I was certain there were no challenges left here, but now there is something new. Each track is the size of a tusklord; its claws like scimitars. It could rend a man in half. Finally, worthy prey.As I stalk my prize through the jungle, I begin to see the damage this thing has wrought. I step into a misshapen circle of splintered trees. These giant wooden sentinels have stood over this land for countless ages, their iron-like hides untouched by the flimsy axes of anyone foolish enough to attempt to cut them down. This thing brushed them aside like they were twigs.How can a creature with this level of strength disappear so easily? And yet, even though it has left this unmistakable trail of destruction, I have been unable to lay my eye upon it. How can it appear like a hurricane then fade into the jungle like the morning mist?I thrill in anticipation of finally standing before this creature. It will make a tremendous trophy.Passing through the clearing, I follow the sound of a stream to get my bearings once more. There I see a small shock of orange fur, crouching, waiting. I spy on it from a distance. A tiny fish splashes out of the stream and the creature scrambles for it, diving gleefully into the rushing water. To my joy, I realize it\'s a yordle. And a hunter, at that!This is a good omen. The beast will be found. Nothing will escape me.The yordle\'s large ears perk up and face towards me. He runs on all fours with a bone boomerang in hand, quickly stopping in front of me. He babbles.I nod in appreciation at the young yordle and venture onwards. I traverse the difficult terrain with ease, trying to pick up any sign of my quarry. As I try to pick up his scent, a distraction. I\'m startled by strange chittering. The yordle followed me. I cannot allow him to disrupt my hunt. I face him and point into the distance. He looks at me quizzically. I need to be more insistent, good omen or no.I rear back and let out a roar, the wind whipping the yordle\'s fur and the ground rumbling beneath us. After a few short seconds, he turns his head and, with what I think could be a smile, he holds up his small boomerang. There can be no further delay. I snatch the weapon out of his hand and expertly throw it into a tree, impaling it high amongst the branches. He turns and scrambles for it, jumping frantically.I barely get ten paces when a roar shakes me to my very spine. The deafening crack of stone and wood echoes all around. Ahead, a giant tree crashes across my path. The bone weapon of the yordle juts out from its trunk.An unearthly growl rises behind me.I\'ve made a terrible mistake."
      },
      "Malzahar": {
         "id": 90,
         "title": "the Prophet of the Void",
         "name": "Malzahar",
         "key": "Malzahar",
         "lore": "Many men have gone mad beneath the glare of the Shurima sun, but it was during the night\'s chilling embrace that Malzahar relinquished his sanity. Malzahar was born a seer, blessed with the gift of prophecy. His talent, though unrefined, promised to be one of Runeterra\'s greatest boons, but destiny plotted him another course; his sensitivity to the roiling tides of fate allowed other, unwelcome things to tug at his subconscious mind. In his dreams, where the veil of separation is thinnest, a sinister thing beckoned.  For some time, Malzahar was able to resist its prodding solicitation, but with each passing night the voice grew louder, or perhaps deeper, until he could withstand the call no more.He ventured into the desert without supplies, drawn by the lure of a specious charm. His destination: a lost civilization to the east, known to ancient texts as Icathia. Few believed such a place ever existed, and those who did were certain that the sands had long since devoured whatever remained. When Malzahar\'s cracked feet finally failed him, he found himself kneeling at the base of a bizarre crumbling obelisk. Beyond it lay the alien geometry of a ruined city and the giant decaying idols of dark and horrific gods. His eyes, seeing what others cannot, and what none should, were filled with the essence of the Void. His once shifting visions of the future were replaced with the immutable promise of Valoran beset by creatures of the Void. Standing alone, but not alone, amidst the echoing dunes, he noticed the familiar voice escape his own lips in a parched rasp, bearing three words whose weight trembled his knees: League of Legends. Now infused with the power of the Void itself, Malzahar set off to the north to seek his fate.\'\'The land may melt, the sea may swell, the sky may fall... but They will come.\'\'-- Malzahar"
      },
      "Graves": {
         "id": 104,
         "title": "the Outlaw",
         "name": "Graves",
         "key": "Graves",
         "lore": "Malcolm Graves is a wanted man in every realm, city-state, and empire he has visited. Tough, strong-willed, and above all, relentless, through his life of crime he has amassed (then invariably lost) a small fortune."
      },
      "Vi": {
         "id": 254,
         "title": "the Piltover Enforcer",
         "name": "Vi",
         "key": "Vi",
         "lore": "To Vi, every problem is just another brick wall to punch through with her gigantic hextech gauntlets. Though she grew up on the wrong side of the law, Vi now uses her criminal know-how to serve Piltover\'s police force. Vi\'s brash attitude, abrasive humor, and blatant refusal to follow orders can often infuriate her by-the-books partner, Caitlyn. But even the sheriff of Piltover cannot deny that Vi is an invaluable asset in the fight against crime.As a child growing up in the lawless outskirts of Piltover, Vi learned to rob and cheat to get by. Stealing and stripping hextech hardware gave her the skills of a master mechanic, while life on the streets taught her self-reliance. When she was six, a ragtag group of criminals took a shine to the young delinquent and brought her into their fold. By the time Vi was eleven, she had become a seasoned accomplice, and she relished the thrill of every heist.Vi\'s attitude changed when a raid on a mining facility went bad. She was forced to decide between fleeing with her crew and trying to save the innocent mine workers from a collapsed tunnel. Vi chose to play the hero. While searching for a way to free the mine workers from the rubble, she discovered a damaged robotic mining rig. Improvising, she wrenched off its huge fists and modified them into makeshift hextech gauntlets. Fitting the heavy weapons to her tiny hands, the young girl flexed her arm and threw a powered punch at the rubble. The force of the blow blasted away the rock. With the workers free to escape, Vi fled the scene.After that job gone wrong, Vi severed her connection to the crew. She returned to a life of solitary crime, but stole only from other criminals. As the years went by, Vi modified and improved her hextech fists, allowing her to bust up heists and snatch loot with ease. Eventually, word of her notoriety reached Caitlyn, the famed Sheriff of Piltover. Rather than seek Vi\'s arrest, Caitlyn offered the criminal a way to pay her debt to society: work for the law in Piltover. Vi laughed. To her, a job that let her beat up crooks without forcing her to run from the cops sounded perfect. She immediately accepted. Caitlyn now struggles to keep Vi in line, and Vi treats Caitlyn\'s orders as mere suggestions, but when they work together, they are feared by all lawbreakers in Piltover.\'\'It\'s a shame. I\'ve got two fists, but you\'ve only got one face.\'\'-- Vi"
      },
      "Kayle": {
         "id": 10,
         "title": "The Judicator",
         "name": "Kayle",
         "key": "Kayle",
         "lore": "In a world far away where an ancient war still rages, Kayle was a great hero - the strongest of an immortal race committed to destroying evil wherever it could be found. For ten thousand years, Kayle fought tirelessly for her people, wielding her flaming sword forged before time itself. She shielded her delicate features beneath her enchanted armor, the sole remaining masterpiece of an extinct race of craftsmen. Though a beautiful, striking creature, Kayle, now as then, avoids showing her face; war has taken a terrible toll upon her spirit. In her quest for victory, she sometimes would try to lift the wicked up from their morass of evil, but more than often she instead purged those she herself deemed beyond redemption. To Kayle, justice can so often be an ugly thing.Ten years ago, Kayle\'s war against evil was nearly won... until her rebellious sister Morgana, a pariah amongst their people, suddenly gained powerful new allies: magicians of a hitherto unknown world called Runeterra. Morgana traded servitude to a number of the summoners in Runeterra\'s League of Legends for powerful new abilities that, if mastered, threatened to bring Kayle and her people to their knees. To save her world, Kayle had no choice but to make a pact with the League herself. She approached the leader of the League, High Counselor Reginald Ashram, with a deal of her own. In exchange for a thousand years of Kayle\'s service, Ashram halted all League interference on Kayle\'s world. With Ashram\'s disappearance five years ago, Kayle has new causes on Valoran: find out who or what caused Ashram to disappear, defeat her sister Morgana upon the Fields of Justice, and bring her own brand of justice to the League of Legends.\'\'In the League of Legends, Justice comes on swift wings.\'\'"
      },
      "Irelia": {
         "id": 39,
         "title": "the Will of the Blades",
         "name": "Irelia",
         "key": "Irelia",
         "lore": "\'\'The sword flourishes, as though painting with blood.\'\'The Ionians have developed some of the most breathtaking and deadly martial arts in all of Runeterra - just one manifestation of their pursuit of enlightenment. The most remarkable blade style to emerge, however, was the unusual byproduct of foreign intervention.Master Lito was a swordsman whose teachings were sought by ruling classes from nearly every city-state. His art was a highly-guarded secret, but it was said that swords would breathe in his grasp. He withered unexpectedly from a mysterious disease which baffled the brightest of Runeterran physicians. When he died, he left behind Zelos and Irelia, his son and daughter, and a truly unique weapon. Zelos became a sergeant in the Ionian military and left to seek assistance from Demacia immediately prior to Noxus\' invasion of Ionia. Irelia, charged with the protection of their home until Zelos returned, was alone when the Noxian forces struck.The Ionians fought admirably, but soon Ionian blood stained the land beneath the prints of foreign boots. At the Great Stand of the Placidium, Ionians prepared for surrender, but were inspired to maintain their resistance when the young Irelia lifted her father\'s enormous blade and pledged to hold until her brother returned. In the chaos of the ensuing fight, Irelia was cursed with dark Noxian Necromancy.As her life ebbed, Soraka, the Starchild, made a final attempt to anchor her fading soul. Unwilling to relinquish her home, Irelia rose at the brink of death, and her father\'s weapon lifted into the air alongside her. Irelia rushed back to the fore, unfazed by the blade\'s sudden animation. The weapon danced around her effortlessly, cutting down Noxians as they gaped in horror. The decimated invaders were forced to retreat from the Placidium, and Irelia was appointed Ionia\'s Captain of the Guard for her brave defense of her homeland."
      },
      "LeeSin": {
         "id": 64,
         "title": "the Blind Monk",
         "name": "Lee Sin",
         "key": "LeeSin",
         "lore": "As a young teen, Lee Sin was intent on becoming a summoner. His will and dedication were unmatched by any of his peers, and his skill drew the attention of Reginald Ashram, the League\'s High Councilor at the time. While studying at the Arcanum Majoris, Lee Sin became frustrated with instruction paced for the other students. He spent his free time researching the nuances of summoning in hopes of graduating sooner. He made amazing advances in his arcane studies, surpassing all other students. By all indications, he would have become one of the League\'s greatest summoners were it not for one terrible mistake. Too impatient, he attempted to test his ability by summoning a beast from the Plague Jungles. What he summoned instead was a young boy, but not in one piece. He barely had time to look the boy in what was once his face before the jumbled human mass fell lifeless to the floor. A League investigation later revealed that the boy\'s entire village was obliterated by feedback from the ritual.Lee Sin\'s talents were so promising that the League was willing to overlook the incident, but he could never forgive himself. He left the Institute and journeyed to the Shojin Monastery for eternal repentance, swearing never to practice magic again. Years later, hoping to atone for his crime with martyrdom, he set himself ablaze as a protest of the Noxian occupation of Ionia. He remained alive in this state, enduring searing agony for weeks. His actions paved the way for a League match wherein Ionia prevailed, but by the time he was doused, his eyes had been burned completely from their sockets. Hailed as a savior, he was reborn, and his will to act invigorated. He joined the League of Legends to continue his atonement with sweat and blood, a true monk\'s only possessions.\'\'The actions of one may sunder the world, but the efforts of many may rebuild it.\'\'- Lee Sin"
      },
      "Illaoi": {
         "id": 420,
         "title": "the Kraken Priestess",
         "name": "Illaoi",
         "key": "Illaoi",
         "lore": "\'\'I\'m not big on sermons. Broken bones teach better lessons.\'\'Illaoi\'s powerful physique is dwarfed only by her indomitable faith. As the prophet of the Great Kraken, she uses a huge, golden idol to rip her foes\' spirits from their bodies and shatter their perception of reality. All who challenge the \'\'Truth Bearer of Nagakabouros\'\' soon discover Illaoi never battles alone - the god of the Serpent Isles fights by her side."
      },
      "Elise": {
         "id": 60,
         "title": "the Spider Queen",
         "name": "Elise",
         "key": "Elise",
         "lore": "Elise\'s entrancing beauty and grace conceal the pitiless, black heart of a deadly predator. With ruthless cunning, she lures the unsuspecting with promises of favor from the spider god. Having exchanged her humanity to become something far more sinister, Elise sacrifices the innocent to maintain her power and seemingly eternal youth. No one can fathom how many have been caught in her web, slain to feed her insatiable hunger."
      },
      "Volibear": {
         "id": 106,
         "title": "the Thunder\'s Roar",
         "name": "Volibear",
         "key": "Volibear",
         "lore": "The unforgiving northern reaches of the Freljord are home to the Ursine, a fierce and warlike race that has endured the barren tundra for thousands of years. Their leader is a furious adversary who commands the force of lightning to strike fear within his foes: Volibear. Both a warrior and a mystic, Volibear seeks to defend the ancient ways and the warrior spirit of his tribe.Though history recorded their once legendary feats in battle, the Ursine now lived in tranquil seclusion. The warriors were headed by a triumvirate of leaders who maintained a long-lived isolation, avoiding the petty affairs and conflicts of others. As shaman to the three, Volibear was a respected sage known for his insight. It was an era of unprecedented peace, but Volibear felt dread stirring within him. Prosperity was turning the tribe soft and weak, and many had long forgotten the sacred art of war. In time, Volibear felt the fire of their souls would be extinguished. When he revealed his misgivings to the triumvirate, they refused to listen and warned him to know his place.Seeking wisdom, Volibear undertook a perilous climb to the peak of the Ursine\'s sacred mountain, a place forever shrouded in a thundering maelstrom. The eye of the storm was said to bestow portents, and legend held that the tempest would mark the next great chieftain of the tribe. As Volibear ascended the peak, he was struck by an unnatural bolt of lightning. When the shaman awoke, he was possessed by a horrific vision of the Freljord utterly consumed by darkness. Volibear saw an unprepared and complacent Ursine force slaughtered by terrible creatures of ice. In an instant, he knew his race would perish if they did not prepare for war.Volibear rushed down the mountainside to recount what he had seen, but found the path blocked by three Ursine - the triumvirate. Knowing he would end the lasting peace, they refused to heed Volibear\'s warning and demanded his silence, by his word - or his death. Resolute and adamant, Volibear swore that the Ursine\'s very survival depended on his message, and launched into ferocious combat against the three. A terrible clash ensued, and just as Volibear succumbed to his opponents, he called upon the power of the maelstrom. Unleashing raw lightning, he struck the trio down with a thunderous blow. Stunned and astonished, the triumvirate beheld the sign of Ursine leadership: the force of the sacred storm.Recognizing his foretold ascendance, the triumvirate appointed Volibear as the Ursine\'s new leader. His influence was swift and decisive: he roused his tribe from complacency, revived their battle-hardened traditions, and allied with Sejuani, the warrior who would fight with them against the coming evil. With time, the tribe grew lean and fierce, becoming known again as fearsome warriors of legend. Volibear and the Ursine now stand ready for the dark day that looms on the icy horizon.\'\'The Ursine cannot know peace without war.\'\'-- Volibear"
      },
      "Nunu": {
         "id": 20,
         "title": "the Yeti Rider",
         "name": "Nunu",
         "key": "Nunu",
         "lore": "Sometimes bonds of friendship become stronger than even bonds of blood. When those bonds link a fearless boy to a fearsome Yeti, the bond becomes a force to be reckoned with. Given the responsibility of taming a terrifying beast, Nunu forged a friendship where others would have forged chains. Now Nunu and his burly pal Willump are an inseparable pair who combine youthful exuberance and brute strength with the mythical powers of the Yeti to overcome obstacles insurmountable to any ordinary duo.  Nunu had only the vaguest memories of his parents or the time before he was part of the reclusive Frostguard tribe. Never welcome among his caretakers, Nunu\'s wanderlust and compassion often put him at odds with the tribe\'s elders and the boy frequently dreamt of places far beyond the shadow of the Frostguard citadel. Sometimes he would do more than just dream, much to the frustration of his minders. This was never more apparent than when Nunu was apprenticed to the tribe\'s beastmaster and charged with the care of the creatures under his yoke.  The Frostguard held a menagerie of the Freljord\'s wildlife at their beck and call, but unique among their collection was the Yeti: an uncommon creature with mystical qualities and raw physical strength. The beastmaster taught Nunu that it was only a lean diet of plants and regular whippings that kept the vicious beast tame, but the more time Nunu spent caring for the creature, the more he learned that the Yeti was no feral monster. As he saw his new friend Willump growing weaker and sicker, Nunu began to sneak the Yeti scraps of meat, hoping to restore his health. Day by day, Willump grew stronger and not the slightest bit savage - contrary to the beastmaster\'s claims. Nunu had hopes of convincing him that the Yeti posed no danger, but it wasn\'t meant to be. The next time Nunu came to deliver Willump a meal, he found the Yeti\'s cage shattered, with only a crude drawing inside signaling the Yeti\'s farewell. Without hesitation, Nunu rushed into the wilderness in search of his friend. When Nunu finally caught up to Willump, he found the Yeti cornered by the beastmaster alongside a group of Frostguard warriors. Afraid that the men would hurt his friend, Nunu threw himself between the Yeti and the beastmaster\'s lash, but the brutal man would not stay his hand. As the furious beastmaster raised his whip once more, the Yeti swelled up with uncharacteristic fury. Even after so much mistreatment, it wasn\'t concern for himself but for the boy who\'d shown him kindness that finally pushed Willump too far. The Yeti raged and left the man bloodied in the snow. Terrified by Willump\'s fury, the remaining Frostguard warriors fled. Nunu realized there was no going back. He yelled at Willump to run before the men returned to kill him, but the Yeti refused to leave the young boy. Nunu was faced with a hard choice: abandon his sole friend and lead a life of captivity with the Frostguard, or strike out into the harsh wilds and leave behind the only home he knew. Nunu chose the only path that made sense. Leaping onto the back of the mighty Yeti, Nunu joined Willump in his great escape. The pair took their first steps into the wide world from which they had been kept for so long. \'\'Willump and I have a whole world to explore. Don\'t get in our way!\'\' -- Nunu"
      },
      "TwistedFate": {
         "id": 4,
         "title": "the Card Master",
         "name": "Twisted Fate",
         "key": "TwistedFate",
         "lore": "Twisted Fate is an infamous card sharp and swindler who has gambled and charmed his way across much of the known world, earning the enmity and admiration of the rich and foolish alike. He rarely takes things seriously, greeting each day with a mocking smile and an insouciant swagger. In every possible way, Twisted Fate always has an ace up his sleeve."
      },
      "Jax": {
         "id": 24,
         "title": "Grandmaster at Arms",
         "name": "Jax",
         "key": "Jax",
         "lore": "It is seldom the case where a champion is defined by his actions after joining the League of Legends rather than before. Such is the case with Jax, for whom the argument could be made that he is the most prolific tournament fighter currently at the Institute of War. Before joining the League, Jax was an unremarkable soldier-for-hire. For reasons known only to the former leader of the League, High Councilor Reginald Ashram, Jax was put on the top of the list of candidates to receive a League Judgment - the interview process that either accepts or rejects a prospective champion. His Judgment was the quickest in League history, where the Doors of Acceptance glowed and slowly swung open as soon as it began. Jax faced no recorded Observation or Reflection during his Judgment.Jax proved himself to be an immediate terror in the Fields of Justice. The self-proclaimed \'\'Armsmaster of the League\'\' rattled off a streak of consecutive wins that to this day has not been matched. A number of summoners in the League grew concerned that the perceived objectivity of the League of Legends would be questioned by the presence of an unknown fighter who was unbeatable. For this reason, the new leader of the League (following Reginald Ashram\'s disappearance), High Councilor Heyward Relivash, created special restrictions for Jax to fight under. This was something the League had never done before, and something that has never been done since. The burly fighter responded by imposing his own special conditions; as a means of protest, he permitted himself to fight using only a brass lamppost. Neither the League\'s sanctions nor his own has affected his winning ways. The League has since rescinded its sanctions, but Jax has not; he fights and fights well with his trusty brass lamppost.\'\'Be advised - there has been an outbreak of lamppost-shaped bruises in the League of Legends.\'\'-- Gragas"
      },
      "Shyvana": {
         "id": 102,
         "title": "the Half-Dragon",
         "name": "Shyvana",
         "key": "Shyvana",
         "lore": "A half-breed born from the union between dragon and human, Shyvana searched all her life for belonging. Persecution forged her into a brutal warrior, and those who dare stand against Shyvana face the fiery beast lurking just beneath her skin.Dragonkind considered Shyvana\'s impure blood an abomination, and she spent her youth pursued relentlessly by one cruel drake. Constantly on the run, she and her father, an outcast dragon, never knew a lasting home. A brutal reflection of countless battles, Shyvana grew hateful and savage. After years of strife, her father finally fell to the other dragon, but not before gravely wounding his foe. Furious with grief, Shyvana pursued her father\'s murderer as he fled north to recover. There she encountered a group of humans on the trail of the same drake. Though the men looked upon her in fear, their leader approached Shyvana peacefully. He introduced himself as Jarvan IV, the Prince of Demacia, and offered to aid Shyvana in her quest for vengeance. Together they hunted down and confronted the vicious dragon that had slain her father. Shyvana did not expect the men to survive, but in the clash of fire and steel, Jarvan and his men fought with strength she had never believed humans to possess. The ironclad warriors drove their foe into submission, and Shyvana struck the final blow, tearing the beast\'s heart from its body. Inspired by her ferocity, Jarvan offered her a place in the ranks of his elite guard. Shyvana could still see fear in the eyes of his men, but she longed for a true home. Trusting Jarvan\'s word, she accepted his offer and now serves as a Demacian warrior. Though her human allies admire her power, they keep their distance. Shyvana strives to repay the prince\'s kindness with the power of the dragon within, but she cannot help but wonder if the humans are right to fear her.\'\'I have proven my might to dragonkind - what challenge shall humans pose?\'\'-- Shyvana"
      },
      "Kalista": {
         "id": 429,
         "title": "the Spear of Vengeance",
         "name": "Kalista",
         "key": "Kalista",
         "lore": "\'\'When wronged, we seek justice. When hurt, we strike back. When betrayed, the Spear of Vengeance strikes!\'\'A specter of wrath and retribution, Kalista is the undying spirit of vengeance, an armored nightmare summoned from the Shadow Isles to hunt deceivers and traitors. The betrayed may cry out in blood to be avenged, but Kalista only answers those whose cause she deems worthy of her skills. Woe betide those who become the focus of Kalista\'s wrath, for any pact sealed with this grim hunter can only end on the cold fire of her soul-spears."
      },
      "DrMundo": {
         "id": 36,
         "title": "the Madman of Zaun",
         "name": "Dr. Mundo",
         "key": "DrMundo",
         "lore": "\'\'Beware the Madman of Zaun. In his eyes, you are already dead\'\'It is said that the man now known as Dr. Mundo was born without any sort of conscience. Instead, he had an unquenchable desire to inflict pain through experimentation. By the time he was five, most of the pets in the Zaun neighborhood where Mundo grew up had gone missing. By his teenage years, his parents were nowhere to be found. By the time he had legally acquired his license to practice medicine, he had been acquitted of thirty-eight separate charges of murder by the Zaun authorities; the lack of evidence made prosecution impossible.Dr. Mundo has become equal parts serial killer and mad scientist, though no one is entirely sure how his butchery qualifies as science. However, he has made tremendous strides in mapping the pain response in the human brain and body, going so far as being able to suppress it, even in the most excruciating of circumstances. He has also tapped into the primal parts of the brain through chemistry, learning how to enhance aggression and adrenaline, as well as dulling conscience and the survival instinct. In short, Dr. Mundo has spent his life creating the perfect science-enhanced killer, an accomplishment that Noxus noticed. The empire was impressed by his ambition, and recruited his talents to initiate a relationship between the two nations.He continues his experiments to this day, even using himself as an experimental subject, as evidenced by his disfigured appearance and his... unique manner of speaking. There are rumors that the High Command in Noxus has given him free reign to pursue his life\'s work in his spare time."
      },
      "TahmKench": {
         "id": 223,
         "title": "the River King",
         "name": "Tahm Kench",
         "key": "TahmKench",
         "lore": "\'\'The whole world\'s a river, and I\'m its king.\'\'Tahm Kench travels Runeterra\'s waterways, feeding his insatiable appetite with the misery of the unsuspecting. The singularly charming gourmand savors every moment of his victims\' suffering.  A deal with Two-Coats may carry you to wherever you wish, but your journey will most assuredly end in the depths of despair."
      },
      "Diana": {
         "id": 131,
         "title": "Scorn of the Moon",
         "name": "Diana",
         "key": "Diana",
         "lore": "\'\'I am the light coursing in the soul of the moon.\'\'Bearing her crescent moonblade, Diana fights as a warrior of the Lunari, a faith all but quashed in the lands around Mount Targon. Clad in shimmering armor the color of winter snow at night, she is a living embodiment of the silver moon\'s power. Imbued with the essence of an Aspect from beyond Targon\'s towering summit, Diana is no longer wholly human, and struggles to divine her power and purpose in this world."
      },
      "Brand": {
         "id": 63,
         "title": "the Burning Vengeance",
         "name": "Brand",
         "key": "Brand",
         "lore": "In a faraway place known as Lokfar there was a seafaring marauder called Kegan Rodhe. As was his people\'s way, Kegan sailed far and wide with his fellows, stealing treasures from those unlucky enough to catch their attention. To some, he was a monster; to others, just a man. One night, as they sailed through the arctic waters, strange lights danced over the frozen wastes. There was something hypnotic about them; it was something that drew them to it like moths to a flame. Trekking across the frozen waste, they came to a cave covered in ancient runes. The meaning of the runes long lost to them, Kegan led the way inside. There, inside a perfect cage of ice floated a dancing column of flame. There was no way such a thing should be burning, especially not in this place. However, its movement was as hypnotic as a siren\'s song, captivating and seductive. While the others stayed back, Kegan could not help but approach it while holding out his hand...That is the last thing Kegan Rodhe remembers, for now his body belongs to Brand. It is a creature of olden times, perhaps even a casualty of the Rune Wars. It is known in ancient texts as the Burning Vengeance. It is a creature of pure fiery hate that exists for no other reason than to lay waste the world of men and yordles. No one is quite sure how Brand found his way to Valoran, but he began his predations at once. Overcome by Demacian forces, he was given a choice: fight within the confines of the League or die. Naturally, he chose to use his destructive powers in the League, for now...\'\'This place will burn, not by cinder flying or breath of wind, but by the vengeance of my hand.\'\'-- Brand"
      },
      "Sejuani": {
         "id": 113,
         "title": "the Winter\'s Wrath",
         "name": "Sejuani",
         "key": "Sejuani",
         "lore": "Sejuani was weaned on hardship and reared on barbarity. Where others succumbed to the harshness of the Freljord, she was tempered by it until pain became power, hunger an encouragement, and frost an ally in culling the weak. Through her ordeals, she learned that to thrive in the endless winter, one must become just as cold and unforgiving. In Sejuani\'s eyes, her followers either have the mettle to endure or the right to die. Once she has conquered the Freljord, she knows that those who survive will form a nation to be feared.As a child, the leader of the Winter\'s Claw watched her tribe\'s numbers slowly dwindle. Cold and starvation took all but the most resilient. She was the only one of her siblings to survive to her tenth year, leaving Sejuani sure that she too would die in misery. In desperation, she sought spiritual counsel from her tribe\'s mystic. But the seer did not foretell Sejuani\'s death. Instead, she prophesized that Sejuani would one day conquer and unite the divided tribes of the Freljord.Armored with absolute faith in her destiny, Sejuani pushed herself to extremes that would have killed anyone without her will to endure. She walked into blizzards without food or furs and trained while frigid winds raked her flesh. She clashed with the strongest warriors of her tribe, one after another, until her legs gave out beneath her. When she assumed leadership of her tribe, Sejuani commanded her warriors to follow her example. Under her rule, the tribe grew stronger than they had ever been.In the end, it was an offer of peace - rather than an act of war - that began Sejuani\'s campaign of conquest. On the first day of winter, envoys from Ashe\'s tribe approached Sejuani\'s camp bearing a gift of Avarosan grain. Ashe\'s intent was clear: if Sejuani united with her tribe, the Winter\'s Claw would never go hungry again. To Sejuani, the gift was an insult. In Ashe\'s tribe, she saw men and women, slight and soft, who preferred to farm instead of fight. Her contempt for them was absolute.Sejuani gathered her people and set the grain alight. She proclaimed that Ashe\'s offer of charity would bring only weakness. Stripping the envoys of their supplies, Sejuani sent them back with a message: the Winter\'s Claw would prove to the Avarosan that only the strong deserve to survive in the Freljord. As the grain burned behind them, Sejuani rode out with her warband to inflict the first of many painful lessons to come.\'\'I was cut from the ice, shaped in the storms, hardened in the cold.\'\'-- Sejuani"
      },
      "Vladimir": {
         "id": 8,
         "title": "the Crimson Reaper",
         "name": "Vladimir",
         "key": "Vladimir",
         "lore": "There is a temple hidden in the mountains between Noxus and the Tempest Flats, where the secrets of an ancient and terrifying sorcery are kept. The area surrounding the temple is littered with the exsanguinated corpses of those who have mistakenly wandered too close. These served only to pique the curiosity of Vladimir, when - in his youth - he trekked through these mountains during his flight from Noxus. A day earlier, the teenaged Vladimir had brutally murdered two boys his age, for no better reason than to enjoy the intoxicating scarlet bloom that surged forth. He realized immediately that he would never be able to suppress his murderous desires, and if he remained in Noxus, his foul deeds were sure to catch up with him. Without hesitation, he abandoned the city-state, and journeyed south.The trail of bodies led him to a crumbling stone temple. Inside he found an aging monk who appraised him with eyes of pure crimson. Vladimir surprised the monk by returning the wicked gaze with zeal. Recognizing the boy\'s sinister craving, the monk taught Vladimir how to manipulate and control the fluid of life, often practicing on passing travelers. When it came time for Vladimir to learn the final lesson, the monk warned that failure would result in death. Vladimir did not fail, but success bore a grisly surprise. During the ritual, every drop of the monk\'s blood was drawn from his body and fused with Vladimir\'s, imbuing him with his master\'s magical essence, and that of every hemomancer before him. Left alone and suddenly without purpose, Vladimir resolved to return to Noxus, demanding enrollment in the League to prove the supremacy of his craft. When the Noxian High Command observed the gruesome fates which befell the palace guards, they elected to avail themselves of Vladimir\'s unsavory talents.\'\'That which runs through you will run you through.\'\'-- Vladimir"
      },
      "Zac": {
         "id": 154,
         "title": "the Secret Weapon",
         "name": "Zac",
         "key": "Zac",
         "lore": "Zac is the product of a Zaun experiment to manufacture a hexchem-engineered supersoldier - the Zaun Amorphous Combatant. Combining brute strength with limitless flexibility, he is a versatile juggernaut: a creative fighter who bounces over obstacles and pounds his foes into submission. Though he was created inside a weapons laboratory, Zac was rescued and adopted by two loving parents who raised him to be a kind and friendly child. As the years passed, he grew up to be a fierce hero, sworn to protect the ordinary, everyday people of Zaun.Long ago, two Zaun scientists developed an organic substance that could withstand extreme conditions, spontaneously alter its biological structure, and generate tremendous amounts of kinetic force. As the scientists, husband and wife, watched the prototype grow from a spoon-sized droplet to a small blob, they noticed that their creation would respond to their presence. It sprung forward when they called and bounced when they sang. The couple began to see more than an experiment; they saw a small child, filled with affection and joy.After testing the prototype one evening, the scientists placed the blob back in its cage. It slouched and shuddered in the corner, inconsolably sad. At that moment, the couple realized that their beloved creation wished for a free life outside the lab. They were struck by their conscience and could not allow the prototype to be used as a weapon. The husband and wife fled with the young blob, replacing its weapon designation - Zaun Amorphous Combatant - with a proper name: Zac. In a quiet neighborhood far from the cities of Zaun, the scientists raised Zac as their own child.Zac was always different from the other children. None had his powers of strength and flexibility, so the couple taught him to tell right from wrong and to use his gifts responsibly. Thanks to the care and affection of his loving parents, Zac lived a peaceful, happy childhood.That childhood ended when the Zaun laboratory finally found Zac. Unable to replicate the formula used to create the amorphous prototype, the laboratory\'s staff never stopped searching for the scientists and their experiment. When they tracked down the family, they threatened to tear it apart. The staff abducted Zac\'s parents and demanded that the couple assist in his capture and return. Seized by the fear of losing his freedom and his parents, Zac unleashed every ounce of his raw energy and mass for the very first time. He subdued his parents\' captors, sent the laboratory\'s workers fleeing, and brought his loved ones home. From then on, Zac vowed to defend all ordinary lives threatened by extraordinary treachery and wickedness. Originally built to destroy, he now protects the innocent and the helpless.\'\'Even if you don\'t have a spine, you still have to stand up for yourself.\'\' -- Zac"
      },
      "RekSai": {
         "id": 421,
         "title": "the Void Burrower",
         "name": "Rek\'Sai",
         "key": "RekSai",
         "lore": "The largest and fiercest of her species, Rek\'Sai is a merciless predator that tunnels through the earth to ambush and devour her prey. Her insatiable hunger has laid waste to entire regions of the once-great Shuriman empire. Merchants, traders and armed caravans will go hundreds of miles out of their way to avoid these vast areas, though cunning bandits have been known to lure the unwary into her killing grounds. Once Rek\'Sai detects you, your fate is sealed. There is no hope of escape; she is death from below the sand."
      },
      "Quinn": {
         "id": 133,
         "title": "Demacia\'s Wings",
         "name": "Quinn",
         "key": "Quinn",
         "lore": "Quinn and Valor are an elite ranger team. With crossbow and claw, they undertake their nation\'s most dangerous missions deep within enemy territory, from swift reconnaissance to lethal strikes. The pair\'s unbreakable bond is deadly on the battlefield, leaving opponents ravaged and riddled with arrows long before they realize who they\'re fighting: not one, but two Demacian legends.As a young girl, Quinn shared a hunger for adventure with her twin brother. They dreamed of becoming knights, but lived a quiet, humble life in the rural borderlands of Demacia. Together they imagined triumphant battles in faraway lands, seizing glory for their king and slaying foes in the name of Demacian justice. When daydreams alone could no longer satisfy their warriors souls, they embarked on daring wilderness adventures in search of true danger. One such quest turned to tragedy when a terrible accident claimed her brother\'s life. Overcome with grief, Quinn abandoned her dreams of knighthood. On the anniversary of her loss, Quinn gathered the courage to return to the scene of the tragedy. To her surprise, she found a wounded Demacian eagle at the site of her brother\'s death - a rare and beautiful bird long believed extinct. Quinn nursed the fledgling back to health, and as they grew up together, a deep bond formed between the two. She saw the same quality in her newfound friend that had lived within her brother, and so she gave him the name \'\'Valor.\'\' The pair found strength in each other, and together they pursued the dream she had once abandoned. The Demacian army had never seen heroes like Quinn and Valor. Their deadly skills quickly set them apart from their rank-and-file peers, but many still had their doubts. How could a common-born girl, even with such a powerful creature at her side, forego years of military training? Quinn and Valor proved themselves on one critical mission, tracking down a Noxian assassin who had evaded an entire Demacian battalion. When they brought him to justice, they finally earned the admiration and respect of their nation. The two now serve as living, fighting icons of Demacian strength and perseverance. Together, Quinn and Valor will stand against any threat to their beloved home.\'\'Most soldiers only rely on their weapons. Few truly rely on each other.\'\' -- Quinn"
      },
      "Akali": {
         "id": 84,
         "title": "the Fist of Shadow",
         "name": "Akali",
         "key": "Akali",
         "lore": "There exists an ancient order originating in the Ionian Isles dedicated to the preservation of balance. Order, chaos, light, darkness -- all things must exist in perfect harmony for such is the way of the universe. This order is known as the Kinkou and it employs a triumvirate of shadow warriors to uphold its causes in the world. Akali is one of these shadow warriors, entrusted with the sacred duty of Pruning the Tree - eliminating those who threaten the equilibrium of Valoran. A prodigal martial artist, Akali began training with her mother as soon as she could make a fist. Her mother\'s discipline was relentless and unforgiving, but predicated on the fundamental principle: \'\'We do that which must be done.\'\' When the Kinkou inducted her into the order at the age of fourteen, she could slice a dangling chain with a chop of her hand. There was no question - she would succeed her mother as the Fist of Shadow. She has had to do much in this role which others might find morally questionable, but to her it is in service of her mother\'s inviolable doctrine. She now works with her fellows Shen and Kennen to enforce the balance of Valoran. This hallowed pursuit has unsurprisingly led the triumvirate to the Fields of Justice.\'\'The Fist of Shadow strikes from the cover of death itself. Do not impede the balance.\'\'"
      },
      "Tristana": {
         "id": 18,
         "title": "the Yordle Gunner",
         "name": "Tristana",
         "key": "Tristana",
         "lore": "Greatness comes in all shapes and sizes, as proven by this diminutive, cannon-wielding yordle. In a world fraught with turmoil, Tristana refuses to back down from any challenge. She represents the pinnacle of martial proficiency, unwavering courage, and boundless optimism. For Trist and her gun, Boomer, every mission is a chance to prove that heroes do exist."
      },
      "Hecarim": {
         "id": 120,
         "title": "the Shadow of War",
         "name": "Hecarim",
         "key": "Hecarim",
         "lore": "\'\'Break their ranks and ride them down without mercy. Crush the living and feast on their terror.\'\'Hecarim is an armored colossus who charges from the Shadow Isles at the head of a deathly host of spectral horsemen to hunt the living. A monstrous fusion of man and beast, cursed to ride for eternity, Hecarim revels in slaughter and crushing souls beneath his armored hooves."
      },
      "Sivir": {
         "id": 15,
         "title": "the Battle Mistress",
         "name": "Sivir",
         "key": "Sivir",
         "lore": "Known as the Battle Mistress, Sivir is a mercenary with a ruthless reputation. Combining unflinching bravery with endless ambition, she has garnered great fame and fortune. Faced with the revelation of her mysterious heritage, Sivir must weigh her desire to continue on her own path, or accept the burden of a greater legacy."
      },
      "Lucian": {
         "id": 236,
         "title": "the Purifier",
         "name": "Lucian",
         "key": "Lucian",
         "lore": "Lucian wields relic weapons imbued with ancient power and stands a stalwart guardian against the undead. His cold conviction never wavers, even in the face of the maddening horrors he destroys beneath his hail of purifying fire. Lucian walks alone on a grim mission: to purge the spirits of those ensnared in undeath, his eternal beloved among them.Like the twin relic weapons they wielded, Lucian and his wife Senna were carved from the same stone. Together they battled evil in Runeterra for years, bringing light to darkness and purging those taken by corruption. They were beacons of righteousness: Senna\'s dedication to their cause never faltered, while Lucian\'s kindness and warmth touched the hearts of the many lives they saved. Two parts of one whole, they were devoted and inseparable.Though Lucian and Senna witnessed terror that would break most warriors, nothing they had seen compared to the horrors wrought by the Shadow Isles. When the spectral denizens of that accursed place began to manifest across Runeterra, Lucian and Senna hunted them down wherever they appeared. It was grim work, but the fearless pair prevailed until one tragic encounter with the soul-collector Thresh. Lucian and Senna had faced such nightmarish undead before, but never one so deviously clever and cruel. As the terrible battle unfolded, Thresh sprung an unexpected ploy. To Lucian\'s horror, the creature tricked Senna and ensnared her soul, trapping her in a spectral prison. Nothing could bring her back. Senna was lost, and for the first time, Lucian faced his mission alone. Though the Warden had taken half of Lucian\'s heart, he had also created the Shadow Isles\' most dangerous foe. Lucian became a man of dark determination, one who would stop at nothing to purge the undead from the face of Runeterra. In honor of Senna\'s memory, he took up her fallen weapon and vowed to see their mission through to the end. Now wielding both relic weapons, Lucian fights to slay the undead and cleanse the souls of the Shadow Isles. He knows that Senna\'s soul is lost, but never loses hope that one day he will bring her peace. \'\'Be grateful. By slaying you now, I spare you an eternity of torment.\'\'  -- Lucian"
      },
      "Rengar": {
         "id": 107,
         "title": "the Pridestalker",
         "name": "Rengar",
         "key": "Rengar",
         "lore": "On every wall of his den, the trophy hunter Rengar mounts the heads, horns, claws, and fangs of the most lethal creatures in Valoran. Though his collection is extensive, he remains unsatisfied, tirelessly seeking greater game. He takes time with every kill, studying his prey, learning, and preparing himself for the next encounter with the one monster he never managed to defeat.Rengar never knew his real parents, but was raised by a human who was revered as a legendary hunter. He was an ideal pupil, intently absorbing the lessons of his father, and improving them with his uncanny feral instincts. Before his mane had fully grown, Rengar set off on his own and claimed a wide territory for himself. Along its perimeter, he mounted the skulls of his slain prey - a warning to would-be aggressors. He thought undisputed reign of a region would fulfill him, but instead, he grew restless. No beasts in his domain proved challenging prey, and without formidable adversaries to push his limits, Rengar\'s spirit waned. He feared that no worthwhile game remained, that he would never again feel the thrill of the hunt. Just when things seemed their bleakest, he encountered the monster. It was a disturbing, alien thing, distinctly out of place in his world. It bore huge scything claws and devoured any animal that strayed across its path. Overzealous at the prospect of a challenge, Rengar ambushed the monster in haste. It far outclassed anything he\'d hunted before. Their fight was savage, and each suffered crippling wounds. Rengar lost an eye, but the most grievous blow was to his pride. He had never before failed to make the kill. Worse yet, the severity of his injuries forced him to retreat. Over the following days, he hovered on the threshold between life and death. He was wracked with pain, but beneath it, he felt a glimmer of joy. The hunt was on. If such powerful beings existed in the world, he would find them, and stack their heads high. The monster, however, was a kill he wanted to savor. On his den\'s largest wall, he reserves a space for the beast\'s head, a trophy he swears will one day be the centerpiece of his collection.\'\'Prey on the weak and you will survive, prey on the strong and you will live.\'\'-- Rengar"
      },
      "Warwick": {
         "id": 19,
         "title": "the Blood Hunter",
         "name": "Warwick",
         "key": "Warwick",
         "lore": "Warwick was once a man revered for his ability to track down human specimens for the darkest types of scientific research. When his ambitions exceeded his physical limits, he drank a dangerous elixir to transform himself into an unstoppable manhunter.  His newfound strength bore a heavy price.Before his transformation, Warwick found his calling in Zaun as a \'\'procurer\'\' of human test subjects. Known for his crafty methods and ruthless determination, people regarded him with a cautious mixture of fear and respect. As his reputation grew, so did the demands placed upon him. His clients wanted more rare and dangerous specimens, and they wanted them sooner. To meet their demands, Warwick needed strength that transcended his limited human form. His longtime friend, Singed, devised a powerful formula. The recipe called for three critical components: silver from the Shadow Isles, the fang of a Balefire dire wolf, and the heart of a celestial being. Warwick tracked down the first two in short order, but the third proved a much greater challenge. He traveled to Ionia to trap Soraka, a creature believed to be a child of the stars, but she discovered his ploy and drove him away with powerful magic. Unable to tolerate his failure, Warwick returned to Singed disfigured and furious. He demanded the chemist\'s incomplete potion, but Singed warned him that the results would be unpredictable. Ignoring his friend\'s warning, Warwick drank the concoction. The brew transformed him into a creature both man and wolf, infusing him with raw strength and heightened senses. Exhilarated, he immediately began testing his newfound power. Each day his instincts became sharper, but his human half slipped further away. He could feel himself losing control: though he always got his prey, he often failed to bring them back alive. Now he seeks the heart of Soraka to stabilize his transformation before his mind gives way to the feral urges of the beast.\'\'Eventually the beast catches up with all of us.\'\'-- Warwick"
      },
      "Skarner": {
         "id": 72,
         "title": "the Crystal Vanguard",
         "name": "Skarner",
         "key": "Skarner",
         "lore": "Skarner, the crystalline guardian, defends the entrance to a realm deep beneath the Shuriman wastes. The few who survive trespassing his domain describe a creature of terrifying intelligence, anger, and precision. What this merciless creature protects, no one knows."
      },
      "Malphite": {
         "id": 54,
         "title": "Shard of the Monolith",
         "name": "Malphite",
         "key": "Malphite",
         "lore": "There is a world of perfect harmony, where all are part of the whole. The Monolith is the essence of all creation, and its denizens are but singular pieces of it. It is beautiful in its symmetry, and in its almost complete lack of uncertainty. The rocky beings that live there know their place and work to fulfill their duties to the fullest extent, functioning almost as a superorganism or hive. Malphite has always strived to live up to his full potential, as his own personal part of the whole, serving the role of a distinguished creature questing to enforce his people\'s flawless vision of order.One day, without warning, a dimensional rift opened, and he was summoned across the cosmos to the world of Runeterra. The transition was painful and terrifying for him, as he was cut off from the song of his people and the Monolith - things that had been ever-present in him since the day he was born. He raged, trapped in the Summoning Circle, as those who had called him made their plea. Runeterra was a world that had nearly been consumed by its disharmony. It was a world that needed champions to bring order out of chaos. It was to that end that the rock-creature was summoned, so that he could aid them in this quest. Looking past his own fear and apprehension, Malphite could see that this was a respectable goal, and one in which he could participate - perhaps uniquely so. Today, as part of the League of Legends, he hammers those who would seek to upset Valoran\'s movement toward order, especially turning his attention to those that wield chaotic magic. Unfortunately, Malphite has also begun to change, as he has been forced to face his own profound loneliness among the world\'s vibrant individuality.Beware, minions of chaos! The Shard of the Monolith has come."
      },
      "Yasuo": {
         "id": 157,
         "title": "the Unforgiven",
         "name": "Yasuo",
         "key": "Yasuo",
         "lore": "Yasuo is a man of resolve, an agile swordsman who wields the wind itself to cut down his foes. This once-proud warrior has been disgraced by a false accusation and forced into a desperate fight for survival. With the world turned against him, he will do everything in his power to bring the guilty to justice and restore his honor.Formerly a brilliant pupil at a renowned Ionian sword school, Yasuo was the only student in a generation to master the legendary wind technique. Many believed he was destined to become a great hero. However, his fate was changed forever when Noxus invaded. Yasuo was charged with guarding an Ionian Elder, but, foolishly believing his blade alone could make the difference, he left his post to join the fray. By the time he returned, the Elder had been slain.Disgraced, Yasuo willingly turned himself in, prepared to pay for his failure with his life. He was shocked, however, to find himself accused not just of dereliction, but of the murder itself. Though confused and racked with guilt, he knew the assassin would go unpunished if he did not act. Yasuo raised his sword against the school and fought his way free, knowing his treason would turn all of Ionia against him. Left truly alone for the first time in his life, he set out to find the Elder\'s real killer.Yasuo spent the next several years wandering the land, seeking any clue that might lead him to the murderer. All the while, he was relentlessly hunted by his former allies, continually forced to fight or die. His mission drove him ever forward, until he was tracked down by the one foe he dreaded most - his own brother, Yone.Bound by a common code of honor, the two warriors bowed and drew their swords. Silently they circled one another under the moonlight. When they finally charged forward, Yone was no match for Yasuo; with a single flash of steel he cut his brother down. Yasuo dropped his weapon and rushed to Yone\'s side.Overcome with emotion, he demanded to know how his own kin could think him guilty. Yone spoke: \'\'The Elder was killed by a wind technique. Who else could it be?\'\' Understanding swept over Yasuo as he suddenly realized why he had been accused. He professed his innocence once more and begged his brother\'s forgiveness. Tears streamed down Yasuo\'s face as his brother passed in his arms.Yasuo buried Yone under the rising sun, but could take no time to mourn. Others would be after him before long. His brother\'s revelation had given Yasuo newfound purpose; he now had the clue that would lead to the true killer. Swearing an oath, he gathered his belongings and, with one last look at Yone\'s grave, set out with the wind at his back.\'\'The story of a sword is inked in blood.\'\'-- Yasuo"
      },
      "Xerath": {
         "id": 101,
         "title": "the Magus Ascendant",
         "name": "Xerath",
         "key": "Xerath",
         "lore": "Powerful beyond reckoning, the Ascended being known as Xerath was once a mortal of flesh and blood. He is now something vastly different - a being of writhing arcane energy. Having emerged from millennia-spanning imprisonment, he is now ready to unleash his power upon Runeterra, and utterly destroy any who oppose him."
      },
      "Teemo": {
         "id": 17,
         "title": "the Swift Scout",
         "name": "Teemo",
         "key": "Teemo",
         "lore": "Teemo is a legend among his yordle brothers and sisters in Bandle City. As far as yordles are concerned, there is something just slightly off about him. While Teemo enjoys the companionship of other yordles, he also insists on frequent solo missions in the ongoing defense of Bandle City. Despite his genuinely warm personality, something switches off inside Teemo\'s mind during combat so that the lives he must end while on patrol do not burden him. Even as a young recruit, the drill instructors and other trainees found it a little disconcerting that, while Teemo was normally charming and kind, he turned deadly serious and highly efficient the minute combat exercises began. Teemo\'s superiors quickly steered him toward the Scouts of the Mothership, which is one of Bandle City\'s most distinguished Special Forces unit alongside the Megling Commandos.While most yordles do not handle solo scouting missions with a great deal of finesse, Teemo is remarkably efficient at them. His record of success in defending Bandle City from infiltrators easily makes him one of the most dangerous yordles alive, though you\'d never know it by having a cup of honey mead with him at his favorite inn. Bandle City chose Teemo as their first champion for the League, and he has taken to it like a duck to water. His signature weapon - a blowgun - uses a rare ajunta poison he personally gathers from the jungles of Kumungu. To help cope with his lengthy periods of isolation, Teemo recently struck up a friendship with Tristana, a fellow League champion and fellow member of Bandle City\'s Special Forces. This connection is healthy for both yordles, though now Valoran\'s voracious media outlets circulate rumors that the friendship is turning into a romantic relationship. Regardless, Teemo is a crowd favorite in the League of Legends, and a pint-sized foe that many have come to fear.\'\'Teemo rides a thin line between chipper compatriot and unrepentant killer, but there\'s no one else I\'d rather have as a friend.\'\'-- Tristana"
      },
      "Renekton": {
         "id": 58,
         "title": "the Butcher of the Sands",
         "name": "Renekton",
         "key": "Renekton",
         "lore": "Renekton was once a staunch gatekeeper of ancient Shurima, but in the centuries since the fall of that once-glorious empire, he has been consumed by madness. Now, he is little more than a rage-fueled beast who seeks to kill his brother Nasus, who he believes is to blame for his current state of mind."
      },
      "Nasus": {
         "id": 75,
         "title": "the Curator of the Sands",
         "name": "Nasus",
         "key": "Nasus",
         "lore": "To some, Nasus is a demigod who walks among the ruins of an ancient civilization; to others, he is nothing more than a myth. Legend speaks of his dominion over death and time. Millennia ago, he stood at the apex of Shuriman society as curator and guardian. He now roams the arid wastes, seeking to release his brother Renekton from the grip of madness."
      },
      "Draven": {
         "id": 119,
         "title": "the Glorious Executioner",
         "name": "Draven",
         "key": "Draven",
         "lore": "Unlike his brother Darius, victory in battle was never enough for Draven. He craved recognition, acclaim, and glory. He first sought greatness in the Noxian military, but his flair for the dramatic went severely underappreciated. Thirsting for a method to share \'\'Draven\'\' with the world, he turned his attention to the prison system. There he carved out the celebrity he desired by turning the tedious affair of executions into a premiere spectacle.At Draven\'s first execution, he shocked onlookers when he ordered the doomed prisoner to run for dear life. Just before the man managed to flee from sight, Draven brought him down with a flawless throw of his axe. Soon, all Draven\'s executions became a gauntlet through which Noxian prisoners raced for a final chance at life. He used this trial as his own personal stage, and turned executions into a leading form of entertainment. He rallied onlookers into a frenzy, while desperate prisoners scrambled to evade him. They never succeeded. Rejecting the solemn, black uniforms of Noxian executioners Draven donned bright outfits and developed flashy signature moves to distinguish himself. Crowds flocked to see Draven in action, and tales of his performances spread quickly. As his popularity grew, so did his already-inflated ego. He belonged at the center of attention. Before long, the scope of his ambitions outgrew the population of Noxus. He decided that the glorious exploits of Draven should be put on display for the entire world.\'\' \'The best\' is wherever I decide to set the bar each day.\'\'-- Draven"
      },
      "Shaco": {
         "id": 35,
         "title": "the Demon Jester",
         "name": "Shaco",
         "key": "Shaco",
         "lore": "Most would say that death isn\'t funny. It isn\'t, unless you\'re Shaco - then it\'s hysterical. He is Valoran\'s first fully functioning homicidal comic; he jests until someone dies, and then he laughs. The figure that has come to be known as the Demon Jester is an enigma. No one fully agrees from whence he came, and Shaco never offers any details on his own. A popular belief is that Shaco is not of Runeterra - that he is a thing summoned from a dark and twisted world. Still others believe that he is the demonic manifestation of humanity\'s dark urges and therefore cannot be reasoned with. The most plausible belief is that Shaco is an assassin for hire, left to his own lunatic devices until his services are needed. Shaco certainly has proven himself to be a cunning individual, evading authorities at every turn who might seek him for questioning for some horrendous, law-breaking atrocity. While such scuttlebutt might reassure the native inhabitants of Valoran, it seems unimaginable that such a malfeasant figure is allowed to remain at large.Whatever the truth of his history might be, Shaco has joined the League of Legends for reasons only he knows. He is a terrifying figure, typically shunned by both his fellow champions and the media at large. Only the summoners in the Institute of War know why such a creature was allowed into the League, but most Runeterrans suspect it to be a means that allows the power that be to keep an eye on the ever-elusive Shaco. Unsurprisingly, this champion is popular in places where madness can openly reign, such as among the power-hungry summoners of Zaun and Noxus.Whatever you do, don\'t tell him you missed the punch line."
      },
      "Swain": {
         "id": 50,
         "title": "the Master Tactician",
         "name": "Swain",
         "key": "Swain",
         "lore": "The earliest account of Swain\'s existence comes from a Noxian infirmary doctor\'s notes. According to them, Swain limped into the ward without cry or complaint; his right leg was snapped in half, with bone protruding from the skin. A small, scowling bird seemed affixed to his shoulder. The doctor gawked in horror as the young adolescent answered questions about his health and age with a calm, even stare. Even behind the echoing crack as the sand counterweights reset his tibia, Swain\'s measuring gaze never flickered, nor did his eyes twitch from the pop of his fibula. He refused the doctor\'s recommendation of magical treatment for the leg\'s inoperable damage, requesting only a spare crutch before shuffling away. He next surfaced in documents from the Noxian military, although it is evident that they are incomplete. Normally a crippled boy would be turned away in shame from Noxus\' proud legion, but the records indicate his first designation was that of a ranking officer.The men who\'ve served under him (and survived) have remained in his charge with unshakable faith and loyalty. He leapt through the High Command\'s hierarchy, often ascending when superiors requested demotions to join his unit. A cunning strategist, Swain was decorated after every battle he fought, regularly hobbling in contemplation at the front of the assault. His rise to power seemed unceasing until he was suddenly relegated to inactive status prior to the Ionian Invasion - a bewildering decision which reeked of bureaucratic subversion. If Swain was upset by the events which unfolded, he never belied it. His face was so implacable that it was popularly rumored to be a mask, disguising something utterly inhuman beneath. More controversy surrounded the bird that never left his shoulder, whose name he whispered only to it. When Demacia escalated its presence in the League, Swain was immediately returned to active duty.\'\'If you haven\'t yet lost the ability to ask, you may not yet ask for relief.\'\'-Swain"
      },
      "Janna": {
         "id": 40,
         "title": "the Storm\'s Fury",
         "name": "Janna",
         "key": "Janna",
         "lore": "There are those sorcerers who give themselves over to the primal powers of nature, forgoing the learned practice of magic. Such a sorceress is Janna, who first learned magic as an orphan growing up amidst the chaos that is the city-state of Zaun. Janna eked out what living she could on the streets. Life was tough and dangerous for the beautiful young girl, and she survived by her wits, and by stealing when wits weren\'t enough. The rampant magic that characterizes Zaun was the first and most alluring tool which Janna realized could both protect and elevate her. Janna discovered that she had an affinity for a particular type of magic - the elemental magic of air. She mastered her studies of air magic in a matter of months, almost as if she was born of it. Janna went from a street vagrant to an avatar of the air virtually overnight, stunning and surpassing those who taught her. Such a rapid ascension also changed her physical appearance, giving her an otherworldly look.Seeking to right the injustice in the world (particularly the insanity that has become the city of Zaun), Janna has brought her talents to the League. She is a voice for the regulation of magical experimentation and a supporter of the development of techmaturgy, making her an indirect ally of the city-state of Piltover and the amazing techmaturgical minds that live there. Janna is also a new favorite of the League\'s many fans. She is often the center of attention at functions, fan appreciation days, and other celebratory events. There is something untouchable about Janna, however, and her affections can change as quickly as the wind.Do not be captivated by Janna\'s beauty. Like the wind, she is one gust away from terrible destruction."
      },
      "Talon": {
         "id": 91,
         "title": "the Blade\'s Shadow",
         "name": "Talon",
         "key": "Talon",
         "lore": "\'\'The three deadliest blademasters in all of Valoran are bound to the house of Du Couteau: my father, myself, and Talon. Challenge us, if you dare.\'\'-- Katarina Du CouteauTalon\'s earliest memories are the darkness of Noxus\' underground passages and the reassuring steel of a blade. He remembers no family, warmth, or kindness. Instead, the clink of stolen gold and the security of a wall at his back are all the kinship he has ever craved. Kept alive only by his quick wits and deft thievery, Talon scraped out a living in the seedy underbelly of Noxus. His mastery of the blade quickly marked him as a threat, and Noxian guilds sent assassins to him with a demand: join their ranks or be killed. He left the bodies of his pursuers dumped in Noxus\' moat as his response.The assassination attempts grew increasingly frequent until one assailant met Talon blade-for-blade in a match of strength. To his surprise, Talon was disarmed and facing down his executioner\'s sword when the assassin revealed himself to be General Du Couteau. The General offered Talon the choice between death at his hand, or life as an agent of the Noxian High Command. Talon chose life, on the condition that his service was to Du Couteau alone, for the only type of orders he could respect were from one he could not defeat.Talon remained in the shadows, carrying out secret missions on Du Couteau\'s orders that took him from the frigid lands of the Freljord to the inner sanctums of Demacia itself. When the general vanished, Talon considered claiming his freedom, but he had gained immense respect for Du Couteau after years in his service. He became obsessed with tracking down the general\'s whereabouts, and scours the land in search of those responsible for Du Couteau\'s disappearance."
      },
      "Ziggs": {
         "id": 115,
         "title": "the Hexplosives Expert",
         "name": "Ziggs",
         "key": "Ziggs",
         "lore": "Ziggs was born with a talent for tinkering, but his chaotic, hyperactive nature was unusual among yordle scientists. Aspiring to be a revered inventor like Heimerdinger, he rattled through ambitious projects with manic zeal, emboldened by both his explosive failures and his unprecedented discoveries. Word of Ziggs\' volatile experimentation reached the famed Yordle Academy in Piltover and its esteemed professors invited him to demonstrate his craft. His characteristic disregard for safety brought the presentation to an early conclusion, however, when the hextech engine Ziggs was demonstrating overheated and exploded, blowing a huge hole in the wall of the Academy. The professors dusted themselves off and sternly motioned for him to leave. Devastated, Ziggs prepared to return to Bandle City in shame. However, before he could leave, a group of Zaunite agents infiltrated the Academy and kidnapped the professors. The Piltover military tracked the captives to a Zaunite prison, but their weapons were incapable of destroying the fortified walls. Determined to outdo them, Ziggs began experimenting on a new kind of armament, and quickly realized that he could harness his accidental gift for demolition to save the captured yordles.Before long, Ziggs had created a line of powerful bombs he lovingly dubbed \'\'hexplosives.\'\' With his new creations ready for their first trial, Ziggs traveled to Zaun and sneaked into the prison compound. He launched a gigantic bomb at the prison and watched with glee as the explosion tore through the reinforced wall. Once the smoke had cleared, Ziggs scuttled into the facility, sending guards running with a hail of bombs. He rushed to the cell, blew the door off its hinges, and led the captive yordles to freedom. Upon returning to the Academy, the humbled professors recognized Ziggs with an honorary title - Dean of Demolitions - and proposed that he demonstrate this new form of yordle ingenuity in the League of Legends. Vindicated at last, Ziggs accepted the proposal, eager to bring his ever-expanding range of hexplosives to the greatest testing grounds in the world: the Fields of Justice.\'\'Ziggs? Unpredictable, dangerous, yes yes. But quite brilliant!\'\'-- Heimerdinger"
      },
      "Ekko": {
         "id": 245,
         "title": "the Boy Who Shattered Time",
         "name": "Ekko",
         "key": "Ekko",
         "lore": "A prodigy from the rough streets of Zaun, Ekko manipulates time to spin any situation to his advantage. Using his own invention, the Zero-Drive, he explores the branching possibilities of reality. As well as experimenting with multi-dimensional probability, Ekko spends his days running wild with the other lost children of Zaun. Though he revels in this freedom, when there\'s a threat to his friends, he\'ll endure anything to defend them. To the unknowing observer, Ekko accomplishes the impossible with ease, time and time again."
      },
      "Orianna": {
         "id": 61,
         "title": "the Lady of Clockwork",
         "name": "Orianna",
         "key": "Orianna",
         "lore": "There once was a Piltovian man named Corin Reveck who had a daughter named Orianna, whom he loved more than anything else in the world. Though Orianna had incredible talent for dancing, she was deeply fascinated by the champions of the League of Legends. This fascination compelled her to begin training to become such a champion. It is unfortunate that her sheltered, wide-eyed naivete led her to take unnecessary and dangerous chances which ultimately led to her tragic demise. Orianna\'s death shattered Corin, driving him into deep depression and an obsession with techmaturgy. He could not stand the void his daughter\'s death left in his life, so he decided to build a replacement - one that would complete Orianna\'s dream of joining the League. What was created is the clockwork killing machine that Corin named after his daughter. Knowing that she was destined to be a champion and seeing the way the times were changing, he created The Ball as her pet and protector. This nearly symbiotic creation uses a different type of techmaturgy, relying more heavily on electricity than clockwork.Orianna and The Ball now fight as Champions in the League of Legends, using her sometimes misguided morality as a compass. She tries in earnest to fit in with those around her. However, no matter how hard she tries, Orianna can never be human and there is always something unnerving and alien about her. Though she attempts social interaction with other champions in the League of Legends, there are few who can get past her exotic nature. To many, it\'s as if there\'s nothing inside, that Orianna is just a soulless clockwork shell - a dangerous and deadly one at that. However, all along she remains the perfect daughter in her father\'s eyes.\'\'Dance with me, my pet. Dance with me into oblivion.\'\'"
      },
      "FiddleSticks": {
         "id": 9,
         "title": "the Harbinger of Doom",
         "name": "Fiddlesticks",
         "key": "FiddleSticks",
         "lore": "game_character_lore_FiddleSticks"
      },
      "Fiora": {
         "id": 114,
         "title": "the Grand Duelist",
         "name": "Fiora",
         "key": "Fiora",
         "lore": "\'\'I have come to kill you for the sake of honor. And though you possess none, still you die.\'\'The most feared duelist in all Valoran, Fiora is as renowned for her brusque manner and cunning mind as she is for the speed of her bluesteel rapier. Born to House Laurent in the kingdom of Demacia, Fiora took control of the family from her father in the wake of a scandal that nearly destroyed them. House Laurent\'s reputation was sundered, but Fiora bends her every effort to restore her family\'s honor and return them to their rightful place among the great and good of Demacia."
      },
      "Chogath": {
         "id": 31,
         "title": "the Terror of the Void",
         "name": "Cho\'Gath",
         "key": "Chogath",
         "lore": "There is a place between dimensions, between worlds. To some it is known as the Outside, to others it is the Unknown. To those that truly know, however, it is called the Void. Despite its name, the Void is not an empty place, but rather the home of unspeakable things - horrors not meant for minds of men.  Cho\'Gath is a creature born of the Void, a thing whose true nature is so awful most will not speak its name. Its fellows have been poking at the walls that divide dimensions for a crack, a way into Runeterra, where they can visit their own personal paradise of horror upon the world. They are called the Voidborn, creatures so ancient and terrible that they have been removed from history altogether. It is rumored that the Voidborn command vast armies of unspeakable creatures on other worlds, that they were once driven from Runeterra by powerful magic lost to antiquity.If such tales are true, then the rumors that follow must be equally true - that one day, the Voidborn will return. Even now, something dark stirs in Icathia, perverting the summoning rituals of the League to allow the presence of Cho\'Gath. It is an alien creature of malice and violence, a thing that causes all but the most stalwart to cringe in fear. Cho\'Gath even appears to feed on its predations, growing and swelling as it gorges itself. Worse yet, the creature is intelligent, perhaps greatly so, making most wonder how such a monster could be contained. Fortunately, the power of the League\'s summoning has confined Cho\'Gath\'s presence exclusively to the League of Legends. It is here that summoners use Cho\'Gath\'s Voidborn abilities to help decide the fate of Runeterra. The Terror of the Void knows what fate it would choose for Runeterra, given half the chance.Woe betide the day when Cho\'Gath grows weary of the League."
      },
      "Rammus": {
         "id": 33,
         "title": "the Armordillo",
         "name": "Rammus",
         "key": "Rammus",
         "lore": "The mysteries that surround Rammus are numerous. How did a simple creature of the desert suddenly become able to reason? How did he craft his vaunted suit of armor? What is he searching for as he crosses the Shuriman desert? One thing is for certain: trying to stop the inexorable Rammus is a fool\'s mission."
      },
      "Leblanc": {
         "id": 7,
         "title": "the Deceiver",
         "name": "LeBlanc",
         "key": "Leblanc",
         "lore": "Every city has its dark side, even one whose reputation is already of a questionable hue. Noxus - though its name is already invoked with a mixture of reverence and revulsion - is no exception to this simple truth. Deep within the winding dungeons that honeycomb the earth beneath its dark, meandering streets lies the real underbelly of this sprawling metropolis, a haven for all manner of malevolence. Amongst the cults, covens, and secret societies that call this labyrinth their home, LeBlanc, the Deceiver, presides over the Black Rose, a remnant from a lost, yet similarly unscrupulous time in Noxian history. Ruthless and seemingly ageless, LeBlanc and her ilk were a mainstay in Noxian political affairs during the era before the militarization of the Noxian government. In those days, this guild of powerful magicians met in secret to further their hidden agenda, and to hone a craft more subtle than that preferred by those currently in power.While their exact motives have always remained mysterious, it was widely believed that the Black Rose was the true power behind the throne while the aristocracy still reigned in Noxus. When raw martial prowess became the ultimate determination of whose will held sway in the Empire, the Black Rose seemed to vanish overnight. Many believed that perhaps their time had simply passed, and that its members had put aside their quests for social and political dominance. When LeBlanc reemerged at the gates of the Institute of War, however, it became clear that these masters of shadow and flame had simply been biding their time, waiting for a new global authority to emerge: the League of Legends.\'\'The world is very different for those who cannot see beyond what is placed before their very eyes.\'\'-- LeBlanc, the Deceiver"
      },
      "Soraka": {
         "id": 16,
         "title": "the Starchild",
         "name": "Soraka",
         "key": "Soraka",
         "lore": "A healer gifted with the magic of the stars, Soraka holds all living creatures close to her heart. She was once a celestial being, but she sacrificed her immortality and entered the world of mortals. So long as evil threatens life in Valoran, Soraka will not allow herself peace.Soraka lived for centuries in an enchanted grove. A being of the stars, she healed the wounded and sick that sought her out. One man called Warwick came to her grove and begged her to heal his wife, who lay lifeless in his arms. His despair touched Soraka\'s heart. Though it was too late to save his wife, she offered to help heal the pain of his loss. Unwilling to let go of his grief Warwick ran from the grove, but returned over the following days to hear Soraka\'s guidance. She began to grow attached to the grieving man. One day Warwick told her he had found the men who killed his wife. He believed revenge would heal his pain - and if he died fighting, he would at least find peace. Though she pleaded with him, Warwick ignored her and left the grove. The voices of the stars warned her not to follow him, but Soraka had to intervene.She stepped into the mortal world for the first time, and soon found Warwick desperately fighting a group of men. She tried to heal him, but for every wound she closed, the men inflicted two more. Soraka realized that she would have to fight to save her friend. The stars screamed in her mind, telling her not to use her powers for harm. Ignoring their warning, she struck the attackers with a flash of brilliant light. Crying out in terror and shielding their eyes from her divine radiance, they fled. Soraka\'s celestial form faded and the stars fell silent - for her transgression, she became mortal. She still felt the power of the stars within her, but they no longer offered her guidance. She took comfort in Warwick\'s safety, gently healing his wounds, but the man she had called her friend slipped a dagger between her ribs. As her blood spilled, Soraka realized he had fooled her, and everything he had done was a complicated ruse. Feeling humiliated and betrayed she called once more on the power of the stars, searing his flesh and cursing his cruelty. He retreated with an agonized howl, leaving Soraka to reflect upon her fate. Though her life had changed, she felt empowered and renewed with a singular purpose. No longer bound to the grove, Soraka set out into the mortal world, vowing to heal the wounded and protect the helpless.\'\'The cruelty of one will not blind me to the suffering of many.\'\'-- Soraka"
      },
      "Zilean": {
         "id": 26,
         "title": "the Chronokeeper",
         "name": "Zilean",
         "key": "Zilean",
         "lore": "In the wastelands of Urtistan, there was once a great city. It perished long ago in a terrible Rune War, like most of the lands below the Great Barrier. Nevertheless, one man survived: a sorcerer named Zilean. Being obsessed with time, it was only fitting that he dwelled in the city\'s Clock Tower. As the havoc of the war neared his home, Zilean experimented with powerful temporal magic to divine all possible futures, hoping to discover a peaceful solution. But Zilean\'s enchantments affected his perception of the passage of time, and he was in a contemplative stasis when Urtistan was set upon by an entire phalanx of dark summoner-knights of unknown affiliation. By the time he realized his error, Urtistan was nothing more than smoldering debris. The summoners who were responsible for its destruction had wisely left the Clock Tower unharmed, both to avoid drawing Zilean\'s attention and to torment him for his oversight.Zilean barely had time to grieve the momentous loss before he learned that his dangerous research had a cruel side effect: chrono-displasia. This mystical disease granted him immortality, but detached his consciousness from its anchor in the present time. He now mentally drifts through time, from any point he has already lived to the present, unable to impact the events which unfold. The most torturous aspect of this curse is that Zilean sometimes experiences Urtistan as it once was and the rest of the time resides in its lonely ruins. Only the powerful summoning magic employed by members of the League of Legends has been able to treat this condition, and Zilean has joined in hopes of finding a cure, and thereafter a way to save his people.\'\'There is no greater grief than for a loss that is yet to come.\'\'-- Zilean"
      },
      "Nocturne": {
         "id": 56,
         "title": "the Eternal Nightmare",
         "name": "Nocturne",
         "key": "Nocturne",
         "lore": "Before Nocturne, people believed that dreams were figments of their imagination, meaningless images that flashed through the mind when one slept. This belief was put to the test when a rash of sleep-related incidents started afflicting summoners of the League. Some would wake up screaming, terrified and beyond consolation. Some could not fall asleep, slowly going mad as the nights ticked by. Some simply never woke up. Physicians were baffled until a Field Architect happened to pass out next to a nexus on Twisted Treeline. Witnesses said he cried out once and then stopped breathing. Immediately after, magical energy arced out from the nexus, and Nocturne appeared.Nocturne did not take his introduction to this world kindly. He slaughtered everything he could find before summoners were able to magically confine him. After a period of intense study, League experts divined that Nocturne hunted summoners in their sleep, attacking them in a place where their magic was useless. This seemed to be his only purpose. The families of the victims demanded justice, but League officials were concerned that death might only return Nocturne to the place from which he came. They bound him to a nexus fragment, trapping him in the physical world. As punishment for his crimes, they allowed summoners to call upon Nocturne in the League matches, bending his will to the summoners he hates and creating his own personal nightmare. League scholars don\'t know whether he truly came from the plane of dreams, or whether there are any more like him. Some theorize that the summoning act affected summoners\' subconscious minds, luring Nocturne to them in their sleep. Perhaps the most disturbing theory is that Nocturne is a person\'s nightmare come to life. If this is true, they wonder, who is the dreamer?\'\'The darkness is closing in...it\'s pitch black now...but I can still see him...\'\'- Kelvin Ma, patient #4236"
      },
      "Jinx": {
         "id": 222,
         "title": "the Loose Cannon",
         "name": "Jinx",
         "key": "Jinx",
         "lore": "Jinx lives to wreak havoc without a thought for the consequences, leaving a trail of mayhem and panic in her wake. A manic and impulsive criminal, she despises nothing more than boredom, and gleefully brings her own volatile brand of pandemonium to the one place she finds dullest: Piltover. With an arsenal of deadly toys, she unleashes the brightest explosions and loudest blasts - all the better to shock and surprise the hapless authorities. Always just out of the law\'s reach, Jinx\'s favorite game is to toy with Piltover\'s finest - especially Vi.Piltover had long been known as the City of Progress, a place where peace and order reigned. That serenity was challenged when a new kind of criminal arrived, the likes of whom had never been seen. This mysterious outlaw unleashed a series of warped and destructive capers that endangered the entire city, and left its people reeling from the worst crime spree in Piltover\'s history.As the string of crimes without rhyme or reason hit the city, sightings of the lawbreaker emerged. Though the young woman\'s origins were a mystery, some saw traces of Piltover hextech in her firearms, while others described the street fashions of Zaun in her dress. Because her arrival always brought trouble with it, those who crossed her path soon gave her a name: Jinx.As Jinx\'s rampage escalated, Caitlyn - the sheriff of Piltover - responded by declaring a state of emergency and organizing a city-wide manhunt. In typical Jinx fashion, the criminal marked the Piltover treasury, the city\'s most secure building, with a direct challenge to its most abrasive officer. With a caricature of Vi\'s face splashed across the treasury\'s facade, and a scribbled time and date of her supposed raid, Jinx was openly daring the enforcer to stop her from robbing it.Determined to put the troublemaker behind bars, Vi watched and waited outside the treasury until Jinx\'s time had finally come. True to her scrawled promise, the smiling menace showed her face. Knowing this was her chance to capture the outlaw, Vi gave chase into the building\'s interior. She smashed through wall after wall to chase down Jinx, who giggled as she lit up the evacuated treasury with fiery explosions. Vi finally cornered the criminal inside the vault, but Jinx wasn\'t done just yet. With a maniacal laugh, she fired a barrage of rockets, bringing the entire building down upon them both.When Vi finally crawled out of the ruins, the battered enforcer found no trace of Jinx. Adding insult to injury, not a single ounce of gold had been taken from the ruined vault. Instead, the criminal left a parting message to her favorite officer of the law - a challenge only now visible through the gaping opening in Piltover\'s skyline. The lights of the city spelled out a simple taunt: you\'ll never catch me. As Vi read the message, she heard the distant laughter of her new nemesis, and the city plunged into utter darkness for the very first time.\'\'Oh look - I\'m opening my box of care! Oh wait - it\'s empty!\'\'-- Jinx"
      },
      "Yorick": {
         "id": 83,
         "title": "the Gravedigger",
         "name": "Yorick",
         "key": "Yorick",
         "lore": "A terrifying and tragic figure, Yorick is a ghoulish being that exists on the edge of mortality. Some say he was the last of his family line, dying without an heir to continue its legacy, and that he was cursed to continue his family\'s duty even after death. Wielding the twisted shovel he bore in life, he continues his macabre work, endlessly digging and filling graves upon the haunted Shadow Isles."
      },
      "Urgot": {
         "id": 6,
         "title": "the Headsman\'s Pride",
         "name": "Urgot",
         "key": "Urgot",
         "lore": "There are warriors who become great for their strength, cunning, or skill with arms. Others simply refuse to die. Urgot, once a great soldier of Noxus, may constitute a case in support of the latter. Prone to diving headlong into enemy battle lines, Urgot sowed chaos throughout the enemy ranks, often sustaining grievous injuries in the process.When his body was unable to weather further abuse, the crippled Urgot was delegated to the position of High Executioner of Noxus. By this time, his hands had been ruined and he could barely walk. Scythe-like grafts affixed to his maimed limbs served to carry out his bloody work.Urgot finally met his end at what should have been his finest hour. Because of his military background, he often accompanied detachments into foreign territory to carry out judgment. After ambushing an enemy force, Jarvan IV, Crown Prince of Demacia, fell into the clutches of Urgot\'s division. Too far from Noxus to risk transporting their prize for ransom, Urgot prepared to dispose of their captive. At the final moment, however, Garen led the Dauntless Vanguard to intervene, and Urgot was cut in two by the zealous warrior as he scrambled to free his Prince.In recognition of his service, the executioner\'s remains were remanded to the Bleak Academy for reanimation. However, a lifetime of abuse had left his body in a catastrophic state, proving problematic to the necromancers\' craft. Professor Stanwick Pididly, the prevailing scholar of Zaun, offered a solution. Within Pididly\'s laboratories, a nightmarish new body was forged for Urgot.Now, as much machine as man, with necromantic energies coursing through his metal veins, Urgot searches for the man who ended his life."
      },
      "Kindred": {
         "id": 203,
         "title": "The Eternal Hunters",
         "name": "Kindred",
         "key": "Kindred",
         "lore": "\'\'Tell me again, little Lamb, which things are ours to take?\'\'\'\'All things, Dear Wolf.\'\'Separate, but never parted, Kindred represents the twin essences of death. Lamb\'s arrow offers a swift release for those who accept their fate. Wolf hunts down those who run from their end, delivering violent finality within his crushing jaws. Though interpretations of Kindred\'s nature vary across Runeterra, every mortal must choose the true face of their death."
      },
      "MissFortune": {
         "id": 21,
         "title": "the Bounty Hunter",
         "name": "Miss Fortune",
         "key": "MissFortune",
         "lore": "\'\'The bigger the risk, the bigger the bounty.\'\'Beauty and danger: There are few who can match Miss Fortune in either. One of Bilgewater\'s most infamous bounty hunters, she built her legend upon a swathe of bullet-riddled corpses and captured ne\'er-do-wells. The booming echoes of her twin pistols in the port city\'s reeking wharfs and scavenger shanties are sure signs of another warrant from the Bounty Board being settled."
      },
      "MonkeyKing": {
         "id": 62,
         "title": "the Monkey King",
         "name": "Wukong",
         "key": "MonkeyKing",
         "lore": "During the chaos of the Rune Wars, an enormous runestone was lost deep within the Plague Jungles. It remained there, untouched for centuries, emanating a potent magic which infused nearby wildlife with sentience and vitality. A group of monkeys who were particularly empowered by it came to worship the stone, and their leader - a wise sage - became convinced that he could harness its power to make the monkeys immortal. He performed an elaborate ritual, but things didn\'t go as he expected. The runestone was destroyed, and instead of granting immortality, it produced Kong, a monkey who carried in his heart the strength and power it had contained. Kong was driven by an unquenchable desire for greatness. He sought out every beast and monster the Plague Jungles could offer, eager to find a worthy opponent, but none offered the challenge he craved. He asked the sage for advice, and learned about a legend of hairless monkeys to the north who, with wits and might, had bent the world to their will.Kong left, journeying north, determined to discover if the legend was true. He crossed the Southern Wastes and then the Great Barrier. On his way, he happened upon Master Yi, who was deep in meditation. Kong asked him who the strongest warrior in the north was, and Yi told him about the League of Legends. The tale intoxicated Kong, a place where he could battle the strongest fighters in the world was, to him, paradise. Kong asked Yi to introduce him to this League, and to teach him the ways of humans, so that he could be a fitting champion. In return, he would honor Yi by using Yi\'s Wuju style to become the greatest warrior Runeterra had ever seen. Admiring his passion, Yi agreed, but under the condition that Kong would one day teach the lessons of Wuju to a pupil of his own. In the spirit of this agreement, he renamed Kong \'\'Wukong,\'\' and gave him a weapon suited to his unusual nature - an enchanted staff that the young Doran had crafted. The weapon was an unrivalled masterpiece. Guided by Yi, Wukong joined the League of Legends to prove himself as the best, and to show the world the true power of Wuju.\'\'Only in combat do you learn who you truly are.\'\'-- Wukong"
      },
      "Blitzcrank": {
         "id": 53,
         "title": "the Great Steam Golem",
         "name": "Blitzcrank",
         "key": "Blitzcrank",
         "lore": "Zaun is a place where both magic and science have gone awry, and the unchecked nature of experimentation has taken its toll. However, Zaun\'s lenient restrictions allow their researchers and inventors the leeway to push the bounds of science at an accelerated rate, for better or worse.It was under these conditions that a team of doctoral students from Zaun\'s College of Techmaturgy made a breakthrough in the field of intelligent steam automation. Their creation, the steam golem Blitzcrank, was developed to exercise judgment on-the-fly in order to assist with Zaun\'s hazardous waste reclamation process, since often the conditions did not allow for human supervision. However, he soon began exhibiting unforeseen behaviors.Over time, the scientists were able to identify a demonstrated learning process, and Blitzcrank fast became a celebrity. As is sadly often the case though, credit for the golem\'s creation was scooped up by another - Professor Stanwick Pididly - though most now know the truth. In the wake of the ensuing legal maelstrom, it became evident that neither party truly had the steam golem\'s best interests at heart, and Blitzcrank humbly petitioned for personal autonomy.Backed by overwhelming support from the public, it took the liberal Council of Zaun only a few weeks to declare Blitzcrank a fully-independent, sentient entity. A unique being, the golem left Zaun, distressed by the controversy and feeling there was no place he could fit in. Now he searches the lands of Valoran to find a place where he might someday belong.Though Blitzcrank may batter anything that stands in his way, he really has a heart of gold...encased in a framework of iron...in a carapace of steel."
      },
      "Shen": {
         "id": 98,
         "title": "the Eye of Twilight",
         "name": "Shen",
         "key": "Shen",
         "lore": "\'\'The Eye is blind to fear, to hate, to love - to all things that would sway equilibrium.\'\'Leader of a secret clan of mystic warriors, Shen serves as the Eye of Twilight, entrusted to enforce equilibrium in the world. Longing to remain free from the confusion of emotion, prejudice, or ego, Shen continually struggles, spirit blade in hand, to walk the unseen path of dispassionate judgment."
      },
      "Braum": {
         "id": 201,
         "title": "the Heart of the Freljord",
         "name": "Braum",
         "key": "Braum",
         "lore": "\'\'Would you like a bedtime story?\'\'\'\'Grandma, I\'m too old for that.\'\'\'\'You\'re never too old to be told a story.\'\'The girl reluctantly crawls into bed and waits, knowing she won\'t win this battle. A bitter wind howls outside, whipping falling snow into devil whirls.\'\'What kind? A tale of the Ice Witch, perhaps?\'\' her grandmother asks.\'\'No, not her.\'\'\'\'What about a story of Braum?\'\' She was met with silence. The old woman smiles. \'\'Oh, there are so many. My grandmother used to tell me of the time Braum protected our village from the great dragon! Or once - this was long ago - he raced down a river of lava! Or -\'\' She pauses; puts a finger to her lips. \'\'Have I told you how Braum got his shield?\'\'The girl shakes her head. The hearth fire snaps, holding off the wind.\'\'Well. In the mountains above our village lived a man named Braum -\'\'\'\'I know that!\'\' \'\'He mostly kept to his farm, tending his sheep and goats, but he was the kindest man anyone had ever met, and he always had a smile on his face and a laugh on his lips.\'\'Now, one day something terrible happened: a young troll boy around your age - was climbing the mountain and happened on a vault, set into the mountainside, the entrance guarded by a huge stone door with a shard of True Ice at its center. When he opened the door, he couldn\'t believe his eyes: the vault was filled with gold, jewels - every kind of treasure you could imagine!\'\'What he didn\'t know was that the vault was a trap. The Ice Witch had cursed it - and as the troll boy entered, the magical door CLANGED shut behind him and locked him inside! Try as he might, he couldn\'t get out.\'\'A passing shepherd heard his cries. Everyone rushed to help, but even the strongest warriors couldn\'t open the door. The boy\'s parents were beside themselves; his mother\'s wails of grief echoed around the mountain. It seemed hopeless.\'\'And then, to everyone\'s surprise, they heard a distant laugh.\'\'\'\'It was Braum, wasn\'t it?\'\'\'\'Aren\'t you clever! Braum had heard their cries and came striding down the mountainside. The villagers told him of the troll boy and the curse. Braum smiled, nodded, turned to the vault, and faced the door. He pushed it. Pulled it. Punched it; kicked it; tried to rip it from its hinges. But the door wouldn\'t budge.\'\'\'\'But he\'s the strongest man ever!\'\'\'\'It was perplexing,\'\' her grandmother agrees. \'\'For four days and nights, Braum sat on a boulder, trying to think of a solution. After all, a child\'s life was at stake.\'\'Then, as the sun rose on the fifth day, his eyes widened and a broad grin lit up his face. If I can\'t go through the door,\' he said, then I\'ll just have to go through -\'\'The girl thinks; her own eyes widen. \'\'- the mountain!\'\'\'\'The mountain. Braum headed to the summit and began punching his way straight down, pummeling into the stone, fist after fist, rocks flying in his wake, until he had vanished deep into the mountain. \'\'As the villagers held their breath, the rock around the door crumbled - and when the dust cleared, they saw Braum standing amidst the treasure, the weak but happy troll boy in his arms.\'\'\'\'I knew he could do it!\'\'\'\'But before they could celebrate, everything began to rumble and shake: Braum\'s tunnel had weakened the mountaintop, and now it was caving in! Thinking quickly, Braum grabbed the enchanted door and held it above him like a shield, protecting them as the mountaintop collapsed all around them. When it was over, Braum was amazed: there wasn\'t a single scratch on the door! Braum knew it was something very special.\'\'And from that moment on, that magical shield never left Braum\'s side.\'\'The girl is sitting upright, struggling to conceal her excitement. Her grandmother waits. She shrugs and gets up to leave.\'\'Grandma,\'\' the girl stops her, \'\'can you tell me another?\'\'\'\'Tomorrow.\'\' Her grandmother smiles; kisses her forehead; blows out the candle. \'\'For you need to sleep, and there are many more stories to tell.\'\'"
      },
      "XinZhao": {
         "id": 5,
         "title": "the Seneschal of Demacia",
         "name": "Xin Zhao",
         "key": "XinZhao",
         "lore": "\'\'Death is inevitable, one can only avoid defeat.\'\'Whenever Jarvan III, the king of Demacia, delivers one of his rallying speeches from the glinting marble balcony atop the Royal Palace, Xin Zhao is at his side. Coined the Seneschal of Demacia, Xin Zhao is the personal steward of the Lightshield Dynasty. His enigmatic, silent vigil has led to an abundance of conjecture concerning his \'\'secret life\'\' and origins. Whether it\'s \'\'Zaun double-agent\'\' tendered at the dinner table or \'\'indebted rune mage\'\' mused in the editorials of the \'\'Demacian Constant,\'\' Xin Zhao betrays no hints to sate the curiosity of the masses... for good reason.Years ago, Noxus was renowned for a spectacle called The Fleshing. It was a gladiatorial event with a cruel twist: as a fighter won matches, his number of opponents (generally prisoners of war) fought simultaneously would increase. This meant eventual death for every contender, but with unparalleled glory. Xin Zhao, known then as Viscero, was slated to face 300 soldiers, nearly six times the previous record. This was clearly meant to be his final match.Jarvan II, hearing of this unprecedented feat, infiltrated the arena to offer him an alternative: serve Demacia and punish those who ultimately sentence him to death in exchange for his freedom. Xin Zhao accepted, astonished that a king would risk his own life on his behalf. Under the cover of a prearranged Demacian assault on Noxus, Jarvan liberated Xin Zhao and his 300 opponents. During their retreat, Xin Zhao took a poisoned dart meant for Jarvan. This act of loyalty, from a man who vowed no allegiance, earned Xin Zhao a spot at his side until the day the king died.Now in the service of his son, Jarvan III, Xin Zhao continues to fight for his adopted country and honor the legacy of the man who gave purpose to his life."
      },
      "Twitch": {
         "id": 29,
         "title": "the Plague Rat",
         "name": "Twitch",
         "key": "Twitch",
         "lore": "H.I.V.E. Incident ReportCode Violation: Industrial HomicideCasefile Status: UnsolvedInvestigating Agent: Rol, P.Team responded to report of suspicious character, criminal activity; proceeded to Sump Works, Sector 90TZ. Sector 90TZ notably absent. In its place: sinkhole, smoke, noxious fumes. Interviews with private security indicate urgent need for better private security.Response team entered sinkhole. Toxic runoff had melted away building wreckage. Two survivors located, one partially liquefied and dripping off catwalk. Six deceased bodies found among wreckage, three of them partial; two appear to predate incident. Causes of death include acute deceleration, caustic liquidation, and/or fatal crossbow wounds. Unclear if lab\'s destruction was itself the perpetrator\'s motive or an attempt to cover tracks.Survivor #1 (Ra Qintava, facility researcher) brought up for interview, but unable to provide statement due to 1) post-traumatic stress and 2) liquefaction of tongue and lower jaw. Awaiting toxin screen and prosthesis fitting.Search-and-rescue discovered apparent shantytown constructed from refuse. Recovered items include:     57 waterlogged romance novels, illegible, with edits made in crayon     108 bottles, unlabeled (possible toxic runoff or discarded shampoo remnants)     200 pounds chewing gum (possible installation art project)     1 jar toenails, labeled by toe/finger, date, and moodSurvivor #2 (Valori Olant, Sludge Analyst) in recovery; regained lucidity following prolonged therapeutic electrocution. Statement transcript excerpt follows:     V.O.: GOT TO DO SOMETHING -      NURSE: She\'s lost so much blood --     P.R.: Her co-workers lost a lot more than that --     V.O.: IT\'S STILL OUT THERE!     P.R.: Ma\'am, I need you to focus. Tell me what he looked like.     V.O.: LIKE A RAT! (pause)     NURSE: Like a what?     P.R.: You mean, small? Beady-eyed? Sorta rat-faced -- ?     V.O.: I MEAN IT LOOKED LIKE A GIANT GODSDAMNED RAT! (pause). WITH A CROSSBOW! (pause).     P.R.: (to nurse) Can we moderate her painkillers?     V.O.: YOU\'RE NOT LISTENING! IT\'S A HOMICIDAL, PSYCHOPATHIC, GIANT FREAKING RAT!      IN A WAISTCOAT!     P.R.: Nurse?     NURSE: (injecting Olant\'s arm with sedative) On it.     [EDIT]     V.O.: We were just scientists, working on refining human waste into inexpensive baby formula... [EDIT] I saw - I don\'t know how else to - this crazed, enormous RAT - screaming at us! Kicking over vats! Spitting on our food! [EDIT] The lab was sealed. Industrial waste was spilling everywhere. Nowhere to run. [EDIT] I woke up in the dark. Well, the acid had melted my eyeballs. I could SMELL the twitchy bastard inches from my face. It said, \'NOBODY STEALS TWITCH\'S JUICE!\' cackled wildly, and skittered off... I can still smell it in my mind. OH MY GODS, I CAN STILL SMELL IT-End transcript. At this point victim began screaming; has yet to stop. [UPDATE: Qintava, Written Testimony]Suspect summary, as reported:     NAME/KNOWN ALIASES: \'\'Twitch.\'\'     SEX: Male (unconfirmed).     AGE: Unknown.     HEIGHT: 4\'9\'\' (hunched)      WEIGHT: < 99 lbs. (wet).      DISTINGUISHING FEATURES: Is a giant rat.      STATUS: At large; armed, extremely dangerous; DO NOT ENGAGE.H.I.V.E - Enforcing Progress!"
      },
      "MasterYi": {
         "id": 11,
         "title": "the Wuju Bladesman",
         "name": "Master Yi",
         "key": "MasterYi",
         "lore": "Through the ancient martial art of Wuju, Master Yi has tempered his body and sharpened his mind until thought and action have become one. Though he chooses to enter into violence as a last resort, the grace and speed with which he wields his blade ensures resolution is always swift. As the last living practitioner of Wuju, Master Yi has devoted his life to finding able pupils to carry on the legacy of his lost people. Even before Yi mastered Wuju, he was considered one of the most skilled practitioners of the mystical martial art. He would soon prove his mastery when word of a massive Noxian invasion reached his remote village. Yi swept across the battlefields of Ionia, turning back the tide of Noxus\'s vast infantry with swift and deadly strikes, much to the embarrassment of Noxian High Command. Recognizing the threat the Wuju disciples posed to their invasion, the Noxians chose to unleash a nightmarish chemical attack on the home of the deadly art. Those who somehow survived the poisonous concoction had their minds twisted beyond repair. Yi\'s home was left in ruin.At the war\'s conclusion, Yi returned to the grotesque remains of his village. There he became the attack\'s final casualty. Slain in spirit, if not in body, Yi clung to the only feeling left within his heart: vengeance. Driven only by his desire to punish those who\'d destroyed his home, Yi spent years training in seclusion. He became a deadlier swordsman than he had ever been, but true mastery of Wuju still eluded him.At the height of Yi\'s frustration, a monkey of unusually noble bearing interrupted his training. Standing as straight and tall as a man, the monkey watched and mimicked Yi\'s movements. Yi shooed the monkey away, but the agile creature took great amusement in turning Yi\'s own techniques against him. Gradually, Yi felt his anger subside as he sparred with the playful animal, and when the burden of his hatred had fully lifted, he found he had caught the monkey by his tail. Yi then understood that he would never master Wuju so long as he pursued it for vengeance, and as he let go of the monkey, he also released his desire to shed his enemy\'s blood. Yi thanked the monkey for showing him what he\'d been blind to, and was surprised when the creature actually replied. He wished to learn Yi\'s art of fighting. It was an odd request, but through it Yi saw his new path: the way to honor the memory of his lost people was to pass their teachings on to a new generation.\'\'The edge of the sharpest blade is no match for the calm of the peaceful mind.\'\' -- Master Yi"
      },
      "Taric": {
         "id": 44,
         "title": "the Shield of Valoran",
         "name": "Taric",
         "key": "Taric",
         "lore": "\'\'The best weapons are beautiful.\'\'Taric is the Aspect of the Protector, wielding incredible power as Runeterra\'s guardian of life, love, and beauty. Shamed by a dereliction of duty and exiled from his homeland Demacia, Taric ascended Mount Targon to find redemption, only to discover a higher calling among the stars. Imbued with the might of ancient Targon, the Shield of Valoran now stands ever vigilant against the insidious corruption of the Void."
      },
      "Amumu": {
         "id": 32,
         "title": "the Sad Mummy",
         "name": "Amumu",
         "key": "Amumu",
         "lore": "Amumu is a diminutive, animated cadaver who wanders the world, trying to discover his true identity. He rose from an ancient Shuriman tomb bound in corpse wrappings with no knowledge of his past, consumed with an uncontrollable sadness."
      },
      "Gangplank": {
         "id": 41,
         "title": "the Saltwater Scourge",
         "name": "Gangplank",
         "key": "Gangplank",
         "lore": "\'\'I was cutting throats and sinking Noxian war galleys when you were still pissing your britches, boy. You don\'t want to take me on.\'\'As unpredictable as he is brutal, the dethroned reaver king known as Gangplank is feared far and wide. Where he goes, death and ruin follow, and such is his infamy and reputation that the merest sight of his black sails on the horizon causes panic among even the hardiest crew."
      },
      "Trundle": {
         "id": 48,
         "title": "the Troll King",
         "name": "Trundle",
         "key": "Trundle",
         "lore": "Trundle is a hulking and devious troll with a mischievous streak. There is nothing he can\'t beat into submission and bend to his will, not even the ice itself. With his massive, frozen club, he chills his enemies to the core and runs them through with jagged shards of ice. Fiercely territorial, Trundle chases down anyone foolish enough to enter his domain and laughs as they bleed onto the tundra.Trundle\'s warband once followed a foolish and cowardly chieftain. Under such a weak leader, Trundle feared he and his kin would fall prey to the other troll hordes scattered across the tundra. When his challenge to the chieftain ended in humiliation, Trundle did something that wasn\'t very troll-like: instead of his fists, he turned to his wits. Thinking on his hairy feet, he spun a tall tale about the troll leaders of old, claiming they wielded weapons of great power as symbols of their right to rule. Though he\'d made up the story on the spot, Trundle wagered that if he could find or steal such a weapon, he would become the rightful leader of the warband. The trolls believed him, but none thought him capable of undertaking such a challenge. Knowing the boastful troll would die trying, the foolish chieftain agreed and Trundle departed to the familiar sound of laughter.Alone but undaunted, Trundle ventured into the foreboding realm of the dreaded Ice Witch. There, hidden among the many ancient and dangerous secrets, he hoped to find a weapon to prove his elaborate tale. He out-muscled the Ice Witch\'s guards and outsmarted her dark magic traps, but nothing he scavenged matched the power he\'d described to his kin. Finally, he found an unexpected prize: a huge and magical club of never-melting True Ice. Grasping the weapon, he marveled at the cold power that ran through him. But then the wrathful Ice Witch herself appeared. As she summoned her dark magic, Trundle believed he had met his end, but another clever idea struck him. With a knowing grin, he offered the Ice Witch a devious proposition: a troll army, he told her, would be of much more use to her than one troll corpse....When Trundle returned to the warband, his fellow trolls bowed to his conquest. Calling his weapon \'\'Boneshiver,\'\' he took a moment to enjoy the look of numb shock on his chieftain\'s face before he caved it in. Seizing command, Trundle announced that there would no longer be chieftains - only a Troll King before whom all of his kind would kneel. The trolls rallied behind their brash, new leader and prepared for the coming war. With Trundle leading the charge, the time of the trolls had finally come.\'\'Outsmart anyone you can\'t beat, and beat anyone you can\'t outsmart.\'\' -- Trundle"
      },
      "Kassadin": {
         "id": 38,
         "title": "the Void Walker",
         "name": "Kassadin",
         "key": "Kassadin",
         "lore": "There is a place between dimensions and between worlds. To some it is known as the Outside, to others it is the Unknown. To most, however, it is called the Void. Despite its name, the Void is not an empty place, but rather the home of unspeakable things, horrors not meant for minds of men. Though such knowledge is lost in modern times, there are those who have unwittingly discovered what lies beyond, and they have been unable to turn away. Kassadin is such a creature. He was once a man forced to look upon the face of the Void and forever changed by what he saw. Once a seeker of forbidden knowledge, he discovered that what he sought was something else entirely. He is one of the few that has found his way to forgotten Icathia and lived to tell the tale, following the scant breadcrumbs hidden in ancient texts.Within a decaying cyclopean city, Kassadin found secrets of the kind that he will never share - secrets that made him quake with fear at the visions of things to come that were thrust upon him. The power of the place threatened to consume him forever, but Kassadin took the only route available to him in order to survive - he let the Void inside him. Miraculously, he was able to overcome the alien urges that went with it, and he emerged as something more than human. Though a part of him died that day, he knows that he must protect Valoran from the things scratching at the door, waiting to get in and visit their torments upon the world. They are only one step away... something to which the appearance of the abomination known as Cho\'Gath attests.If you look upon the Void, you can\'t put it behind you. If you look upon Kassadin, he is probably already there."
      },
      "Velkoz": {
         "id": 161,
         "title": "the Eye of the Void",
         "name": "Vel\'Koz",
         "key": "Velkoz",
         "lore": "I pass into the sudden glare. Blink. Blink, blink, blink. My eyes adjust and evaluate the landscape before me.There\'s a scurrying. I look down to find a small, white creature standing on its hind legs, sniffing at my body. It intrigues me.What use are you?I analyze the creature. A flash of hot magenta light, a dust pile where it was quivering.Mammalian... Nocturnal... Impeccable hearing. Incredibly weak. Yet they breed so prodigiously.\'\'Hm,\'\' I mutter to myself. Hopefully there will be more complex things to be found; those fascinate me.Consume and learn: this is my purpose. The others who travel with me are primitive: kill and eat, kill and eat. I need to gather all available information - harvest any valuable resources.Eventually, we come upon a destroyed city, save for one pristine tower. It appears to be protected - or intentionally left standing. I deconstruct the composition of the ruins. My analysis suggests this habitat was a place of great magic; I\'m not surprised it was a target of such destruction. There is something compelling about the tower. While the others are off scavenging, I enter the citadel.Cryptic instruments are strewn about. I examine one. Another flash of hot magenta light, another dust pile.Fascinating: a tool to alter their concept of time.Strange.Unprecedented.From the state of the tower, it seems the owner departed only recently. The artifacts left behind have existed in more than one time and place. Some are more complex than others; all are more impressive than anything I have seen on this plane. Clearly, the owner knows things I have not encountered in any of my travels.I require such knowledge.Leaving the tower, I find the others closing in on the entrance, ready to destroy it as they have destroyed everything else we have met. They will only get in the way of my goal. There are some things the Void should not consume indiscriminately.Without warning, I lash out a tentacle, its tip glowing white hot. Lightning arcs through the first creature, knocking it back. Its screams fade as I extend all three limbs, energy crackling between them, scorching the air where the streams meet. The other two run; they know what\'s coming.Must they always flee?I open my eye wide and unleash a beam of energy, following the escaping creatures. They are instantly reduced to ash. \'\'Hmm. Void-native melting point is inconsistent,\'\' I note.But that is of no consequence. The hunger inside me grows. I am ravenous. Insatiable, as never before.I have glimpsed the ultimate knowledge.And I will have it."
      },
      "Zyra": {
         "id": 143,
         "title": "Rise of the Thorns",
         "name": "Zyra",
         "key": "Zyra",
         "lore": "Longing to take control of her fate, the ancient, dying plant Zyra transferred her consciousness into a human body for a second chance at life. Centuries ago, she and her kind dominated the Kumungu Jungle, using thorns and vines to consume any animal that set foot in their territory. As the years passed, the animal population steadily died off. Food became increasingly scarce, and Zyra could only stand by helplessly as the last of her kin withered away. She thought she would perish alone, until the appearance of an unwary sorceress presented her with an opportunity for salvation.It was the first time in years Zyra had sensed a creature wander so close. Hunger drew her to the sorceress, but some other, deeper instinct compelled her. She enveloped the woman in thorns with ease, but as she savored this final meal, foreign memories invaded her thoughts. She saw great jungles of metal and stone where humans and animals thrived. Potent magic surged through her vines, and she devised an elegant but risky plan to survive. Using the woman\'s memories, Zyra poured her newfound magic into the creation of a human-shaped vessel. She didn\'t know what sort of world awaited her, but she had nothing left to lose. When Zyra opened her eyes, she was overwhelmed by the raw power ready at her fingertips. It wasn\'t until she noticed the shriveled remains of the plant she once was that she realized how vulnerable she had become. If this body died, there would be no network of vines to retreat through, no roots to regrow her... but she felt truly alive. She beheld the world for the first time as animals did, and a dark smile crept across her lips. She was reborn, and there was so much now within her grasp.\'\'Closer to the flower, closer to the thorns.\'\'--Zyra"
      },
      "Nami": {
         "id": 267,
         "title": "the Tidecaller",
         "name": "Nami",
         "key": "Nami",
         "lore": "Nami channels the primal energies of the ocean, harnessing its mystical restorative properties and commanding the raw power of the tides themselves. Though many doubted her, Nami had the bravery and determination to take on a dangerous quest when no one else would. Now her people believe she is the Tidecaller, a chosen one destined to complete a quest essential to the survival of her entire race.The Tidecaller\'s sacred duty is to acquire a moonstone, a powerful object found only in the towering reaches of the surface world. Her people, the Marai, rely on the moonstone\'s light to ward off the terrors of the depths. However, the stone\'s power lasts only one hundred years. Before its light fades, the Tidecaller must journey into the Great Deep, retrieve an abyssal pearl, and carry it to the surface. There, on the night of the winter solstice of the hundredth year, the Tidecaller makes a ceremonial exchange with a landwalker bearing a moonstone. By trading the pearl for the moonstone, the Tidecaller ensures the survival of the Marai for another century.However, in Nami\'s time, as the hundred years drew to a close, no Tidecaller had been found. Without a chosen one to complete the quest, her people would face disaster, but the Marai waited in faith that the Tidecaller would appear. Nami refused to sit idle, insisting that without a Tidecaller to save them, someone had to act. Bravely, she decided to begin the quest herself and ventured alone into the dangerous depths. None expected her to survive, but after six days of battles with untold horrors, Nami returned with the pearl in hand. The Marai hailed her as the new Tidecaller. All that remained was for Nami to journey to the surface and complete the exchange.When Nami arrived at the surface, however, she found only an empty shore. She waited for days in a mystic cove, unsure of what to do. In all the legends of the Tidecallers, the bearer of the moonstone had never failed to arrive. Nami faced a choice. She knew the surface world only through tale and rumor, but the survival of the Marai depended upon her. Summoning the tide to bear her ashore, Nami began her search for the moonstone and became the first of her kind to explore the world above the ocean. She left her home behind, and vowed not to return until she had completed the Tidecaller\'s quest.\'\'I am the tide, and I cannot be turned.\'\'-- Nami"
      },
      "JarvanIV": {
         "id": 59,
         "title": "the Exemplar of Demacia",
         "name": "Jarvan IV",
         "key": "JarvanIV",
         "lore": "\'\'There is only one truth, and you will find it at the point of my lance.\'\'As the royal family of Demacia for centuries, members of the Lightshield line have spent their lives waging war against any who opposed Demacian ethics. It is said that every Lightshield is born with anti-Noxian sentiment in his blood, and Jarvan IV is no exception.As his forefathers had before him, he led Demacian troops into bloody engagements with Noxian forces, and on many occasions he has bled alongside wounded allies and fallen comrades. His most crushing defeat came at the hands of Jericho Swain, where he was outmaneuvered and captured by a Noxian battalion. This mistake nearly cost him his life at the hands of Urgot, but he was rescued by the Dauntless Vanguard, an elite Demacian strike force led by Jarvan\'s childhood companion, Garen.Those close to him believed that his capture changed him. Xin Zhao was quoted as saying: \'\'His eyes never seemed to look at you, only through you to something he could not look away from.\'\'One day, without warning, Jarvan IV hand-picked a squad of Demacian soldiers and left Demacia, vowing to find \'\'atonement\'\'. He began by tracking and hunting the most dangerous beasts and bandits he could find in northern Valoran, but he soon tired of such prey. Seeking something that only he understood, he ventured south of the Great Barrier. He wasn\'t heard from again for nearly two years.After many had assumed the worst, he returned to glorious fanfare on the streets of Demacia. His Demacian plates were adorned with the bones and scales of creatures unknown. His eyes bore the wisdom of someone twice his age. Of the twelve soldiers who had departed with him, only two returned. In a tone as cold and steady as steel, he swore to bring the enemies of Demacia to their knees."
      },
      "Ezreal": {
         "id": 81,
         "title": "the Prodigal Explorer",
         "name": "Ezreal",
         "key": "Ezreal",
         "lore": "The intrepid young adventurer Ezreal has explored some of the most remote and abandoned locations on Runeterra. During an expedition to the buried ruins of ancient Shurima, he recovered an amulet of incredible mystical power. Likely constructed to be worn by one of the Ascended, the enormous talisman nonetheless fit snugly upon his arm, amplifying his raw sorcerous skill to such an extent that he\'s gained the reputation of a hero, much to his embarrassment."
      }
   }}';

    return view('champion')->with('Champs', json_decode($Champs, true));
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['
}middleware' => ['web']], function () {
    //
});
