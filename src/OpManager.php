<?php

declare(strict_types=1);

namespace NhanAZ\OpList;

use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;

class OpManager {

	public function __construct(private PluginBase $plugin) {
	}

	private function getConfig(): Config {
		return $this->plugin->getConfig();
	}

	private function handleOpListTag(int $page, int|float $maxPage): string {
		$replacements = [
			"{page}" => $page,
			"{maxPage}" => $maxPage,
			"{totalOpsOnline}" => $this->getOpsOnline(),
		];
		$opListTag = str_replace(
			array_keys($replacements),
			$replacements,
			$this->getConfig()->get("opListTag", "&6- List of operators &f[&b{page} &6of &b{maxPage}&f] &f[&9Onlines&f: &a{totalOpsOnline}&f] &6-")
		);
		return $opListTag;
	}

	private function getPerPage(): int {
		return $this->getConfig()->get("perPage", 5);
	}

	private function handleStatusTag($opName): string {
		$opName = strval($opName);
		if ($this->plugin->getServer()->getPlayerByPrefix($opName)) {
			$status = $this->getConfig()->get("onlineStatusTag", "§aOnline");
		} else {
			$status = $this->getConfig()->get("offlineStatusTag", "§cOffline");
		}
		return $status;
	}

	private function getOpList(): array {
		return array_keys($this->plugin->getServer()->getOps()->getAll());
	}

	private function getOpsOnline(): int {
		$opsOnline = 0;
		foreach (array_keys($this->plugin->getServer()->getOps()->getAll()) as $opName) {
			if ($this->plugin->getServer()->getPlayerByPrefix(strval(($opName)))) {
				$opsOnline++;
			}
		}
		return $opsOnline;
	}

	public function sendOpList(CommandSender $sender, $page): void {
		$ops = $this->getOpList();
		$page = intval($page);
		if (empty($this->getOpList())) {
			$sender->sendMessage(TextFormat::colorize($this->getConfig()->get("noOperator", "§e» §cNo operator!")));
			return;
		}
		$maxPage = ceil(count($ops) / $this->getPerPage());
		if ($page < 1 || $page > $maxPage) {
			$sender->sendMessage(TextFormat::colorize( $this->getConfig()->get("pageNotFound", "§e»§c Page not found!")));
			return;
		}
		$start = ($page - 1) * $this->getPerPage();
		$end = $start + $this->getPerPage();
		$sender->sendMessage(TextFormat::colorize($this->handleOpListTag($page, $maxPage)));
		for ($i = $start; $i < $end; $i++) {
			if (isset($ops[$i])) {
				$replacements = [
					"{numericalOrder}" => $i + 1,
					"{opName}" => $ops[$i],
					"{onlineStatus}" => $this->handleStatusTag($ops[$i]),
				];
				$opListFormat = str_replace(
					array_keys($replacements),
					$replacements,
					$this->getConfig()->get("opListFormat", "&e» &a{numericalOrder}. &9{opName} &f[{onlineStatus}&f]")
				);
				$sender->sendMessage(TextFormat::colorize($opListFormat));
			}
		}
	}
}
