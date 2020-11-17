<?php
        echo '<body style="background-color:dodgerblue">';

        //gets username and password
        $username = $_POST["username"];
        $password = $_POST["password"];

        echo "Username: " . $username . "<br>";
        echo "Password: " . $password . "<br><br><br>";

        //get quantity
        $book = $_POST["book"];
        $hoodie = $_POST["hoodie"];
        $code = $_POST["code"];

        //calculate total costs
        $bookCost = $book * 1000;
        $hoodieCost = $hoodie * 20;
        $codeCost = $code * 99;
        $shipCost = $_POST['ship']; 

        if ($shipCost == "0") 

            $ship = "7 Day Shipping";

        else if ($shipCost == "50")

            $ship = "Overnight Shipping";

        else
            $ship = "3 Day Shipping";

        //sum
        $total = $bookCost + $hoodieCost + $codeCost + $shipCost;


        echo "<table border='4'>";
        echo "<tr> <th> </th> <th> Quantity </th> <th> Cost </th> <th> Total </th></tr>";

        echo "<tr> <th>Calculus Textbook</th> <td>" . $book . "</td> <td>$1000</td> <td>$" . $bookCost . "</td></tr>";
        echo "<tr> <th>Kansas Hoodie</th> <td>" . $hoodie . "</td> <td>$20</td> <td>$" . $hoodieCost . "</td></tr>";
        echo "<tr> <th>BIOL 101 Access Code</th> <td>" . $code . "</td> <td>$99</td> <td>$" . $codeCost . "</td></tr>";
        echo "<tr> <th>Shipping</th><td> <td>" . $ship . "</td></td> <td>$" . $shipCost . "</td></tr>";
        echo "<tr> <th><th><th>Total Cost</th></th></th><th>$" . $total . "</th></tr>";
        
        echo "</table>";
 ?>
