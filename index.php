<?php 
	function soChan()
	{
		for ($i=10; $i <= 100 ; $i++) {
			if($i % 2 === 0) echo $i.' ';
		}
	}
	function cau3($a)
	{
		$table = "<table style='width:10%; border:1px solid black'>
				  <tr>";
		$table1 = "</tr>
				</table>";
		for ($i=1; $i <= $a ; $i++) {
			echo $table;
			if($i % 2 === 0){
				echo "<td style= 'background-color: yellow;'>Dòng $i</td>";
			}
			else{
				echo "<td style= 'background-color: red;'>Dòng $i</td>";
			}
			echo $table1;
			
		}
	}
	function cau5($dong,$cot)
	{
		$table = "<table style='width:10%; border:1px solid black'>
				  <tr>";
		$table1 = "</tr>
				</table>";
		for ($i=0; $i <= $a ; $i++) {
			echo $table;
			if($i % 2 === 0){
				echo "<td style= 'background-color: yellow;'>Dòng $i</td>";
			}
			else{
				echo "<td style= 'background-color: red;'>Dòng $i</td>";
			}
			echo $table1;
			
		}
	}
	function giaiThua($n){
		if($n < 1) return 0;
		return giaiThua
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anh nho em</title>
</head>
<body>
	<div>
		<label>Câu 1</label>
		<input type="text" name="">
	</div>
	<div>
		<label>Câu 2</label>
		<?php  soChan(); ?>
	</div>
	<div>
		<form method="post" action="">
			<div>
				<label>Câu 3 và 4</label>
				<input type="number" placeholder="Nhập số dòng" name="soA" id="soA">
				<input type="submit" name="nut" id="nut" value="Gửi">
			</div>
			<div>
				<label>Câu 5</label>
				<input type="number" placeholder="Nhập số dòng" name="soDong" id="soDong">
				<input type="number" placeholder="Nhập số cột" name="soCot" id="soCot">
				<input type="submit" name="nut" id="nut" value="Vẽ">
			</div>
			
			
		</form>
		<?php  
			
			switch (isset($_REQUEST['nut'])) {
				case 'Gửi':
					$a = $_REQUEST['soA'];
					if(isset($a)){
						cau3($a); 
					}
					break;
				case 'Vẽ':
					echo 'aaa';
					break;
			}
			
		?>
	</div>
</body>
</html>