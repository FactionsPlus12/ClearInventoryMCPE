<?php
namespace Plugin\ClearInventory_V0.1;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Command\Command;
use pocketmine\Command\CommandSender;
use pocketmine\entity\Effect;
class Main extends PluginBase{
	
	public function onEnable(){
		$this->getServer()->getLogger()->info("BasicCommands enabled!");
	}
	
	public function onDisable(){
		$this->getServer()->getLogger()->info("BasicCommands disabled!");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		
		switch($cmd->getName()){
			
			case "clear":
				if($sender instanceof Player){
					$sender->getInventory()->clearAll();
				}
			
		}
		return true;
	}
}