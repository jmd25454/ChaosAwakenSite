<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request, $id = 1)
    {
        return view('home', compact('id'));
    }

    public function about(Request $request, $id = 2)
    {
        return view('home', compact('id'));
    }

    public function downloads(Request $request, $id = 3)
    {
        $downloads = array_reverse($this->downloadLinks());
        return view('home', compact('id', 'downloads'));
    }

    public function gallery(Request $request, $id = 4)
    {
        $mobs = json_decode(json_encode($this->mobs()), FALSE);
        return view('home', compact('id', 'mobs'));
    }

    public function downloadLinks()
    {
        return array(
            '1' => array(
                'link' => '/mod/ChaosAwakensAlpha1.16.5v0.1.jar',
                'version' => 'Chaos Awakens Alpha - v0.1 - v0.1',
                'description' => '<p>
                - Added Emerald Sword, Pickaxe, Shovel, Axe and Hoe. <br>
                - Added Emerald Helmet, Chestplate, Leggings and Boots. <br>
                - Added Amethyst and Ruby. <br>
                - Added Untextured Tigers Eye, Titanium, Titanium Nugget, Uranium, Uranium Nugget and Aluminium. <br>
                - Added Untextured Ruby Block, Tigers Eye Block, Titanium Block, Uranium Block, Aluminium Block.
            </p>'
            ),
            '2' => array(
                'link' => '/mod/ChaosAwakensAlpha1.16.5v0.2.jar',
                'version' => 'Chaos Awakens Alpha - v0.2 - v0.2',
                'description' => '<p>
                - Added Amethyst Ore, Ruby Ore. <br>
                - Added Untextured Tigers Eye Ore, Titanium Ore, Uranium Ore and Aluminium Ore. <br>
                - Added Amethyst Sword, Pickaxe, Shovel, Axe and Hoe. <br>
                - Added Amethyst Helmet, Chestplate, Leggings and Boots. <br>
                - Added Ruby Sword, Pickaxe, Shovel, Axe and Hoe. <br>
                - Added Untextured Ruby Helmet, Chestplate, Leggings and Boots. <br>
                - Added Untextured Tigers Eye Sword, Pickaxe, Shovel, Axe and Hoe. <br>
                - Added Untextured Tigers Eye Helmet, Chestplate, Leggings and Boots.
            </p>'
            ),
            '3' => array(
                'link' => '/mod/ChaosAwakensAlpha1.16.5v0.3.jar',
                'version' => 'Chaos Awakens Alpha - v0.3 - v0.3',
                'description' => '<p>
                - Added Titanium Ore and Uranium Ore Textures. <br>
                - Added Amethyst Block, Ruby Block, Titanium Block and Uranium Block Textures. <br>
                - Added Titanium Ingot and Uranium Ingot Textures. <br>
                - Added Titanium Nugget and Uranium Nugget Textures. <br>
                - Added Ruby Helmet, Chestplate, Leggings and Boots Textures. <br>
                - Updated Amethyst and Ruby Textures. <br>
                - Updated Amethyst Sword, Pickaxe, Shovel, Axe and Hoe Textures. <br>
                - Updated Amethyst Helmet, Chestplate, Leggings and Boots Textures. <br>
                - Updated Ruby Sword, Pickaxe, Shovel, Axe and Hoe Textures. <br>
                - Updated Emerald Sword, Pickaxe, Shovel, Axe and Hoe Textures. <br>
                - Updated Emerald Helmet, Chestplate, Leggings and Boots Textures.
            </p>'
            ),
            '4' => array(
                'link' => '/mod/ChaosAwakensAlpha1.16.5v0.4.jar',
                'version' => 'Chaos Awakens Alpha - v0.4 - v0.4',
                'description' => '<p>
                - Added Aluminium Ore Textures. <br>
                - Added Tigers Eye Block and Aluminium Block Textures. <br>
                - Added Cooked Corndog, Raw Corndog, Cooked Bacon and Raw Bacon. <br>
                - Added Corn, Tomato, Lettuce, Cheese, Garden Salad and BLT. <br>
                - Added Aluminium Ingot Textures. <br>
                - Added Tigers Eye Helmet, Chestplate, Leggings and Boots Textures. <br>
                - Added Ultimate Sword, Pickaxe, Shovel, Axe and Hoe Textures. <br>
                - Added Ultimate Helmet, Chestplate, Leggings and Boots Textures. <br>
                - Added Thunder Staff. <br>
                - Added Tigers Eye Texture. <br>
                - Fixed Titanium, Uranium and Aluminium not having Ingot in their names.
            </p>'
            ),
            '5' => array(
                'link' => '/mod/ChaosAwakensBeta1.16.5v0.5.jar',
                'version' => 'Chaos Awakens Beta - v0.1 - v0.5',
                'description' => '<p>
                - Added Ent. <br>
                - Added Tigers Eye Ore Texture. <br>
                - Added Tigers Eye Sword, Pickaxe, Shovel, Axe and Hoe Textures. <br>
                - Updated Tigers Eye Block, Titanium Block, Uranium Block and Aluminium Block Textures. <br>
                - Updated Titanium Ingot, Uranium Ingot and Aluminium Ingot Textures. <br>
                - Updated Titanium Nugget, Uranium Nugget Textures. <br>
                - Updated Tigers Eye Helmet, Chestplate, Leggings and Boots Textures. <br>
                - Updated Tigers Eye Texture.
            </p>'
            ),
            '6' => array(
                'link' => '/mod/ChaosAwakensBeta1.16.5v0.6.jar',
                'version' => 'Chaos Awakens Beta - v0.2 - v0.6',
                'description' => '<p>
                - Added Experience Sword. <br>
                - Added Experience Helmet, Chestplate, Leggings and Boots Textures. <br>
                - Added Auto Enchants to Ultimate Set and Emerald Pickaxe.
            </p>'
            ),
            '7' => array(
                'link' => '/mod/ChaosAwakensBeta1.16.5v0.7.jar',
                'version' => 'Chaos Awakens Beta - v0.3 - v0.7',
                'description' => '<p>
                - Added Creative Tabs. <br>
                - Added Cooked Peacock Leg, Raw Peacock Leg, Cooked Crab Meat and Raw Crab Meat. <br>
                - Added Strawberry, Peach, Radish, Radish Stew, Cherries Butter and Salt. <br>
                - Added Green Fish, Rock Fish, Wood Fish, Spark Fish and Lava Eel. <br>
                - Added Strawberry Seeds, Cherry Seeds, Apple Tree Seeds, Peach Seeds, Corn Seeds, Lettuce Seeds and Radish Seeds. <br>
                - Added Ultimate Bow. <br>
                - Added Nightmare Sword, Poison Sword, Rat Sword, Fairy Sword and Big Hammer. <br>
                - Added Prismatic Reaper. <br>
                - Added Salt Ore, Red Ant Infested Ore and Termite Infested Ore. <br>
                - Added Fossilised Ent, Fossilised Hercules Beetle, Fossilised Ruby Bug, Fossilised Emerald Gator. <br>
                - Added Gate Block and Ent Dungeon Wood. <br>
                - Added Ent Dungeon. <br>
                - Added Ent, Red Ant, Brown Ant, Rainbow Ant, Unstable Ant, Termite, Hercules Beetle, Ruby Bug, Emerald Gator, Robo Sniper, Beaver, Apple Cow and Golden Apple Cow. <br>
                - Added Iron Golem and Snow Golem Spawn Eggs. <br>
                - Added Ant Nests and Termite Nests. (UNUSED) <br>
                - Updated Cooked Corndog, Raw Corndog, Cooked Bacon and Raw Bacon Textures. <br>
                - Updated Corn, Tomato, Lettuce, Cheese and BLT Textures. <br>
                - Updated Ultimate Sword, Pickaxe, Shovel, Axe and Hoe Textures. <br>
                - Updated Lava Eel Helmet, Chestplate, Leggings and Boots Textures. <br>
                - Updated Lapis Lazuli Helmet, Chestplate, Leggings and Boots Textures.
            </p>'
            ),
            '8' => array(
                'link' => '/mod/ChaosAwakensBeta1.16.5v0.7b.jar',
                'version' => 'Chaos Awakens Beta - v0.4 - v0.7b',
                'description' => "<p>
                <u><b>UNKNOWN CHANGES</b></u>
            </p>"
            ),
            '9' => array(
                'link' => '/mod/ChaosAwakensBeta1.16.5v0.8.jar',
                'version' => 'Chaos Awakens Beta - v0.5 - v0.8',
                'description' => "<p>
                - Updated Amethyst Ore and Ruby Ore Textures. <br>
                - Added Copper Ore, Tin Ore, Silver Ore, Platinum Ore, Sunstone Ore and Bloodstone Ore. <br>
                - Added Copper Block, Tin Block, Silver Block, Platinum Block, Sunstone Block and Bloodstone Block. <br>
                - Added Pink Tourmaline Block, Cat's Eye Block, Crystal Grass Block, Kyanite Block. <br>
                - Added Pink Tourmaline Cluster, Cat's Eye Cluster and Crystal Energy. <br>
                - Added Budding Pink Tourmaline and Budding Cat's Eye <br>
                - Added Crystal Log, Crystal Wood, Crystal Wood Planks, Red Crystal Leaves, Green Crystal Leaves and Yellow Crystal Leaves. <br>
                - Added Crystal Crafting Table and Crystal Furnace. <br>
                - Added Crystal Apple. <br>
                - Added Golden Foods. <br>
                - Added Candy Cane and Ultimate Apple. <br>
                - Added Copper Lump, Tin Lump, Silver Lump and Platinum Lump. <br>
                - Added Pink Tourmaline Ingot and Cat's Eye Ingot. <br>
                - Added Pink Tourmaline Nugget and Cat's Eye Nugget. <br>
                - Added Dead Irukandji, Peacock Feather and Crystal Wood Shard. <br>
                - Added Irukandji Arrow, Skate String Bow and A Freakin' Ray Gun. <br>
                - Added Crystal Torch and Sunstone Torch. <br>
                - Added Copper Sword, Pickaxe, Shovel, Axe and Hoe Textures. <br>
                - Added Copper Helmet, Chestplate, Leggings and Boots Textures. <br>
                - Added Tin Sword, Pickaxe, Shovel, Axe and Hoe Textures. <br>
                - Added Tin Helmet, Chestplate, Leggings and Boots Textures. <br>
                - Added Silver Sword, Pickaxe, Shovel, Axe and Hoe Textures. <br>
                - Added Silver Helmet, Chestplate, Leggings and Boots Textures. <br>
                - Added Platinum Sword, Pickaxe, Shovel, Axe and Hoe Textures. <br>
                - Added Platinum Helmet, Chestplate, Leggings and Boots Textures. <br>
                - Added Peacock Feather Helmet, Chestplate, Leggings and Boots Textures. <br>
                - Added Crystal Wood Sword, Pickaxe, Shovel, Axe and Hoe Textures. <br>
                - Added Kyanite Sword, Pickaxe, Shovel, Axe and Hoe Textures. <br>
                - Added Pink Tourmaline Sword, Pickaxe, Shovel, Axe and Hoe Textures. <br>
                - Added Pink Tourmaline Helmet, Chestplate, Leggings and Boots Textures. <br>
                - Added Cat's Eye Sword, Pickaxe, Shovel, Axe and Hoe Textures. <br>
                - Added Cat's Eye Helmet, Chestplate, Leggings and Boots Textures. <br>
                - Added Instant Survival Shelter. <br>
                - Added Extra Small Zoo Cage, Small Zoo Cage, Medium Zoo Cage, Large Zoo Cage and Extra Large Zoo Cage. <br>
                - Added Robo Warrior, Enchanted Golden Apple Cow and Crystal Apple Cow. <br>
                - Ant Nests and Termite Nests now have Biome Dependent coloring. <br>
                - Item and Food Creative Tabs are now separate. <br>
                - Removed Ent Dungeon Wood.
            </p>"
            ),
            '10' => array(
                'link' => '/mod/ChaosAwakensBeta1.16.5v0.8b.jar',
                'version' => 'Chaos Awakens Beta - v0.6 - v0.8b',
                'description' => '<p>
                <u><b>UNKNOWN CHANGES</b></u>
            </p>'
            ),
            '11' => array(
                'link' => '/mod/ChaosAwakensBeta1.16.5v0.8c.jar',
                'version' => 'Chaos Awakens Beta - v0.7 - v0.8c',
                'description' => '<p>
                - Added Extreme Torch.
            </p>'
            ),
            '12' => array(
                'link' => '/mod/ChaosAwakensBeta1.16.5v0.8d.jar',
                'version' => 'Chaos Awakens Beta - v0.7 - v0.8d',
                'description' => '<p>
                - Added Random Teleport Block.
            </p>'
            ),
            '13' => array(
                'link' => '/mod/chaosawakens-1.16.5-0.9.0.0.jar',
                'version' => 'Chaos Awakens - v0.9',
                'description' => "<p>
                - Added corn and tomato crops work *and* generate in the world. <br>
                - Added tube worms. <br>
                - Added Advancements. <br>
                - Ant and termite nests now spawn and function! Added crystal termite nest. <br>
                - Illusioners can now spawn in village raids! <br>
                - Giants now have some AI! <br>
                - You can trade for some Chaos Awakens items from villagers! Try a farmer, butcher, fletcher or a wandering trader, you may get lucky. <br>
                - Added spawn eggs for some vanilla mobs. The illusioner, the giant, the wither and the ender dragon. <br>
                - Added 7 new variants of Ent(for every vanilla wood type), for your Ent-y needs! <br>
                - Added 7 new variants of Ent Tree dungeons and updated the trap! Gotta see 'em all! <br>
                - Added Wasps and their hives. Also added a 'nest block' that is a decorative bees nest. <br>
                - Added the Stinkbug and the Dead Stinkbug item. <br>
                - Ore generation rebalances! <br>
                - Added nether ruby ore. Now you can find rubies in Nether lava pockets. <br>
                - Royal guardian boots now give slow falling only when shifting. <br>
                - Added apple, cherry and peach trees with delicious fruits! <br>
                - Added dupe tree wood, currently has no function! <br>
                - Added ender pearl and eye of ender blocks! <br>
                - Added big bertha and the blade, the guard and the handle! (currently unobtainable) <br>
                - Added battleaxe and queen scale battleaxe! (currently unobtainable) <br>
                - Added ultimate fishing rod! (doesn't work properly yet) <br>
                - Added moth scale, royal guardian and queen scale armors! (currently unobtainable) <br>
                - Added miners dream! The mines are mineier! Added moldy wood planks and mining lamps. <br>
                - Added fossilised wtf, scorpion, wasp and piraporu. Only the wasp is usable. <br>
                - Added queen scale, ender dragon scale, mantis claw, moth scales, nightmare scale, vortex eye and triffid goo! (Only the ender dragon scale is obtainable)<br>
                - Added some coins. <br>
                - Added random teleport block! <br>
                - Added custom tooltip descriptions. <br>
                - Changes to village mania. Fruit trees and crops spawn here and more mob spawning! <br>
                - Changes to mining dimension. Stalagmite valley biome! <br>
                - Added extra config options. <br>
                - You can now breed enchanted golden apple cows if you enable a config option. <br>
                - You can make zombie, skeletons, creepers and the ender dragon drop their mob heads or disable it with a config option. <br>
                - You can make the ender dragon place a dragon egg after each death instead of only the first death. <br>
                - Bug fixes! <br>
                - <i>Lore intensifies!</i> You can disable tooltips if you want to, they exist now. <br>
                - Some nice updated textures! <br>
                - And a lot more!
            </p>"
            ),
            '14' => array(
                'link' => '/mod/chaosawakens-1.16.5-0.9.0.1.jar',
                'version' => 'Chaos Awakens - v0.9.0.1',
                'description' => '<p>
                - Fixed ultimate gear being uncraftable. <br>
                - Netherite ingots no longer can be used to craft ultimate gear, only platinum can. <br>
                - Fixed hercules beetle and stink bug animations. <br>
                - Read 0.9.0.0 changelog.
            </p>'
            ),
            '15' => array(
                'link' => '/mod/chaosawakens-1.16.5-0.9.0.2.jar',
                'version' => 'Chaos Awakens - v0.9.0.2',
                'description' => '<p>
                - Peacock and queen scale boots now cause feather falling only when you press shift. Be advised the slow fall lasts for 3 seconds! <br>
                - Village mania is now fixed! Go explore some villages and kill some robos. <br>
                - Dirt no longer spawns in the stalagmite valley biome in the mining paradise. <br>
                - Ent trees no longer spawn in village mania, crystalworld or mining paradise. <br>
                - Caves do not spawn in the village mania. <br>
                - Fixed not being able to start servers with the mod installed. <br>
                - Read 0.9.0.0 and 0.9.0.1 changelogs.
            </p>'
            ),
            '16' => array(
                'link' => '/mod/chaosawakens-1.16.5-0.9.0.3.jar',
                'version' => 'Chaos Awakens - v0.9.0.3',
                'description' => '<p>
                - Fixed crash when trying to use Royal Guardian Armor on an Anvil. <br>
                - Fixed crash when attempting to use the Ent Spawn Egg. <br>
                - Stink bug now gives nausea when attacked. <br>
                <b>PATCH:</b> <br>
                - Fixed crash on startup. <br>
                - Added some tags. Fixes not being able to use custom logs and planks for vanilla recipes that use them like sticks. <br>
                - Apple Cows can now sometimes spawn with a new fancy texture! Happy Halloween!
            </p>'
            ),
            '17' => array(
                'link' => '/mod/chaosawakens-1.16.5-0.9.0.4 (April Fools Update).jar',
                'version' => 'Chaos Awakens - v0.9.0.4',
                'description' => "<p>
                <b>Items</b> <br>
                - Spawn Eggs for the Ents have been separated. Each Ent has its own spawn egg now. <br>
                - Added the Poppy Sword. Also gives the poison effect. <br>
                - Poison Sword now gives Confusion. I mean why did it give every effect except the one the mob it came from gives. lol <br>
                - All foods that give good effects now give bad effects instead. (Except the item below) <br>
                - Hot Flaming Cheetos have been added to Chaos Awakens. <br> <br>
                <b>Blocks</b> <br>
                - Ant Infested Ores now show up as the ore in The One Probe UI instead of the Infested Ores. <br>
                - Ant Nest Blocks now only spawn ants if a player is nearby and if there aren't many ants nearby. Ant nests don't spawn ants if there is rain on the block above it. Ant Nests spawn more common in Red Ant and Termite Dimensions. <br>
                - Cherry Cobblestone was added to the mod. IF you light it on fire you get Cherry Fire. <br>
                - Standing in Cherry Fire or on a Cherry Campfire you get Regeneration and Health Boost. <br>
                - Cherry Lanterns and Cherry Torches are in the mod. Based on the Cherry Fire. <br>
                - Separate Fossilised Ent Fossils. There is now a fossil for all 8 Ents. <br> <br>
                <b>Structures</b> <br>
                - A structure called the ultimate house has been added to Chaos Awakens. The structure has a basement with some ultimate ores. You could call this an Ultimate Basement. <br> <br>
                <b>Entities</b> <br>
                - A feature from the last update that was forgotten in the changelog was that Golden Apple Cows and the Enchanted Golden Apple Cows give off sparkle particle effects. <br>
                - Apple Cows have new animations now. The Enchanted Golden Apple Cow has a better glint now. <br>
                - Ants seem to be a little bigger now and drop more exp. <br>
                - Ants seem to teleport you to the wrong dimension. Oops! who messed up the teleporter. <br>
                - Ents are 80% cuter. Ents have shrunk to a very small size. <br>
                - Some villager trades that are in the mod were updated a bit. Wandering Traders, Farmers, Fletchers and Fisherman now give more items. <br> <br>
                <b>Advancements</b> <br>
                - Added an Advancement for killing Ants. They seem big enough for an advancement. <br>
                - Added an Advancement for obtaining the Poppy Sword. Why was the Rose Sword even in Orespawn... <br>
                - Fixed All Armor Advancement requiring Moth Scale Armour which is unobtainable. <br>
                - Shiny Cows advancement can now be gotten by breeding Enchanted Golden Apple Cows. <br> <br>
                <b>Dimensions</b> <br>
                - Teleporting to the Crystal World now requires an empty inventory. You can disable this in the config. <br> <br>
                <b>Commands</b> <br>
                - Added the '/chaosawakens' command. Syntax includes 'website', 'discord', 'github', 'wiki', 'reddit' and 'version'. <br> <br>
                <b>Chat</b> <br>
                - Typing 'April Fools!' in chat will make you drop any items in your inventory. Clumsy!
            </p>"
            ),
            '18' => array(
                'link' => '/mod/chaosawakens-1.16.5-0.10.0.0.jar',
                'version' => 'Chaos Awakens - v0.10.0.0',
                'description' => "<p>
                <b>From April Fools Update | Anything mentioned in the April Fools 0.9.0.4 Changelog but not listed here is not in this version.</b> <br>
                - Spawn Eggs for the Ents have been separated. Each Ent has its own spawn egg now. <br>
                - Poison Sword now gives Confusion. I mean why did it give every effect except the one the mob it came from gives. lol <br>
                - Ant Infested Ores now show up as the ore in The One Probe UI instead of the Infested Ores. <br>
                - Ant Nest Blocks now only spawn ants if a player is nearby and if there aren't many ants nearby. <br>
                - Ant Nests do not spawn ants if there is rain on the block above it. <br>
                - Ant Nests spawn more common in Red Ant and Termite Dimensions. <br>
                - Separate Fossilised Ent Fossils. There is now a fossil for all 8 Ents. <br>
                - A feature from the last update that was forgotten in the changelog was that Golden Apple Cows and the Enchanted Golden Apple Cows give off sparkle particle effects. <br>
                - Apple Cows have new animations now. The Enchanted Golden Apple Cow has a better glint now. <br>
                - Some villager trades that are in the mod were updated a bit. Wandering Traders, Farmers, Fletchers and Fisherman now give more items. <br>
                - Fixed All Armor Advancement requiring Moth Scale Armour which is unobtainable. <br>
                - Shiny Cows advancement can now be gotten by breeding Enchanted Golden Apple Cows. <br>
                - Teleporting to the Crystal World now requires an empty inventory. You can disable this in the config. Teleporting out of the Crystal Dimension does not require an empty inventory. <br>
                - Added the '/chaosawakens' command. Syntax includes 'website', 'discord', 'github', 'wiki', 'reddit' and 'version'. <br> <br>

                <b>IMPORTANT:</b> <br>
                - AttributeFix is now required.
                - Geckolib 3.0.77 is the required version of Geckolib.

                <b>Blocks:</b> <br>
                - Apple Log and Block of Platinum textures were changed. <br>
                - Added Skywood and Ginkgo Wood. <br>
                - Added Buttons, Fences, Fence Gates, Pressure Plates, Signs, Slabs, Stairs and Trapdoors for all woods from this mod. <br>
                - Peach Leaves now have their colour. Adding colour to the grey things in life. <br>
                - Added Salt Block. If ants walk on this block they will die. <br>
                - Added Ruby Ore in Blackstone. This has caused a rename for Nether Ruby Ore to Netherrack Ruby Ore. <br>
                - Gate Blocks no longer make loud anvil sounds when being dissipated. <br>
                - Leaves drop their fruit, saplings and sticks now. <br>
                - Uranium Ore no longer explodes. <br>
                - Crystal Furnace now requires Crystal Energy to be the fuel source it uses. <br>
                - Added Gate Blocks for all Vanilla Woods, Chaos Awakens Woods and Mushrooms. <br>
                - Gate Blocks have a new cool top texture! <br>
                - Updated Crystalworld Blocks, so they do not X-Ray in the Overworld. They also connect with each other. <br>
                - Added the Cyan Rose, Red Rose and Paeonia, the nostalgia is strong with this one. <br>
                - Added Potted Plants for all Chaos Awakens Flowers and Saplings. <br>
                - Added Radish and Lettuce Plants. <br>
                - Mining Level to break some Ores and Blocks have been updated. <br>
                - Gate Blocks and the Nest Blocks in Wasp Nests can now be obtained. <br>
                - Added Dense Grass Block, Dense Dirt and Dense Red Ant Nest. The Grass Blocks and Ant Nests for the Mining Paradise. <br>
                - Added Dense Grass, Tall Dense Grass, Thorny Sun, Blue Bulb, Purple Bulb, Pink Bulb. All are Plants for the Mining Paradise. <br>
                - Added Crystal Grass, Tall Crystal Grass Crystal Growths and Crystal Flowers. <br>
                - Added Leaf Carpets to all Vanilla and Chaos Awakens Leaf Blocks. <br>
                - Added Robo Blocks, Lamps and Pillars. (Slabs, Stairs and Walls!) [Unobtainable in Survival] <br>
                - Added Marble and Limestone and their Polished, Brick (Cracked and Mossy), Pillar and Chiseled variants. (Slabs, Stairs and Walls!) <br>
                - Added Bricks and Cracked Bricks for all Terracotta Colours. (Slabs, Stairs and Walls!) <br>
                - Lower DZ Ore Spawning rates in the overworld in case the overworld DZ ores are enabled. <br>
                - Updated the loot tables of copper, platinum, silver and tin. They no longer just drop their ores. <br> <br>

                <b>Items:</b> <br>
                - Amethyst, Titanium Ingot and Uranium Ingot textures were changed. <br>
                - Updated the Ultimate Pickaxe, Ultimate Axe, Ultimate Shovel and Ultimate Bow Textures. <br>
                - Ultimate Armour Model texture while being worn has been immensely updated. <br>
                - Queen Scale Armour now has enchantments by default just like Royal Guardian Armour. <br>
                - Added the Attitude Adjuster. Go EXPLODE some Mobs. <br>
                - Added the Slayer Chainsaw. Bye, Bye Wood. <br>
                - Battle Axe, Queen Scale Battleaxe have a new model when held. <br>
                - Added the Royal Guardian Sword. <br>
                - Added Mobzilla Scale Armour <br>
                - Added the Aluminium Nugget. <br>
                - Added Reach to the Attitude Adjuster, Battle Axe, Big Bertha, Prismatic Reaper, Queen Scale Battle Axe, Royal Guardian Sword and Slayer Chainsaw <br>
                - Removed Tree Seeds. <br>
                - Added Water Dragon Scale. <br>
                - Ultimate Gear Recipes now require Uranium and Titanium from Chaos Awakens and not just the forge:ingots/uranium and forge:ingots/titanium tags. Some other mods have these materials being much easier to get. It was kind of broken lol. <br>
                - Fixed Glint appearing on pre-enchanted tools after using a grindstone on them. <br>
                - Removed all Golden Foods except for the Plant ones. Added Golden Beetroot and Golden Baked Potato. <br>
                - Removed Silver, Gold and Platinum Coins. <br>
                - Added Venison and Cooked Venison. <br>
                - Added Crystal Carrots, Crystal Beetroot and Crystal Potatoes. <br>
                - Ultimate Apple is actually Ultimate now. Texture and Recipe updated. Also Updated its effects. <br>
                - Emerald Tools now all come pre-enchanted with Silk Touch just like the pickaxe. <br>
                - Ultimate Stuff comes enchanted with Unbreaking 3 instead of Unbreaking 2. Fixed/Changed other Enchantments as well. <br>
                - Rock Fish can no longer be eaten. They are still found in the Food Creative Tab. <br>
                - Nutrition and Saturation have been updated on a bunch of foods. <br>
                - Mining Level of some tools have been upped. <br>
                - Ultimate Shovel and Ultimate Axe right click abilities are now also 3x3 just like the Ultimate Hoe. <br>
                - Added the Critter Cage. It is not throwable, you just right-click the entity. There is an entity tag to blacklist entities from being picked up. The entity tag is 'chaosawakens:critter_cage_blacklisted'. Shows enchanted if you pick up an enchanted mob. <br>
                - Miners Dream can now break more blocks. <br>
                - Added Beetroot on a Stick, Crystal Beetroot on a Stick and Golden Beetroot on a Stick. <br>
                - Big Hammer not launches entities up based on their knockback resistance. Entities with a high knockback resistance will not go up as far as entities with low knockback resistance. <br> <br>

                <b>Entities:</b> <br>
                - Added the Bird. Has multiple texture variants. <br>
                - Added Carrot Pig, Golden Carrot Pig, Enchanted Golden Carrot Pig and Crystal Carrot Pig. You can put a saddle on them and ride them. <br>
                - Added a Crystal Gator. Has multiple texture variants. <br>
                - Added the Dimetrodon. Spawns in the Stalagmite Valley. Has multiple texture variants. <br>
                - Added the Green Fish, Rock Fish, Spark Fish, Wood Fish and Lava Eel. <br>
                - Added the Frog. Spawns in Swamps. If a frog is named 'Froakie' it will become Blue. If a frog is spawned in the nether it will always be a hostile black frog. Has multiple texture variants. <br>
                - Added the Gazelle. Has multiple texture variants. <br>
                - Added the Robo Pounder. <br>
                - Added the Whale. <br>
                - Added drops for many of the entities above. You can view their drops using Just Enough Resources. <br>
                - Entities like the Ents, the Hercules Beetle and the Wasp now attack entities back if the entity attacks them first. <br>
                - Dark Oak Ent now drops a Cornflower. <br>
                - Jungle Ent can now drop Cocoa Beans. <br>
                - Fixed Spruce Ent dropping Oak Wood, it also drops Mossy Cobblestone now <br>
                - Removed vines from Oak Ent Loot Table. <br>
                - Updated Ent Models and Textures. Fixing various texture stitching issues as well. <br>
                - Enderman no longer spawn in the Crystal Dimension. <br>
                - Robo Warrior sometimes shoots Explosives now. <br>
                - Emerald Gator had a complete model and texture revamp. Also, Baby Emerald Gators can now happen by breeding two adults with any vanilla raw fish. <br>
                - Robo Entities now have a Layer that glows in the dark. <br>
                - Wandering Trader can now sell Triffid Goo making Battle Axe and Attitude Adjuster craft-able. <br>
                - Ants and Termites now die instantly in water. <br>
                - Ants and Termites now die instantly if they step on salt blocks. <br>
                - Ants and Termites no longer drop xp. <br>
                - Updated the message when clicking the Unstable and Brown Ants. It should now be more obvious that these dimensions have not been added yet. <br>
                - Enchanted Golden Apple Cow and Enchanted Golden Carrot Pig now breed non-enchanted versions if the enchanted animal breeding config is disabled. <br>
                - Add Wasp Ambient Sound. Protect your ears! <br>
                - Ranged Robo Entities will try to keep distance from the Player. <br>
                - All Apple Cow Variants will become their Carrot Pig Variant when struck by lightning. <br>
                - Robo Entities Only spawn if the block they spawn on can see the sky. (So they do not spawn inside the Mansion) <br>
                - Rabbits spawn the correct variants in Village Desert (Sandy Coloured One) and Village Snowy (White and White with Black Spot Ones). <br>
                - A Rabbit named 'Oreo' will have a custom texture. Just like the already existing 'Toast' Easter egg as well as the 'Froakie' Easter egg on the new frog mob. <br>
                - Illusioner can now also drop a Totem of Undying. <br> <br>

                <b>Fossils:</b> <br>
                - Added a new block called the Copper Defossilizer. Can only defossilize stone and gravel fossilised mobs. <br>
                - Added a new block called the Iron Defossilizer. Can defossilize any fossilised, frozen or crystallized mobs. Is 4 times slower than the Copper Defossilizer. <br>
                - When right-clicking either Defossilizer the Interact with Defossilizer Statistic on the Statistics menu will be increased. <br>
                - Added a separate Creative Tab for Fossils. Upon launch of the game the icon for the Creative Tab has the chance to be either the Copper Defossilizer or the Iron Defossilizer. <br>
                - Added a new item called Aluminium Power Chip. <br>
                - Added Fossils for Many, Many Creatures. Normally going by the name 'Fossilized (Mob Name)', If they are in ice it is 'Frozen (Mob Name)' and if they are in Kyanite they are 'Crystalised (Mob Name)'. <br>
                - Fossils are no longer made into spawn eggs through the Crafting Table. <br>
                - To get Fossils you must now get a Defossilizer and when opening it you will see 3 input slots and the output slot. <br>
                - The top input slot is for the fossil. <br>
                - The bottom left input slot requires a water bucket (lava bucket for nether fossils). <br>
                - The last input slot requires the Aluminium Power Chip. <br> <br>

                <b>Advancements:</b> <br>
                - Robo Slayer Advancement now requires killing the Robo Pounder. <br>
                - Go Fish Advancement now requires killing the Green Fish. <br>
                - Fixed All Armors Advancement being unobtainable. Moth Scale Armour is no longer required. <br>
                - Added Advancement for obtaining a Defossilizer. <br> <br>

                <b>Misc:</b> <br>
                - The /chaosawakens command can now be used with /ca instead. <br>
                - A new syntax option for the /chaosawakens command is locate. This works like the vanilla locate command but only shows the structures from this mod and without the mod id. You can type /ca locate wasp_dungeon instead of /locate chaosawakens:wasp_dungeon. <br>
                - Changed enableEnchantedGoldenAppleCowBreeding config option to enableEnchantedAnimalBreeding. <br>
                - Support for Flammability and Compostability have been added for any items/blocks that need it. <br>
                - Spawn Eggs can not be used on a Spawner in Survival. There is a Config option to change this. <br>
                - Made more Blocks/Items into Fuel Sources. <br>
                - Added Separate Stats for interacting with the Crystal Crafting Table and Crystal Furnace. They no longer use interact with Crafting Table and Furnace Statistics in the Statistics menu. <br>
                - Attitude Adjuster explosion is customizable in the config just like the Freakin' Ray Gun and Thunder Staff explosions. <br>
                - Structures can now be disabled with the config. <br> <br>

                <b>World Generation:</b> <br>
                - Added Bamboo and Cocoa Beans to Jungle Ent Tree Chest Loot. <br>
                - Stalagmite Valley now spawns giant patches of Andesite and Gravel. <br>
                - Fixed Stronghold appearing in dimensions. <br>
                - Villagers are way more common in the Village Mania now. Mansions and Igloos also spawn here sometimes. <br>
                - Teleporting under bedrock when right-clicking ants should now be fixed. <br>
                - Corn and Tomato Plants are a bit less common. <br>
                - Strawberry bushes can spawn in forests. <br>
                - You can enter the Crystal World with items in your inventory if you are in creative. <br>
                - Fixed Warped Ent Dungeon containing Water Buckets instead of Lava Buckets in the Trap. <br>
                - Added Fog and Particles to Crystal World. <br>
                - The Crystal World was revamped with new plants.
                - Renamed Mining Biome to Dense Mountain and was completely revamped with new grass and dirt blocks and new plants. You look at this biome at night. It looks beautiful at night. <br>
                - Mineshafts can now spawn in the Mining Paradise. <br>
                - Fixed some vegetation in the Village Mania dimension. Acacia Trees actually generate in the Savanna. <br> <br>

                <b>Integration: (All mod names mentioned here have a link to their curseforge page.)</b> <br>
                - Added Defossilizer compatibility with <a href='https://www.curseforge.com/minecraft/mc-mods/jei'>JEI</a> so you can see the recipes. The Defossilizers also have Information pages when viewing the recipes or uses of them. <br>
                - Added <a href='https://www.curseforge.com/minecraft/mc-mods/the-one-probe'>The One Probe</a> compatibility so if you see a mob that has multiple textures The One Probe will say which variant it is and the id associated with the texture. <br>
                - Ant Infested Ores now show up as the ore they look like while using <a href='https://www.curseforge.com/minecraft/mc-mods/jade'>Jade</a>. Just like the support that was added for The One Probe to do this in the April Fools Update. <br>
                - Added <a href='https://www.curseforge.com/minecraft/mc-mods/just-enough-resources-jer'>Just Enough Resources</a> support for Ore World Generation settings. Ores that are disabled in the config do not show their World Generation Settings. <br>
                - Items that give effects are now shown in <a href='https://www.curseforge.com/minecraft/mc-mods/just-enough-effect-descriptions-jeed'>Just Enough Effect Descriptions Effects</a> that show up in Just Enough Items if the mod is installed.
            </p>"
            ),
            '19' => array(
                'link' => '/mod/chaosawakens-1.16.5-0.10.0.1.jar',
                'version' => 'Chaos Awakens - v0.10.0.1',
                'description' => '<p>
                - Fixed a critical bug where you would crash if you hit any non-living entity with a weapon that has reach. <br>
                - Add recipe for the Slayer Chainsaw. <br>
                - For all the features of 0.10.0.0 see the changelog below this one.
            </p>'
            ),
            '20' => array(
                'link' => '/mod/chaosawakens-1.16.5-0.10.0.2.jar',
                'version' => 'Chaos Awakens - v0.10.0.2',
                'description' => '<p>
                - Fixed Critter Cage Default Filled Texture. <br>
                - Reverted the Uranium Texture to the old better one. <br>
                - Fixed a crash on servers with the extended reach tools.
            </p>'
            ),
            '21' => array(
                'link' => '/mod/chaosawakens-1.16.5-0.11.0.0.jar',
                'version' => 'Chaos Awakens - v0.11.0.0',
                'description' => "<p><!-- HTML_TAG_START -->
				IMPORTANT:<br>
				- Geckolib version 3.0.90 or above is now required.<br>
				- AttributeFix is no longer required.<br>
<br>
				GENERAL:<br>
				- Expanded the config. Many more options have been added to the common and client config, and there is now also a server config (Which is still a W.I.P).<br>
				- Added 2 new effects - Paralysis and Burns (W.I.P). <br>
				- Added a new enchantment - Ignition (W.I.P).<br>
				- Added many new advancements, some with XP rewards being bestowed upon completion.<br>
				- Miner's dream now breaks 45 blocks when used, and has a 20 tick (1 second) use cooldown.<br>
				- Added durability tooltips (enabled in the client config by default).<br>
				- Added more compatibility between Vanilla Minecraft and CA (for example, crops and seeds added by CA are now compostable, dispensers properly shoot arrows added by CA, etc.).<br>
				- Added a new 'Screen Shake' effect, which triggers during certain events.<br>
				- Auto-enchantable items no longer fail to enchant when crafted using shift-click.<br>
				- Added 16 new paintings.
<br>
				ITEMS:<br>
				- Fixed right clicking with an extended reach item/weapon killing villagers. You can no longer interact with villagers if you hold an extended reach weapon.<br>
				- Added some more Critter Cage textures, as well as better support for caging interactable entities (such as villagers, or tameable mobs).<br>
				- Added 5 new armor set bonuses - 'Experienced' (Experience Armor), 'Merchant's Aura' (Emerald Armor), 'Enchanter's Delight' (Lapis Armor) (W.I.P), 'Dragon Wings' (Ender Dragon Scale Armor) (W.I.P), and 'Eel-Like' (Lava Eel Armor) (W.I.P). Each of these can be tweaked down to every nook and cranny in the common config. You can see their effects in detail using the in-game tooltips. The Ender Dragon Scale Armor can be worn to see the full effects of its armor set bonus.<br>
				- Rebalanced essentially all tool sets, armor sets, and weapons.<br>
				- Added Nightmare Scales, Basilisk Scales, Moth Scales, Mobzille Scales, Emperor Scorpion Scales, Sea Viper Tongues, Vortex Eyes, and Worm Teeth.<br>
				- Added new boat variants for every wood type in CA.<br>
				- Added Basilisk Sword, and a recipe for it.<br>
				- Reworked several recipes - specifically for the Battle Axe, Slayer Chainsaw, Big Bertha, and Attitude Adjuster.<br>
				- Added recipe for the Nightmare Sword, .<br>
				- Added Blue Fish, Sun Fish, Gray Fish, Pink Fish, and Fire Fish.<br>
				- Added Popcorn.<br>
				- Updated Whale Spawn Egg texture.<br>
				- Updated Giant Spawn Egg texture.<br>
				- Updated Poison Sword texture.<br>
				- Updated Slayer Chainsaw. Upon right clicking, it will turn on, making it effective for destroying trees and large chunks of wood but consuming more durability.<br>
				- The Ray Gun and Thunder Staff can now be enchanted.<br>
				- Added several tags for all fossils, alongside an all-inclusive 'fossils' tag.<br>
<br>
				BLOCKS:<br>
				- Added many new blocks and vegetation to accomodate for every color variant of the crystal blocks.<br>
				- Crystal blocks now have 3 new colors - Pink, Orange, and Blue.<br>
				- Added new door variants for every wood type in CA.<br>
				- Added Nightmare Scale Block, Basilisk Scale Block, Mobzilla Scale Block, Moth Scale Block, Water Dragon Scale Block, and Emperor Scale Block.<br>
				- Fixed leaf carpets not placing several on 1 block due to hitbox inaccuracies.<br>
				- Added signs for every wood type in CA.<br>
				- Added new crystal vegetation.<br>
				- Re-organized the CA Fossils tab.<br>
				- Added new fossils - The Fossilised Beaver, Crystalized Carrot Pig, and Fossilised Lettuce Chicken.<br>
				- Tweaked the light values of all torches added by CA.<br>
				- Added Rhinestone, alongside a new set of blocks made of Rhinestone. Rhinestone generates in Mining Paradise by default, but that can be edited in the common config.<br>
				- Sandstone fossils can now be defossilized in a Copper Defossilizer.<br>
<br>
				ENTITIES:<br>
				Oh boy, now THIS is the main part of the update..<br>
				(Almost every mob here is subject to being updated, improved, or straight up overhauled in future patches/major updates)<br>
				- Added a new villager type - The Archaeologist. His trades revolve around fossils, and defossilizer-related items.<br>
				- All necessary ground AI has been reworked and majorly improved (Swimming AI has only been slightly tweaked, Flying AI remains the same until a future update).<br>
				- The Robo Pounder has been overhauled:<br>
				  * He can now break any block under harvest level 3 (except Robo Blocks). <br>
				  * He has 3 attacks, 2 of which including varying animations.<br>
				  * His first new attack is the 'Robo Punch'. It's a basic punch attack which deals a lot of damage and knockback. It is, however, a bit slow to charge up.<br>
				  * His second new attack is the 'Side Sweep'. It's a quick AOE attack which he uses frequently if surrounded by several enemies.<br>
				  * His final attack, and perhaps his most powerful, is the 'Rage Run'. Once he activates the rage run, his AI will become similar to that of an enraged bull. He will be triple armored for the first 2 seconds of his rage run, breaking ANY block, then revert to his old properties, but having double armor. As he rage runs, he will deflect all projectiles launched at him and armor himself against explosions, meaning the only means of damaging him while he's enraged is through melee combat. The lower his health gets, the faster and shorter (and more frequent) his rage runs will be. There are 4 stages to this: Stage 1 (above 150 HP/full health, 300HP), Stage 2 (under 150 HP), Stage 3 (Under 75 HP), and Stage 4 (Under 50 HP). While he's most powerful when enraged, he's also vulnerable. Placing enough blocks of harvest level 3 or higher (or Robo Blocks) in front of him and causing him to collide, or luring him underwater/under lava, will cause him to enter a state called 'Rage Crash'. He will be disabled for any time between 3 and 10 seconds. He will be vulnerable to all projectiles and melee attacks, but still remain resistant to explosions. Once he has rebooted, if he is critically low on health, chances are that he'll start rage running again immediately.<br>
				  * Every time he is damaged, he will emit pink spark particles to indicate damage.<br>
				  * Under 25 HP, the Robo Pounder will emit smoke to indicate that he's close to death.<br>
				  * He will only spawn at night in Village Mania.<br>
				- The Hercules Beetle has been overhauled:<br>
				  * It now has 3 states of being.<br>
				  * It now also has 2 attacks, and a defense mechanism.<br>
				  * Its first state is 'Docile'. It will usually spawn docile, sleeping undisturbed. While docile, if it has lost any health, it will regenerate (1HP/sec). If it is damaged by any means, or triggered by a nearby target, it will enter its second state of being.
				  * If the Hercules Beetle is undisturbed for a while when it's awake, and is on land, it will quickly go back to being docile.<br>
				  * Its second state is 'Defensive'. It will only become defensive if it is below half health (125 HP), or if it is awakened from its docile state. Currently, its defensive state involves it flapping its wings at an immense force, repelling almost all projectiles, any items, and any entities that happen to be near it. If it is in a battle and is getting lower on HP, it will enter this state more frequently in order to attempt to increase its survivability as much as possible. While defensive, it will prove difficult, if not almost impossible, to get to it, but its armor is halved during this state, as it exposes itself to flap its wings. So any projectiles that do reach it will deal increased damage.<br>
				  * Its third state is 'Offensive'. This will be its state for the majority of the battle, as it uses its 2 attacks to force the opposition down to defeat.<br>
				  * Its first attack is the 'Hard Swing'. This attack causes any enemies without an immense amount of knockback resistance to fly in the air, as well as dealing a lot of damage.<br>
				  * Its second (and as of now, final) attack is the 'Munch' attack. The Hercules Beetle will attempt to grab its target with its mouth. If it is successful, it will munch on the target for a total of 100 ticks (5 seconds) before throwing them up in the air. If a grab is unsuccessful but the target is still within attack range, it will deal half the damage of the 'Hard Swing' attack.<br>
				  * It will only spawn during night time on mountains, including Dense Mountains inside Mining Paradise.<br>
				- The Ent has been overhauled:<br>
				  * He now has 4 new variants - Apple, Cherry, Peach, and Skywood, none of which have a dungeon or fossil as of now.<br>
				  * He now has 2 attacks.<br>
				  * His first attack is the standard 'Wooden Punch'. It is a standard punch attack which deals decent damage and some knockback.<br>
				  * His second attack is the 'Ent Smash'. This attack is an AOE attack which he will use if he is surrounded by enemies/targets, or too far away from his target(s). It deals decent damage, and knocks anybody without decent knockback resistance up into the air.<br>
				  * He will only spawn in his dungeons, with the respective variant.<br>
				- Fish AI has been slightly tweaked.<br>
				- The Whale has been remodeled and retextured (and is still W.I.P). It can also become beached. When on land, the Whale will only take accumilating damage from sunburn, not loss of breath. Upon a whale's death, there is a chance that it will explode. This chance is higher if it has died beached or due to sunburn.<br>
				- The Wasp has recieved a remodel and retexture.<br>
				- The Stink Bug now has 16 variants, and emits these disgusting, new fart particles.<br>
				- Added Baby Stink Bug.<br>
				- The Frog has been renamed to the Tree Frog.<br>
				- Added a new variant for the Apple Cow - The Ultimate Apple Cow. It is only obtainable by breeding 2 Enchanted Golden Apple Cows, very rarely. It cannot be bred, and there is no config option for the Ultimate Apple Cow to be bred.<br>
				- Beavers will now occasionally go up to wooden logs and chomp on them.<br>
				- Lava Eels can now actually move around in lava lakes.<br>
				- Fish entities now rotate on land.<br>
				- Dimetrodon AI has been slightly tweaked.<br>
				- Added a new animal - The Lettuce Chicken.<br>
				- All other entities will be updated and overhauled in future patches/major updates.<br>
<br>
				WORLD GENERATION:<br>
				- Overhauled the Acacia, Birch, Dark Oak, Jungle Ent Trees.<br>
				- Added a new type of Wasp Nest - the Giant 'Mining' Wasp Nest. This Wasp Nest can be found within the Stalagmite Valley in Mining Paradise.<br>
				- Reworked Mining Paradise - the Stalagmite Valley now features better cave generation and giant stalagmites, while the Dense Mountains have significantly increased in size.<br>
				- Tweaked spawn rates in Mining Paradise and Village Mania.<br>
				- Added new variants for the crystal trees inside Crystal World, each featuring a set of new blocks corresponding to each new color/variant.<br>
				- Added a config option for enabling/disabling ore generation on stalagmites, as it is still quite unoptimized and thus may require a more powerful computer due to the server thread lagging/freezing.<br>
				- Reworked tree generation for Apple, Cherry, and Peach trees. They now look a little nicer, and are a bit bigger.<br>
				- Tweaked some ore spawning rates.<!-- HTML_TAG_END --></p>"
            ),
            '22' => array(
                'link' => '/mod/chaosawakens-1.16.5-0.11.0.1.jar',
                'version' => 'Chaos Awakens - v0.11.0.1',
                'description' => "<p><!-- HTML_TAG_START -->
				PATCH NOTES:<br>
				- Bumped required Geckolib version up to 3.0.92.<br>
                                - Fixed a crash with Ender Dragon Scale Armor being worn on other mobs and armor stands.<br>
                                - Fixed Ender Dragon Scale Armor freezing server thread.<br>
                                - Fixed some slight AI inconsistencies.<br>
                                - Fixed a mobs with extended reach weapons/items crashing the game.<br>
                                - Fixed a visual bug where the Extreme Torch wouldn't render.<br>
                                - Fixed a crash with the Hercules Beetle.<br>
                                - Added Throwback variant for the Hercules Beetle. The Modern Hercules Beetle will now only spawn in the Dense Mountains, in Mining Paradise, whereas the Throwback Hercules Beetle will spawn on normal Overworld Mountains.<br>
                                - Updated Poison Sword texture.<br>
                                - Re-balanced some ore-generation.<br>
                                - Reduced Dimetrodon spawn rates.<br>
                                - Added new Lettuce Chicken throwable egg.<!-- HTML_TAG_END --></p>"
            ),
            '23' => array(
                'link' => '/mod/chaosawakens-1.16.5-0.11.1.0 (April Fools Update).jar',
                'version' => 'Chaos Awakens APRIL FOOLS - v0.11.1.0',
                'description' => "<p><!-- HTML_TAG_START -->
                <b>Title Menu</b> <br>
                - It says 'Chaos Awakens' and 'April Fools 2023' at the top of the Title Screen. <br>
                - Splash Text always says 'Happy April Fools!' <br>
                - The April Fools Warning Screen looks WAY better this year! <br>
                - You now get the April Fools Warning Screen when clicking Single Player instead of before you reach the Title Screen. <br>
                <b>Items</b> <br>
                - Added the Cyan Rose Sword, Red Rose Sword and Crystal Rose Sword. These swords give the poison potion effect. <br>
                - Hot Flaming Cheetos are back! They will always drop from a new mob mentioned further down. <br>
                - Many foods had their Nutrition and Saturation values tweaked. Cooked Bacon no longer gives any effects. <br>
                - All foods that give Special Effects now give a bad effect instead. Included foods are: Crystal Apple, Crystal Beetroot, Crystal Carrot, Crystal Potato, Butter Candy, Candycane, Spark Fish, Fire Fish, Lava Eel, Sun Fish, Golden Potato, Golden Baked Potato, Enchanted Golden Carrot and Ultimate Apple. <br>
                - Lava Eel Armour Full Set Bonus has mysteriously stopped working. <br>
                <b>Blocks</b> <br>
                - Cherry Cobblestone was added to the mod. If you light it on fire you get Cherry Fire. <br>
                - Standing in Cherry Fire or on a Cherry Campfire you get Regeneration and Health Boost. It also no longer crashes your game if you throw items in the Cherry Fire this year! <br>
                - Cherry Lanterns and Cherry Torches are in the mod. Matching the Cherry Fire. <br>
                <b>Structures</b> <br>
                - Added the Ultimate House. This structure has a secret basement with many good ores under some of the carpet. <br>
                <b>Entities</b> <br>
                - Added the Man Meme Coin. This mob always drops the Flaming Hot Cheetos, but will also drop one of... a Diamond, an Uranium Nugget, a Titanium Nugget, an Emerald, an Emerald Sword, an Emerald Pickaxe, an Emerald Axe, an Emerald Shovel, an Emerald Hoe, a Man Meme Coin Spawn Egg or it can drop 3 of any random item in the game that is not in the <b>chaosawakens:undroppable</b> item tag. <br>
                - The Lettuce Chicken now drops any Spawn Egg (Except Robos) in the game instead of throwable Lettuce Chicken Eggs. Now go put the Lettuce Chickens on hoppers in cages for your Spawn Eggs, Just like the Easter Bunny. <br>
                - Ants seem to be a little bigger now and drop more exp. <br>
                - Ants seem to teleport you to the wrong dimension. Oops! who messed up the teleporter. Brown Ant takes you to the Village Mania, Unstable Ant takes you to the Crystal World and Termite takes you to the Mining Paradise. <br>
                - Ents are 80% cuter. Ents have shrunk to a very small size. <br>
                <b>Advancements</b> <br>
                - Added an Advancement for killing Ants. They seem big enough for an advancement. <br>
                - Added a specific advancement for obtaining each Rose Sword. Seriously though... WHY did the sword even exist in Orespawn... <br>
                <b>World Generation</b> <br>
                - Changed Ore Spawning of multiples ores. <br>
                - Amethyst now spawns in geodes underground. <br>
                - Aluminium now spawns in the Overworld. It spawns between y20 and y80. <br>
                - Ruby Ore spawning in the Nether has had its values tweaked. <br>
                - Aluminium, Copper, Tin and Salt Ore spawning in the Mining Paradise have had their values tweaked. <br>
                - Crystal Energy spawning in the Crystal World has had its values tweaked. <br>
                - Cat's Eye and Pink Tourmaline also spawn in geodes in the Crystal World. <br>
                <b>Chat</b> <br>
                - Typing 'April Fools!' in chat will make you drop any items in your inventory. Clumsy! <br> <br>
                <b>DISCLAIMER:</b> Some of these features are from last years April Fools update with or without some changes.<!-- HTML_TAG_END --></p>"
            ),
            '23' => array(
                'link' => '/mod/chaosawakens-1.16.5-0.11.1.1 (April Fools Update).jar',
                'version' => 'Chaos Awakens APRIL FOOLS - v0.11.1.1',
                'description' => '<p class="svelte-1rm1xus"><!-- HTML_TAG_START -->
                <b>Servers</b> <br>
                - Fixes crash on servers.<!-- HTML_TAG_END --></p>'
            ),
            '23' => array(
                'link' => '/mod/chaosawakens-1.16.5-0.11.1.2 (April Fools Update).jar',
                'version' => 'Chaos Awakens APRIL FOOLS - v0.11.1.2',
                'description' => '            <p class="svelte-1rm1xus"><!-- HTML_TAG_START -->
                <b>Servers</b> <br>
                - Fixes ANOTHER crash on servers that did not happen in my dev environment server...<!-- HTML_TAG_END --></p>'
            ),
        );
    }

    public function mobs()
    {
        return array(
            '1' => array(
                'name' => 'Water Dragon',
                'life' => 0,
                'image' => '/images/water_dragon.gif',
                'text' => 'Aquatic reptile, found in every water sources, strong swimmer, agressive diet, territorial.'
            ),
            '2' => array(
                'name' => 'Robo Pounder',
                'life' => 300,
                'image' => '/images/robo-pounder-walking.gif',
                'text' => 'Artificially intelligent machine, capable of performing tasks agressively without human guidance.'
            ),
            '3' => array(
                'name' => 'Robo Jeffrey',
                'life' => 0,
                'image' => '/images/robo_jeffrey.gif',
                'text' => 'Hostile robot behavior towards humans or other creatures, programmed to attack till the end of life.'
            ),
            '4' => array(
                'name' => 'Rotator',
                'life' => 0,
                'image' => '/images/rotator.gif',
                'text' => 'mechanical device that rotates objects, often used for attacking humans.'
            ),
            '5' => array(
                'name' => 'Mantis',
                'life' => 0,
                'image' => '/images/mantis.gif',
                'text' => 'A predatory insect with a spiky body, elongated forelegs for hunting, and excellent camouflage abilities.'
            ),
            '6' => array(
                'name' => 'Celestial Squid',
                'life' => 0,
                'image' => '/images/celestial_squid.gif',
                'text' => 'Marine mollusk with a soft body, eight arms, two tentacles, a beak, and ink sac.'
            ),
            '7' => array(
                'name' => 'Whale',
                'life' => 120,
                'image' => '/images/whale.png',
                'text' => 'Streamlined, marine mammal, smooth skin, large size, vocalizations, found in all oceans, ecosystem role.'
            ),
            '8' => array(
                'name' => 'Peacock',
                'life' => 0,
                'image' => '/images/peacock.png',
                'text' => 'Peacock has a vivid iridescent tail, used in courtship displays, prominent tail feathers, and elaborate courtship displays.'
            ),
            '9' => array(
                'name' => 'Kraken',
                'life' => 0,
                'image' => '/images/kraken.png',
                'text' => 'Legendary sea monster of Norse mythology, often depicted as a giant squid or octopus.'
            ),
        );
    }
}
