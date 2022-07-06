# General
**Show list of operators**

# Contact
[![Discord](https://img.shields.io/discord/986553214889517088?label=discord&color=7289DA&logo=discord)](https://discord.gg/j2X83ujT6c)\
**You can contact me directly via Discord `NhanAZ#9115`**

# Explain Like I'm Five

<details>

## General
Show operator list when using `/oplist` command

![image](https://user-images.githubusercontent.com/60387689/177538188-057fe95b-b938-4045-9113-374ea14dc303.png)


## Commands

| Commands | Description | Usage | Aliases | Permission | Permission Message |
| -------- | ----------- | ----- | ------- | ---------- | ------------------ |
| /oplist | Show list of operators | N/A | ["/ops"] | oplist.command | N/A |

## Permissions
| Permissions | Description | Default |
| ----------- | ----------- | ------- |
| oplist.command | Permission for /oplist | true |

## Setup
How to setup? Very simple! Follow the steps below:
- Step 1: Download plugins
- Step 2: Place downloaded plugin in the `plugins` folder
- Step 2: Start the server
- Step 3: Enjoy!

## Configs

<details>

<summary>config.yml</summary>

```yaml
---
# {page} : Number of pages players see when using /oplist
# {maxPage} : Maximum arguments the user can enter in /oplist [Arguments]
# {totalOpsOnline} : The number of operators is online in the server
opListTag: "&6- List of operators &f[&b{page} &6of &b{maxPage}&f] &f[&9Onlines&f: &a{totalOpsOnline}&f] &6-"

# {numericalOrder} : The ordinal number of the operator
# {opName} : Operator name
# {onlineStatus} : Operator online status
opListFormat: "&e» &a{numericalOrder}. &9{opName} &f[{onlineStatus}&f]"

# {onlineStatus} : Online Tag
onlineStatusTag: "&aOnline"
# {onlineStatus} : Offline Tag
offlineStatusTag: "&cOffline"

# The message sent to the user when the argument they entered does not exist
pageNotFound: "&e» §cPage not found!"

# Messages sent to users when the server does not have an operator
noOperator: "§e» §cNo operator!"

# Last line of a page
# You can disable this by below:
# endPage: ""
endPage: "&6==========================================="

# Number of operators in a page
perPage: 5
...

```

</details>

## What's new?

| Versions | Description |
| -------- | ----------- |
| 2.0.1 | - Code improvements<br>+ Now you can edit the message format in the configuration |


## Shields

<details>

<summary>Poggit Shields</summary>

[![State](https://poggit.pmmp.io/shield.state/FertilizerParticles)](https://poggit.pmmp.io/p/FertilizerParticles)
[![API](https://poggit.pmmp.io/shield.api/FertilizerParticles)](https://poggit.pmmp.io/p/FertilizerParticles)
[![Downloads Total](https://poggit.pmmp.io/shield.dl.total/FertilizerParticles)](https://poggit.pmmp.io/p/FertilizerParticles)
[![Downloads](https://poggit.pmmp.io/shield.dl/FertilizerParticles)](https://poggit.pmmp.io/p/FertilizerParticles)
[![Lint](https://poggit.pmmp.io/ci.shield/nhanaz-pm-pl/CropGrowth/FertilizerParticles)](https://poggit.pmmp.io/ci/nhanaz-pm-pl/CropGrowth/FertilizerParticles)

</details>

<details>

<summary>Other Shields</summary>

[![Issues](https://img.shields.io/github/issues/nhanaz-pm-pl/OpList)](https://github.com/nhanaz-pm-pl/OpList/issues)
[![Forks](https://img.shields.io/github/forks/nhanaz-pm-pl/OpList)](https://github.com/nhanaz-pm-pl/OpList/network/members)
[![Stars](https://img.shields.io/github/stars/nhanaz-pm-pl/OpList)](https://github.com/nhanaz-pm-pl/OpList/stargazers)
[![License](https://img.shields.io/github/license/nhanaz-pm-pl/OpList)](https://github.com/nhanaz-pm-pl/OpList/blob/master/LICENSE)
[![Discord](https://img.shields.io/discord/986553214889517088?label=discord&color=7289DA&logo=discord)](https://discord.gg/j2X83ujT6c)

</details>

## Licensing information
[![License](https://img.shields.io/github/license/nhanaz-pm-pl/OpList)](https://github.com/nhanaz-pm-pl/OpList/blob/master/LICENSE)\
This project is licensed under `GNU General Public License v3.0`. Please see the [LICENSE](https://github.com/nhanaz-pm-pl/OpList/blob/master/LICENSE) file for details.

## Contributors

<a href="https://github.com/nhanaz-pm-pl/OpList/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=nhanaz-pm-pl/OpList" />
</a>

Made with [contrib.rocks](https://contrib.rocks).

</details>
