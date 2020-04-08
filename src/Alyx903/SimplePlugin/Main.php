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

  public function onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
    $player->sendMessage(TextFormat::AQUA . "Hello " . $player->getName()); 
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    {
    if ($cmd->getName() == "test") {
        if ($sender instanceof Player) {
             if ($sender->hasPermission("test.use")) {
                 $p = $sender->getName();
                 $sender->sendMessage(TextFormat::AQUA . "Hello " . $p);
                 return true;
              } else {
                  $sender->sendMessage($this->fts . TF::RED . "You do not have permission to use this command");
                }
            }
            return true;
        }
    }
}
