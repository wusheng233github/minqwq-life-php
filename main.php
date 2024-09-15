<?php
$randomExitText = ["<Yukari> 再见...希望我们还能再见。", "<Melted> 再见", "<minqwq> by", "<白九> 晚安", "<Rick Astley> Say goodbye", "<mcpe> 没事，再见"];
$reset = "\033[0m";
$highlight = "\033[1m";
$red = "\33[31m";
echo "minqwq's life | minqwq 的一生 | (v0.1uncon) by minqwq 和他的几个朋友 |$highlight wusheng233非官方PHP版本$reset\n";
echo "[$red!$reset] 极早期开发阶段，不代表正式后效果。\n";
echo "请选择选项...\n\n";
echo "1:新的一生\n";
echo "2:选择特定章节(不会做保存功能)\n";
echo "3:睡觉(退出)\n";
echo "4:重载游戏(开发)\n";
while(true) {
	echo "> ";
	$input = trim(fgets(STDIN), "\n");
	switch($input) {
		case 1:
			include "./chapter/1.1.php";
			break;
		case 2:
			$chapter = glob("./chapter/*.php");
			echo "请选择章节...\n";
			$keys = array_keys($chapter);
			foreach($keys as $key) {
				$explode = explode(".", basename($chapter[$key]));
				echo ($key + 1) . ": {$explode[0]}-{$explode[1]}\n";
			}
			echo "\n--> ";
			$input = trim(fgets(STDIN), "\n");
			if(isset($chapter[$input - 1])) {
				include $chapter[$input - 1];
			} else {
				echo "不存在\n";
			}
			break;
		case 3:
			echo $randomExitText[array_rand($randomExitText)] . "\n";
			exit;
		case 4:
			include "./main.php";
			exit;
	}
}