<?php

namespace Fly;

use pocketmine\plugin\PluginBase;
use pocketmine\command\{Command, CommandSeder};
use pocketmine\event\Listener;
use pocketmine\player\Player;

class Main extends PluginBase implements Listener {
    
    private static self $instance;
    
    public function onEnable () : void {
        $self::$instance = $this;
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
        $this->getLogger()->info("Plugin Enable!")
    }

    public static function getInstance() : self {
        return self::$instance;
    }

    