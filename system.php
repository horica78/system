<?php
function minlc($arr,$il,$ic){
	$k = 0;
	for($i=0;$i<count($arr);$i++){
		$l = 0;
		for($j=0;$j<count($arr[$i]);$j++){
			if($i!=$il){
				if($j!=$ic){
					$arrn[$k][$l] = $arr[$i][$j];
				}	
			}
			if($j!=$ic){
				$l++;
			}
		}
		if($i!=$il){
			$k++;
		}
	}
	return $arrn;
}
function det($arr){
	$ord = count($arr);
	if($ord>1){
		$s = 0;
		$i = 0;
		for($j=0;$j<count($arr[$i]);$j++){
			$s += pow(-1,$i+$j+2)*$arr[$i][$j]*det(minlc($arr,$i,$j));
		}
	}
	else{
		$s = $arr[0][0];
	}
	return $s;
}
function arr_rep_col($arr,$col,$c){
	for($i=0;$i<count($arr);$i++){
		$arr[$i][$c] = $col[$i];
	}
	return $arr;
}	
function sistem($acoef,$alib){
	$delta = det($acoef);
	for($i=0;$i<count($acoef);$i++){
		$sol[$i] = det(arr_rep_col($acoef,$alib,$i))/$delta;
	}
	return $sol;
}	
/*
$arr[0] = array(1,1,1);
$arr[1] = array(2,1,-1);
$arr[2] = array(1,-1,2);

$al = array(2,3,0);*/
/*
$arr[0] = array(1,-3,2);
$arr[1] = array(5,6,-1);
$arr[2] = array(4,-1,3);

$al = array(-3,13,8);
*/
//$arr[0] = array(2,-3,1,4);
//$arr[1] = array(3,1,-5-3);
//$arr[2] = array(6,2,-1,1);
//$arr[3] = array(1,5,4,-3);

//$al = array(0,-10,-3,-6);

//echo "<pre>".print_r(sistem($arr,$al),1)."</pre>";
//$sol = sistem($arr,$al);

//echo "<br>".($sol[0]*2-$sol[1]*3+$sol[2]+4*$sol[3]);
//echo "<br>".($sol[0]*3+$sol[1]-5*$sol[2]-3*$sol[3]);

//echo "<pre>".print_r(arr_rep_col($arr,$al,1),1)."</pre>";
//$arr[0] = array(1,-1,1);
//$arr[1] = array(2,-1,1);
//$arr[2] = array(1,0,1);
//$al = array(2,2,1);
//$arr[0] = array(1,2,3,4);
//$arr[1] = array(2,1,3,4);
//$arr[2] = array(3,1,2,4);
//$arr[3] = array(4,1,2,3);
//$arr[0] = array(1,2,3,4);
//$arr[1] = array(2,1,3,4);
//$arr[2] = array(3,1,2,4);
//$arr[3] = array(4,1,2,3);

//$arr[0] = array(1,2,4,0);
//$arr[1] = array(1,3,2,1);
//$arr[2] = array(2,1,-1,5);
//$arr[3] = array(1,4,0,2);
//$arr[0] = array(-1,2,0);
//$arr[1] = array(1,1,1);
//$arr[2] = array(1,-1,-1);
//$al = array(1,2,0);
/*$arr[0] = array(1,2,10,1);
$arr[1] = array(1,4,3,2);
$arr[2] = array(1,2,2,0);
$arr[3] = array(1,2,4,1);
$al = array(12,1,2,4);*/


$arr[0] = array(1,2,10,1,2,1);
$arr[1] = array(1,4,3,2,2,1);
$arr[2] = array(1,2,2,0,2,1);
$arr[3] = array(1,2,4,1,2,1);
$arr[4] = array(1,1,1,1,3,2);
$arr[5] = array(1,1,1,1,3,4);
$al = array(15,4,5,7,5.5,8.5);

/*
$arr[0] = array(1,3,8,1);
$arr[1] = array(1,2,8,2);
$arr[2] = array(1,3,4,8);
$arr[3] = array(1,2,5,1);
$al = array(2,4,6,5);
*/
/*
$arr[0] = array(1,2,8,4);
$arr[1] = array(1,2,7,9);
$arr[2] = array(1,8,9,1);
$arr[3] = array(1,7,6,3);
$al = array(1,8,2,3);
*/
//echo "<pre>".print_r(det($arr),1)."</pre>";
/*
$arr[0] = array(2,1,1);
$arr[1] = array(1,2,3);
$arr[2] = array(2,3,2);
$al = array(4,2,3);
*/
echo "<pre>".print_r(sistem($arr,$al),1)."</pre>";


 	
?>