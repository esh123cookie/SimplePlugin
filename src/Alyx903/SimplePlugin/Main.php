<?php

namespace Alyx903\SimplePlugin;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\utils\TextFormat;

class Main extends Pluginbase implements Listener {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
      switch($cmd->getName()){
        case "test":
          if($sender instanceof Player) {
            // real player
            $sender->sendMessage(TextFormat::GREEN . "Hello " . $sender->getName())
          } else {
            
          }
      break;
      }
      
      return true;
    }
  
  public function onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
    
    $player->sendMessage(TextFormat::AQUA . "Hello " . $player->getName());
  }



}
