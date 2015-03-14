<!DOCTYPE html>
<html>
<head>
	<title>What is the time?</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="time.css">
</head>
<?php 
date_default_timezone_set("Asia/Shanghai");
$hour=date("h");
$minute=date("i");
$second=date("s");
$a=date("a");
function change12to24($hour,$a){
	if($a==="pm"){
		$newh=((int)$hour+12)%24;
	}else{
		$newh=$hour;
	}
	return $newh;
}
$newh=change12to24($hour,$a);

if($newh>=5 && $newh<11){
	$time1="morning";
}elseif ($newh>=11 && $newh<16) {
	$time1="afternoon";
	# code...
}elseif ($newh>=16 && $newh<20) {
	# code...
	$time1= "evening";
}else{
	$time1= "night";
}
$time1="afternoon";
$imgsrc="img/".$time1.".png";
?>
<body id=<?php echo $time1; ?>>
	<h1>It is now <?php echo $hour.":".$minute.$a; ?></h1>
	<img src=<?php echo $imgsrc; ?> alt=<?php echo $time1; ?>>
</body>
</html>