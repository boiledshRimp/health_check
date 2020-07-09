<?php require './header.php'?>
<?php

//それぞれのポイントを収納する空の配列を用意。
$point = [];

//値、つまりもしもチェックボックスにチェックが入っていたら…
if (isset($_REQUEST['check'])){

	//入力側でチェックを入れた項目の要素を取り出して…
	foreach ($_REQUEST['check'] as $status){
		//条件に一致したチェック項目ごとに値を割り振り、ポイントを収納する配列に値が入る。
		switch($status){
			case '高熱':
				$point[] = 5;
				break;
			case '微熱':
				$point[] = 4;
				break;
			case '吐き気':
				$point[] = 3;
				break;
			case 'めまい':
				$point[] = 2;
				break;
			case '悪寒':
				$point[] = 1;
				break;
			case '特に何もなし':
				$point[] = 0;
				break;
		}
	}

	//array_sum関数で配列の各要素のポイントの合計を計算。
	$total = array_sum($point);

		//switchにtrueを指定し、数値と文字列を明確に判断。
		switch(true){
			
			//配列の各要素のポイントの合計に応じて…
			case ($total >= 5):
				echo '病院に行きましょう';
				break;
			case ($total >= 3 && $total < 5):
				echo '無理せず寝ていましょう';
				break;
			case ($total >= 1 && $total < 3):
				echo 'お気をつけて。';
				break;
			default:
				echo 'お元気ですね。';

		}
}

?>
<?php require './footer.php'?>