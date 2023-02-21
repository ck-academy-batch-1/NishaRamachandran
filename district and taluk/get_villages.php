<?php
// Define an array of villages for each district
$Taluk = array(
	"madurai" => array(
		"Madurai North",
		"Madurai south",
		"Madurai East",
		"Madurai west,Melur",
		"Peraiyur",
		"Tirumangalam",
		"Thiruparankundram",
		"Usilampatti",
		"Vadipatti",
		"Kallikudi",

		
	),
	"ramanadhapuram" => array(
		"Tiruvadanai",
		"Paramakudi",
		"Kamudhi",
		"Mudukulathur",
		"Ramanadhapuram",
		"Rameshwaram",
		
	)
);

// Get the selected district from the POST data
$district = $_POST["district"];

// If the district is not in the villages array, return an empty array
if (!array_key_exists($district, $Taluk)) {
	echo json_encode(array());
	exit;
}

// Otherwise, return the villages for the selected district as a JSON-encoded array
echo json_encode($Taluk[$district]);
?>
