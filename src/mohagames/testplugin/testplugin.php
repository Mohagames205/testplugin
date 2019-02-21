<?php

namespace mohagames\testplugin;

use pocketmine\utils\TextFormat as C;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class testplugin extends PluginBase {
    public function onEnable(){
        $this->getLogger()->info(C::GREEN . "JAAAAAAAAA MIJN PLUGIN WERKT");

    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        switch($command->getName()){
            case "test":
                $sender->sendMessage("Hey hoi" . $sender->getName());

                return true;
            default:
                return false;
                
        }
    }
}
