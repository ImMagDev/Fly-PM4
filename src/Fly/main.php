<?php

namespace Fly;

use pocketmine\plugin\PluginBase;
use pocketmine\command\{Command, CommandSeder};
use pocketmine\event\Listener;
use pocketmine\player\Player;

class Main extends PluginBase implements Listener {

    public function onEnable() : void {
        $this->getLogger->info("The plugin is enable!")
    }

    public function onDisable() : void {
        $this->getLogger->info("The plugin is disable!")
    }
}