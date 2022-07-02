<?php

declare(strict_types=1);

namespace NhanAZ\OpList;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use NhanAZ\OpList\OpManager;

class Main extends PluginBase implements Listener {

	protected function onEnable(): void {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->saveDefaultConfig();
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
		if ($command->getName() === "oplist") {
			(new OpManager($this))->sendOpList($sender, $args[0] ?? 1);
			return true;
		}
		return true;
	}
}
