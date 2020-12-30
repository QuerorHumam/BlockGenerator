<?php

namespace BlockHorizons\BlockGenerator\biomes\impl\swamp;

use BlockHorizons\BlockGenerator\biomes\type\GrassyBiome;
use BlockHorizons\BlockGenerator\populator\FlowerPopulator;
use BlockHorizons\BlockGenerator\populator\LilyPadPopulator;
use BlockHorizons\BlockGenerator\populator\MushroomPopulator;
use BlockHorizons\BlockGenerator\populator\SmallMushroomPopulator;
use BlockHorizons\BlockGenerator\populator\tree\SwampTreePopulator;
use pocketmine\block\Block;
use pocketmine\block\Flower;

class SwampBiome extends GrassyBiome
{

    public function __construct()
    {
        parent::__construct();

        $lilypad = new LilyPadPopulator();
        $lilypad->setBaseAmount(4);
        $lilypad->setRandomAmount(2);
        $this->addPopulator($lilypad);

        $trees = new SwampTreePopulator();
        $trees->setBaseAmount(2);
        $this->addPopulator($trees);

        $flower = new FlowerPopulator();
        $flower->setBaseAmount(3);
        $flower->setRandomAmount(2);
        $flower->addType(Block::RED_FLOWER, Flower::TYPE_BLUE_ORCHID);
        $this->addPopulator($flower);

        $mushroom = new MushroomPopulator(1);
        $mushroom->setBaseAmount(-10);
        $mushroom->setRandomAmount(11);
        $this->addPopulator($mushroom);

        $smallMushroom = new SmallMushroomPopulator();
        $smallMushroom->setBaseAmount(0);
        $smallMushroom->setRandomAmount(7);
        $this->addPopulator($smallMushroom);

        $this->setBaseHeight(-0.2);
        $this->setHeightVariation(0.1);
    }

    public function getName(): string
    {
        return "Swamp";
    }
}
