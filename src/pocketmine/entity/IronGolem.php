<?php

declare(strict_types = 1);

namespace CortexPE\entity\mob;

use pocketmine\entity\Animal;
use pocketmine\item\Item;

class IronGolem extends Animal {
	const NETWORK_ID = self::IRON_GOLEM;

	public $width = 1.4;
	public $height = 2.7;

	public function initEntity(){
		$this->setMaxHealth(100);
		parent::initEntity();
	}

	public function getName(): string{
		return "Iron Golem";
	}

	public function getDrops(): array{
		return [
			Item::get(Item::IRON_INGOT, 0, mt_rand(3, 5)),
			Item::get(Item::POPPY, 0, mt_rand(0, 2)),
		];
	}
}
