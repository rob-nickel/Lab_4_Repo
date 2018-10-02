<?php
        echo '<body style="background-color:DarkOrange">';

        $user = $_POST["name"];
        $pass = $_POST["password"];

        echo "Welcome " . $user . "!<br>";
        echo "Your password is " . $pass . "<br><br><br>";

        $baby = $_POST["baby"];
        $neck = $_POST["necklace"];
        $cake = $_POST["cake"];
        if ($baby <= 0)
                $baby = 0;
        if ($neck <= 0)
                $neck = 0;
        if ($cake <= 0)
                $cake = 0;
        $neckCost = $neck * 1399;
        $cakeCost = $cake * 45;
        $shipCost = $_POST['ship'];
        if ($shipCost == "0")
                $ship = "7 Day Shipping";
        else if ($shipCost == 50)
                $ship = "Overnight";
        else
                $ship = "3 Day Shipping";

        $total = $baby + $neckCost + $cakeCost + $shipCost;

        echo "<table border='2'>";
        echo "<tr> <th> X </th> <th>Quantity</th> <th>Cost per Item</th> <th>Sub Total </th></tr>";
        echo "<tr> <th>Baby Carrot</th> <td>" . $baby . "</td> <td>$1</td> <td>$" . $baby . "</td></tr>";
        echo "<tr> <th>10 Karat Gold Necklace</th> <td>" . $neck . "</td> <td>$1,399</td> <td>$" . $neckCost . "</td></tr>";
        echo "<tr> <th>Carrot Cake</th> <td>" . $cake . "</td> <td>$45</td> <td>$" . $cakeCost . "</td></tr>";
        echo "<tr> <th>Shipping</th><td> <td>" . $ship . "</td></td> <td>$" . $shipCost . "</td></tr>";
        echo "<tr> <th><th><th>Total Cost</th></th></th><th>$" . $total . "</th></tr>";
        echo "</table>";
 ?>
