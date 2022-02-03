<?php

declare(strict_types=1);

namespace NhanAZ\OpList;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener {

	protected function onEnable(): void {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
		if ($command->getName() == "oplist") {
			$opNumbers = 0;
			$opOnline = 0;
			foreach (array_keys($this->getServer()->getOps()->getAll()) as $opName) {
				$opNumbers++;
				if ($this->getServer()->getPlayerByPrefix(strval(($opName)))) {
					$opOnline++;
				}
				$sender->sendMessage(
				TF::GOLD . "List of operators " . TF::BLUE . "(Online: " . (($opOnline == 0) ? TF::RED . $opOnline :  TF::GREEN . $opOnline) . TF::BLUE . ")\n".
				TF::YELLOW . "» " . TF::GREEN . $opNumbers . ". " . TF::BLUE . $opName . ($this->getServer()->getPlayerByPrefix(strval(($opName))) ? TF::GREEN . " (Online)" : TF::RED . " (Offline)"));
			}
			if (empty($opNumbers)) {
				$sender->sendMessage(TF::YELLOW . "» " . TF::RED . "No operator");
			}
		}
		return true;
	}
}
