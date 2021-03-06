<?php

namespace TNTRun\commands\sub;

use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use TNTRun\commands\SubCmd;
use pocketmine\Player;
use pocketmine\level\Level;

class Pos1SubCmd extends SubCmd{

    public function execute(CommandSender $sender, array $args){
        if(!($sender instanceof Player)){
            $sender->sendMessage(TextFormat::YELLOW . "Please run this command in game!");
            return true;
        }
        $this->getMain()->selection[strtolower($sender->getName())]["pos1"] = ["x" => $sender->getFloorX(), "z" =>  $sender->getFloorZ(), "level" => $sender->getLevel()->getName()];
        $sender->sendMessage(TextFormat::GREEN . "Pos 1 set to : x=".$sender->getFloorX().", z=".$sender->getFloorZ().", level=".$sender->getLevel()->getName());
        return true;
    }

}
