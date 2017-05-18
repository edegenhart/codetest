<?php
/*
This file contains a function that takes in an array and will return
any equilibrium indices of the array if any exist.
Author: Evan Degenhart
*/

// From phpunit test case for debugging
//$arr = array(-7, 1, 5, 2, -4, 3, 0);

function getEquilibriums($arr) {
	$output = array(); // Array that holds equilibrium indices (results)

	// First step is to check the array to see how long it is
	$length = count($arr);

	// Display error if no input given
	if ($length == 0) {
		echo "No input received!";
	}
	else {
		// Initialize right and left sums to test for equilibriums
		$right_sum = array_sum($arr); // Initialize right side to the sum of all elements of array

		$left_sum = 0; // Initialize to zero because the sum of 0 elements is 0

		// Loop through each index in the array starting from left
		for ($i = 0; $i < $length; $i++) {
			// Subtract current index value from right sum
			$right_sum = $right_sum - $arr[$i];

			if ($left_sum == $right_sum) { // Equilibrium found
				$output[] = $i; // Store equilibrium index in output array
			}

			// Update left sum to check next index
			$left_sum = $left_sum + $arr[$i];
		}
	}

	// Display message if no equilibriums found
	if (count($output) == 0) {
		echo "No equilibriums found!";
	}

	return $output;
}

// For debugging
/*
$results = getEquilibriums($arr);
$results_length = array_sum($results);
echo "# results: <br/>";
foreach ($results as $r) echo "$r, ";
*/

?>
