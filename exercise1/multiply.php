<?php

echo "<table style=\"width:50%\">"; //creates a table in html

for($i = 0; $i <= 100; $i++){

	echo "<tr>"; //rows

	for($j = 0; $j <= 100; $j++){

		echo "<td>"; //cols

		if($i == 0){

			if($j != 0){

				echo "$j";
			
			}
		} else if($j == 0){ //creates

			echo "$i";
			
		} else {
			echo "" . $i * $j . "";
		}

		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>