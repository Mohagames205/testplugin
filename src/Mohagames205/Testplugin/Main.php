<?php

namespace Testplugin;

use pocketmine\utils\TextFormat as C;
use pocketmine\plugin\PluginBase;
use Testplugin\Main;

class Main extends PluginBase {
    public function onEnable(){
        $this->getLogger()->info(C::GREEN . "Plugin is geactiveerd!");
    }
}