#!/usr/local/bin/php

<?php

	# --------------------------------------------
	# Section 1.1 - Algorithm F
	# From Knuth's The Art of Computer Programming
	# Author: Carlos L. Cuenca
	# Date: 10/28/20

	# ------------------------
	# Function Implementations

	function algorithm_f($m, $n) {

		$m = abs($m);
		$n = abs($n);

		if($m < $n) {

			$temp = $n;
			$n = $m;
			$m = $temp;

		}

		if($n == 0) return $m;

		return algorithm_f($n, $m % $n);

	}

	# --------------
	# Driver Program

	$input = fopen('php://stdin', 'r');

	$inputCount = (int) fgets($input);

	while($inputCount > 0) {

		$numbers = array_map('intval', explode(" ", fgets($input)));

		print(algorithm_f($numbers[0], $numbers[1]));
		print("\n");

		$inputCount--;

	}



?>