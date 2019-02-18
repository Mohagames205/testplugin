<?php

namespace mohagames\testplugin;

use pocketmine\utils\TextFormat as C;
use pocketmine\plugin\PluginBase;

class testplugin extends PluginBase {
    public function onEnable(){
        $this->getLogger()->info(C::GREEN . "Plugin is geactiveerd!");
    }
}
