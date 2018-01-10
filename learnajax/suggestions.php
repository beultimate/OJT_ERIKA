<?php

	$existingNames = array("Nelson", "Nancy", "Michelle", "Millie", "Joe", "John");

	if(isset($_POST['inputName'])) {
		$currentName = $_POST['inputName'];

		if(!empty($currentName)) {
			foreach ($existingNames as $existingName) {
				if(strpos($existingName, $currentName) !== false) {
					echo "<li>";
					echo $existingName;
					echo "</li>";
				}
			}
		}
	}
?>