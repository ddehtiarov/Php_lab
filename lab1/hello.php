<html>
<head>
<title>Open Server</title>
</head>
<body>
	<center>
		<?php 
$name = $_GET["username"];
//echo "Hello, " .$name."!";
calendar($_GET["year"],$_GET["month"]);

function calendar($year, $month)
{
    $res = strtotime("$year-$month-01");
	$dates = date('t',$res);
	$j = 1;
	$date = 1;
    $weekDays = array('Пн','Вт','Ср','Чт','Пт','Сб','Вс');
					echo '<br><table>';			
					for($i = 0; $i < $cols; $i++)
						echo '<th>'.$weekDays[$i].'</th>';
	while($date - 1 <$dates){
		echo "<tr>";
		for($i=0;$i<7;$i++){
			if($j < date('N', $res) || $date>$dates){
				echo "<td>&nbsp;</td>";
				$j++;
			}else{
				echo "<td>".$date++."</td>";
				}
		}
		echo "</tr>";
	}
echo "</table>";
}
?>

		<form metod="get">
			<select name="month">
				<?php
for($i=1;$i<13;$i++){
	if($_GET["month"] == $i)
        echo "<option selected>".$i."</option>";
    else
	   echo "<option>".$i."</option>";
}
?>
			</select> <select name="year">
				<?php
for($i=2000;$i<2020;$i++){
if($_GET["year"] == $i)
    echo "<option selected>".$i."</option>";
    else
	   echo "<option>".$i."</option>";
}
?>
			</select> <input type="submit" />
			<form>
	</center>
</body>
</html>