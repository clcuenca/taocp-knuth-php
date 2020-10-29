#!/usr/local/bin/php

<?php

	# --------------------------------------------
	# Section 1.1 - Algorithm L
	# From Knuth's The Art of Computer Programming
	# Author: Carlos L. Cuenca
	# Date: 10/28/20

	# ------------------------
	# Function Implementations

	function algorithm_l($n, $choose) {

		if($n < $choose) return;

		$combinations = array_fill(0, $choose + 2, 0);

		for($j = 0; $j < $choose; $j++) {

			$combinations[$j] = $j;

		}

		$combinations[$choose] = $n;
		$combinations[$choose + 1] = 0;

		$j = 0;

		while($j < $choose) {

			// Visit the Combinations
			for($index = 0; $index < $choose; $index++) {

				print($combinations[$index]);

			}

			print("\n");

			$j = 0;

			while($combinations[$j] + 1 == $combinations[$j + 1]) {

				$combinations[$j] = $j;

				$j++;

			}

			$combinations[$j]++;

		}

	}

	# --------------
	# Driver Program

	$number = 6;
	for($choose = 0; $choose <= $number; $choose++) {

	    algorithm_l($number, $choose);

	}

?>