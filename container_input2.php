<?php require './header.php'?>
<form action="container_output2.php" method="post">

<p>今朝の体調は？</p>

<?php
//チェックボックスの項目。
$check = ['高熱','微熱','吐き気','めまい','悪寒','特に何もなし'];

//name属性に配列を使うことで複数の値が使える。
foreach ($check as $status) {
	echo '<input type="checkbox" name="check[]" value="', $status, '">';
	echo $status;
}
?>

<p><input type="submit" value="診断"></p>

</form>
<?php require './footer.php'?>