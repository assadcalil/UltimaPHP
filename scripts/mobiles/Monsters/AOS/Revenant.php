<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Revenant extends Mobile {
	public function summon() {
		$this->name = "a revenant";
		$this->body = 400;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = 0;
		$this->dex = 0;
		$this->int = 0;
		$this->maxhits = 0;
		$this->hits = $this->maxhits;
		$this->damage = 16;
		$this->damageMax = 17;
		$this->resist_physical = 0;
		$this->resist_fire = 0;
		$this->resist_cold = 0;
		$this->resist_poison = 0;
		$this->resist_energy = 0;
		$this->karma = 0;
		$this->fame = 0;
		$this->virtualarmor = 32;

}}
?>
