<?php

namespace ffa;

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

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function Lol(Player $player){
		if($player->getLevel()->getName() == "KBFFA"){
			if($this->saveFromVoidAllowed($entity->getLevel())){
				$this->savePlayerFromVoid($entity);
				$event->setCancelled();
			}
		}
	}

	public function onDeath(PlayerDeathEvent $event){
             $player = $event->getPlayer();
             $cause = $player->getLastDamageCause();
              if($cause instanceof EntityDamageByEntityEvent){
                  $damager = $cause->getDamager();
                  if($damager instanceof Player){
                        $damager->setHealth(20);
                        $damager->setFood(20);
                        $damager->sendMessage("You killed " . $player->getName() . "§2 Your health has been maxed!");
                  }
              }
      }

	public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {

		switch($cmd->getName()){
			case "kffa":
			 if($sender instanceof Player){
			 	$sender->addEffect(new EffectInstance(Effect::getEffect(Effect::RESISTANCE), (99999999*20), (255), (false)));
			 	$item1 = Item::get(261, 0, 1);
			 	$item2 = Item::get(280, 0, 1);
			 	$item3 = Item::get(262, 0, 1);
			 	$item1->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 10));
			 	$item1->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::PUNCH), 1));
			 	$item1->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::INFINITY)));
			 	$item2->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::KNOCKBACK), 1));
			 	$item1->setCustomName("§lKnockBack Bow");
			 	$item2->setCustomName("§lKnockBack Stick");
			 	$sender->getInventory()->clearAll();
			 	$sender->getArmorInventory()->clearAll();
			 	$sender->teleport($this->getServer()->getLevelByName("KBFFA")->getSafeSpawn());
			 	$sender->getInventory()->addItem($item1);
			 	$sender->getInventory()->addItem($item2);
			 	$sender->getInventory()->addItem($item3);
			 	$sender->addTitle(T::GREEN . "Teleported!", T::BLUE . "You've been teleported to KnockFFA!");
			 }
		}
		switch($cmd->getName()){
			case "combo":
			 if($sender instanceof Player){
			 	$item1 = Item::get(276, 0, 1);
			 	$helmet = Item::get(Item::DIAMOND_HELMET);
                $chestplate = Item::get(Item::DIAMOND_CHESTPLATE);
                $leggings = Item::get(Item::DIAMOND_LEGGINGS);
                $boots = Item::get(Item::DIAMOND_BOOTS);
                $item1->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 10));
			 	$helmet->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 5));
                $chestplate->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 5));
                $leggings->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 5));
                $boots->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 5));
			 	$sender->getInventory()->clearAll();
			 	$sender->getArmorInventory()->clearAll();
			 	$sender->teleport($this->getServer()->getLevelByName("combo")->getSafeSpawn());
			 	$sender->getInventory()->addItem($item1);
			 	$sender->getArmorInventory()->setHelmet($helmet);
			 	$sender->getArmorInventory()->setChestplate($chestplate);
			 	$sender->getArmorInventory()->setLeggings($leggings);
			 	$sender->getArmorInventory()->setBoots($boots);
			 	$sender->addTitle(T::GREEN . "Teleported!", T::BLUE . "You've been teleported to Combo!");
			 }
		}
		switch($cmd->getName()){
			case "fist":
			 if($sender instanceof Player){
			 	$item1 = Item::get(364, 0, 64);
			 	$sender->getInventory()->clearAll();
			 	$sender->getArmorInventory()->clearAll();
			 	$sender->teleport($this->getServer()->getLevelByName("fist")->getSafeSpawn());
			 	$sender->getInventory()->addItem($item1);
			 	$sender->addTitle(T::GREEN . "Teleported!", T::BLUE . "You've been teleported to Fist!");
			 }
		}
		switch($cmd->getName()){
			case "gapple":
			 if($sender instanceof Player){
			 	$item1 = Item::get(276, 0,1);
			 	$item2 = Item::get(322, 0,16);
			 	$helmet = Item::get(Item::DIAMOND_HELMET);
                $chestplate = Item::get(Item::DIAMOND_CHESTPLATE);
                $leggings = Item::get(Item::DIAMOND_LEGGINGS);
                $boots = Item::get(Item::DIAMOND_BOOTS);
                $item1->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 10));
			 	$helmet->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 10));
                $chestplate->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 10));
                $leggings->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 10));
                $boots->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 10));
			 	$sender->getInventory()->clearAll();
			 	$sender->getArmorInventory()->clearAll();
			 	$sender->teleport($this->getServer()->getLevelByName("gapple")->getSafeSpawn());
			 	$sender->getInventory()->addItem($item1);
			 	$sender->getInventory()->addItem($item2);
			 	$sender->getArmorInventory()->setHelmet($helmet);
			 	$sender->getArmorInventory()->setChestplate($chestplate);
			 	$sender->getArmorInventory()->setLeggings($leggings);
			 	$sender->getArmorInventory()->setBoots($boots);
			 	$sender->addTitle(T::GREEN . "Teleported!", T::BLUE . "You've been teleported to Gapple!");
			 }
		}
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
		switch($cmd->getName()){
			case "nodebuff":
			 if($sender instanceof Player){
			 	$helmet = Item::get(Item::DIAMOND_HELMET);
                $chestplate = Item::get(Item::DIAMOND_CHESTPLATE);
                $leggings = Item::get(Item::DIAMOND_LEGGINGS);
                $boots = Item::get(Item::DIAMOND_BOOTS);
			 	$helmet->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 10));
                $chestplate->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 10));
                $leggings->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 10));
                $boots->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 10));
			 	$sender->getInventory()->clearAll();
			 	$sender->getArmorInventory()->clearAll();
			 	$sender->teleport($this->getServer()->getLevelByName("nodebuff")->getSafeSpawn());
			 	$sender->getInventory()->addItem(Item::get(276, 0, 1));
				$sender->getInventory()->addItem(Item::get(322, 0, 10));
				$sender->getInventory()->addItem(Item::get(368, 0, 5));
				$sender->getInventory()->addItem(Item::get(438, 22, 20));
				$sender->getInventory()->addItem(Item::get(438, 16, 13));
			 	$sender->getArmorInventory()->setHelmet($helmet);
			 	$sender->getArmorInventory()->setChestplate($chestplate);
			 	$sender->getArmorInventory()->setLeggings($leggings);
			 	$sender->getArmorInventory()->setBoots($boots);
			 	$sender->addTitle(T::GREEN . "Teleported!", T::BLUE . "You've been teleported to Nodebuff!");
			 }
		}
	return true;
	}

}
