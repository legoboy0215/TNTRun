<?php

namespace TNTRun\commands\sub;

use pocketmine\command\CommandSender;
use pocketmine\Player;
use TNTRun\commands\SubCmd;
use pocketmine\utils\TextFormat;

class LobbySubCmd extends SubCmd{

    public function execute(CommandSender $sender, array $args){
        if(!($sender instanceof Player)){
            $sender->sendMessage(TextFormat::YELLOW . "Please run this command in game!");
            return true;
        }
        $level = $this->getMain()->getServer()->getLevelByName($this->getMain()->getConfig()->get("lobby"));
        if($level !== null){
            $sender->teleport($level->getSafeSpawn());
            $sender->sendMessage(TextFormat::GREEN . "Teleported to lobby");
        }else{
            $sender->sendMessage(TextFormat::RED . "Lobby level isn't loaded or doesn't exist");
        }
        return true;
    }

}
