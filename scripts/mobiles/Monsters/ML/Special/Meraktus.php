<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Meraktus extends Mobile {
	public function summon() {
		$this->name = "meraktus";
		$this->body = 263;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(1419, 1438);
		$this->dex = rand(309, 413);
		$this->int = rand(129, 131);
		$this->maxhits = rand(4100, 4200);
		$this->hits = $this->maxhits;
		$this->damage = 16;
		$this->damageMax = 30;
		$this->resist_physical = rand(65, 90);
		$this->resist_fire = rand(65, 70);
		$this->resist_cold = rand(50, 60);
		$this->resist_poison = rand(40, 60);
		$this->resist_energy = rand(50, 55);
		$this->karma = -70000;
		$this->fame = 70000;
		$this->virtualarmor = 28;

}}
?>
