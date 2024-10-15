<?php
$randomExitText = ["<Yukari> 再见...希望我们还能再见。", "<Melted> 再见", "<minqwq> by", "<白九> 晚安", "<Rick Astley> Say goodbye", "<mcpe> 没事，再见"];
$reset = "\033[0m";
$highlight = "\033[1m";
$red = "\33[31m";
echo "minqwq's life | minqwq 的一生 | (v0.3) by minqwq 和他的几个朋友 |$highlight wusheng233非官方PHP版本$reset\n";
echo "[$red!$reset] 极早期开发阶段，不代表正式后效果。\n";
echo "请选择选项...\n\n";
echo "1:新的一生\n";
echo "2:选择特定章节(不会做保存功能)\n";
echo "3:睡觉(退出)\n";
while(true) {
	echo "> ";
	$input = trim(fgets(STDIN));
	switch($input) {
		case 1:
			include __DIR__ . "/chapter/1.1.php";
			break;
		case 2:
			echo "请按此格式输入章节:大章/小章\n示例:1/2\n> ";
			$input = str_replace("/", ".", trim(fgets(STDIN)));
			// 这里有文件不存在问题但是python版也有所以我也移植过来了哈哈
			include __DIR__ . "/chapter/$input.php";
			break;
		case 3:
			echo $randomExitText[array_rand($randomExitText)] . "\n";
			exit;
	}
}