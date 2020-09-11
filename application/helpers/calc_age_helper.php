<?php
function age_calc($date)
{

	$corta = date('Y-m-j', strtotime($date));

	list($y, $m, $d) = explode("-", $corta);


	$today = date("md");
	$past = $m . $d;
	$result = date("Y");


	if ($today < $past) {

		$total = $result - $y - 1;

		return $total;
	} else {


		$year = date("Y");

		$all = $year - $y;

		return $all;

	}

}
