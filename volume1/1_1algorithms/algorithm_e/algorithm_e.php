#!/usr/local/bin/php

<?php

	# --------------------------------------------
	# Section 1.1 - Algorithm E
	# From Knuth's The Art of Computer Programming
	# Author: Carlos L. Cuenca
	# Date: 10/28/20

	# ------------------------
	# Function Implementations

	function algorithm_e($m, $n) {

		$m = abs($m);
		$n = abs($n);

		if($m < $n) {

			$temp = $n;
			$n = $m;
			$m = $temp;

		}

		$remainder = $m % $n;

		while($remainder > 0) {

			$remainder = $m % $n;

			if($remainder == 0) break;

			$m = $n;
			$n = $remainder;

		}

		return $n;

	}

	# --------------
	# Driver Program

	$input = fopen('php://stdin', 'r');

	$inputCount = (int) fgets($input);

	while($inputCount > 0) {

		$numbers = array_map('intval', explode(" ", fgets($input)));

		print(algorithm_e($numbers[0], $numbers[1]));
		print("\n");

		$inputCount--;

	}



?>