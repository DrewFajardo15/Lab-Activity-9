<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Arthur', 'Male', '04-27-2002', 'Arnel', 'jackie@gmail.com', 'Pandann Street', '0934432890');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Catherine',
			'gender' => 'Female',
			'birthdate' => '10-14-2006',
			'owner' => 'Cathy',
			'email' => 'joycie@yahoo.com',
			'address' => 'Scandinavian Avenue',
			'contact_number' => '0912343267'
		],
		[
			'name' => 'Juanito',
			'gender' => 'Male',
			'birthdate' => '01-19-2012',
			'owner' => 'Miguel',
			'email' => 'r_underscore@gmail.com',
			'address' => 'MacArthur Boulevard',
			'contact_number' => '09438765432'
		]
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}