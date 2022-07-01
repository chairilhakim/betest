<?php

function findPay($dueDate, $backDate)
{
    $getDueYear = date('Y', strtotime($dueDate));
	$getDueMonth = date('m', strtotime($dueDate));
	$getDueDay = date('d', strtotime($dueDate));
	
	$getBackYear = date('Y', strtotime($backDate));
	$getBackMonth = date('m', strtotime($backDate));
	$getBackDay = date('d', strtotime($backDate));
	
	if($getDueYear == $getBackYear){
		if($getDueMonth == $getBackMonth){
			if($getBackDay == $getDueDay){
				$pay = 0;
			} else {
				$selisih = $getBackDay - $getDueDay;
				$pay = 15 * $selisih;
			}
		} else {
			$selisih = $getBackMonth - $getDueMonth;
			$pay = 500 * $selisih;
			
		}
	} else {
		$selisih = $getBackYear - $getDueYear;
		$pay = 12000 * $selisih;
	}
	return $pay;
}
echo findPay('2022-03-12', '2022-06-29');