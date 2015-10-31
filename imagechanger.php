<html>
<head>
<title>Hello</title>
<style>
.imagegrp-base{
	position:absolute;
	z-index:100;
	padding:5%;
}
.imagegrp-item{
	position:absolute;
	z-index:200;
	padding:5%;
}
</style>
<body>

<?php

ob_clean();

$filepath='assets/1_Bacteria_3P_Demo.txt';

$txt_file    = file_get_contents($filepath);
$rows        = array_map('trim',explode("\n", $txt_file));

$rowid=0;
$counter=5;

foreach($rows as $row => $data)
{
    $curr_row = $rows[$rowid];

	echo $data. '<br />';
	$curr_row=array_map('trim',explode("**",$data));
	$pmtrs = (count($curr_row)-1)/5;

	//echo trim($curr_row[0]). '<br/>';
	//echo trim($curr_row[1]). '<br/>';
	//echo trim($curr_row[2]). '<br/>';
	//echo trim($curr_row[3]). '<br/>';
	//	echo trim($curr_row[4]). '<br/>';

	if($curr_row[0]=='D' && $curr_row[1]==0){
		$base=$curr_row[4];
		echo $base. '<br/>';
		$totalp = 1;
	}
	else if($curr_row[0]=='D' && $curr_row[1]>0){
		echo $pmtrs . '<br/>';

		${"pmtr" . $curr_row[1]} = array();
		for ($iary = 0; $iary < ($pmtrs*5); $iary++){
			${"pmtr" . $curr_row[1]}[] = $curr_row[$iary];
		}
		var_dump(${"pmtr" . $curr_row[1]});

		$totalp = $totalp * $pmtrs;
	}

	$rowid=$rowid+1;

}
echo '<br/> Total possibility: ' . $totalp . '<br />';


$baseln = 'img/base.png';
$p1_a_1 = 'img/p1-a-grey.png';
$p1_b_1 = 'img/p1-b-black.png';
$p2_yn  = 'img/p2-yesno.png';
$p3_a_1 = 'img/p3-a-straight.png';
$p3_b_1 = 'img/p3-b-bent.png';

$basebg="base";
$p1="p1-a-grey";
$p2="p2-yesno";
$p3="p3-b-bent";

$isBase=1;
$isP1=1;
$isP2=1;
$isP3=1;

if($isP1==1){
	$tP1=3;
}
if($isP2==1){
	$tP2=2;
}
if($isP3==1){
	$tP3=3;
}

$totalP=$tP1*$tP2*$tP3;
echo "Total Possibility:",$totalP, "<br>They are:";

drawBacteria($basebg,$p1,$p2,$p3,$isBase,$isP1,$isP2,$isP3);

function drawBacteria($base,$p1,$p2,$p3,$isBase,$isP1,$isP2,$isP3){
	global $baseln, $p1_a_1, $p1_b_1, $p2_yn, $p3_a_1, $p3_b_1, $basebg, $p1, $p2, $p3, $isBase, $isP1, $isP2, $isP3;

	if ($isBase==1){
		echo "	<div class='imagegrp-base'>
					<img src='$baseln'></img>
				</div>
			";
	}
	if ($isP1==1){
		if($p1=='p1-a-grey'){
			echo "	<div class='imagegrp-item'>
					<img src='$p1_a_1'></img>
					</div>
			";
		}
		if($p1=='p1-b-black'){
				echo "	<div class='imagegrp-item'>
						<img src='$p1_b_1'></img>
						</div>
				";
		}
	}
	if ($isP2==1){
		if($p2=='p2-yesno'){
				echo "	<div class='imagegrp-item'>
						<img src='$p2_yn'></img>
						</div>
				";
		}
	}
	if ($isP3==1){
		if($p3=='p3-a-straight'){
				echo "	<div class='imagegrp-item'>
						<img src='$p3_a_1'></img>
						</div>
				";
		}
		if($p3=='p3-b-bent'){
					echo "	<div class='imagegrp-item'>
							<img src='$p3_b_1'></img>
							</div>
					";
		}
	}
}
?>
</body>
</html>