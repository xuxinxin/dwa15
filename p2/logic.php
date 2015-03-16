<?php
	$words    =(isset($_POST['num_of_words'])   ? htmlspecialchars($_POST['num_of_words']) : 3);
	$separator = (isset($_POST['separatorchar']) ? trim($_POST['separatorchar']) : "-");

	$numbers    =(isset($_POST['num_of_numbers'])   ? htmlspecialchars($_POST['num_of_numbers']) : 0);
	if(!((int)$words && $words<9)){
		$words=3;
	}else{
		$words=(int)$words;
	}
	if(($separator!=="-" && $separator!=="*")){
		$separator="-";
	}
	if((int)$numbers!==0 && (int)$numbers!==1){
		$numbers=0;
	}else{
		$numbers=(int)$numbers;
	}
	$contents = "";
	generate_password($words,$numbers,$separator);
	function generate_password($words=3,$numbers=0,$separator="-"){
		$contents = file("dict.txt");
		$contents = str_replace("\r", "", $contents);
		//$contents = array("a","b","c","d","e");
		//$allwords = explode("\n",$contents );
		$allwords = $contents;
		//$rand_words = array_rand($allwords, $words);
		for ($i=0; $i <$words ; $i++) { 
			# code...
			$j=mt_rand(0,count($allwords)-1);
			$rand_words[]=$allwords[$j];	
		}
		$result="";
		if($words===1){
			$result=rtrim($rand_words[0]);
		}else{
			foreach ($rand_words as $key => $value) {
				# code...
				$result=$result.$separator.rtrim($rand_words[$key]);
			}
			
		}
		$result=ltrim($result,$separator);
		if($numbers===1){
			$addnumber=rand(0,9);
			$split=str_split($result,1);
			$result="";
			$position=rand(0,count($split));
			foreach ($split as $key => $value) {
				# code...
				if($key===$position){
					$result=$result.$addnumber;
				}
				$result=$result.$value;

			}
			if($position===count($split)){
				$result=$result.$addnumber;
			}
		}

		$result = str_replace("'", "", $result);
		return $result;
	}
?>
