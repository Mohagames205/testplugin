<?php

namespace mohagames\testplugin;

use pocketmine\utils\TextFormat;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerRespawnEvent;

class testplugin extends PluginBase implements Listener{
    public function onLoad() : void{
		$this->getLogger()->info(TextFormat::WHITE . "I've been loaded!");
	}
	public function onEnable() : void{
		$this->getLogger()->info(TextFormat::DARK_GREEN . "I've been enabled!");
	}
	public function onDisable() : void{
		$this->getLogger()->info(TextFormat::DARK_RED . "I've been disabled!");
	}

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        switch($command->getName()){
            case "test":
                if(isset($args[0])){
                    $arglr = NULL;
                    foreach($args as $argument){
                        $arglr .= $argument . " ";
                    }

                $sender->sendMessage(TextFormat::BLUE . $sender->getName() . "§e ,u hebt dit als arg opgegeven: §4" . $arglr);
                }
                else{
                    $sender->sendMessage("Geen arg ingegeven");
                }
                return true;
            default:
                return false;
                
        }
    }

}
