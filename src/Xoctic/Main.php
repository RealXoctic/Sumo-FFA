<?php

namespace Xoctic;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\entity\EntityDamageEven;
use pocketmine\entity\{Effect, EffectInstance};
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;


use pocketmine\item\Item;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\utils\TextFormat as T;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

	public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {

		switch($cmd->getName()){
			case "sumo":
			 if($sender instanceof Player){
			   $sender->addEffect(new EffectInstance(Effect::getEffect(Effect::RESISTANCE), (99999999*20), (255), (false)));
			 	$item1 = Item::get(364, 0, 64);
			 	$sender->getInventory()->clearAll();
			 	$sender->getArmorInventory()->clearAll();
			 	$sender->teleport($this->getServer()->getLevelByName("sumo")->getSafeSpawn());
			 	$sender->getInventory()->addItem($item1);
			 	$sender->addTitle(T::GREEN . "Teleported!", T::BLUE . "You've been teleported to Sumo!");
			 }
		}
	return true;
	}

}
