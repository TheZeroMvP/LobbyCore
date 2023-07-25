<?php

namespace LobbyCore;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\scheduler\ClosureTask;
use pocketmine\Server;

class LobbyCore implements Listener {

    private $pene;
    private $lobbySpawn;

    public function __construct(YourPlugin $pene) {
        $this->plugin = $plugin;
        $this->lobbySpawn = $plugin->getServer()->getDefaultLevel()->getSafeSpawn();
        $this->plugin->getServer()->getPluginManager()->registerEvents($this, $this->plugin);
    }

    public function onPlayerJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $player->teleport($this->lobbySpawn);

    }
}
