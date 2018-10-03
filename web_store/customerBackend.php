<?php
    echo "<link rel=stylesheet type=text/css href=style.css>";
    // Input
    $username = $_POST["username"];
    $password = $_POST["password"];
    $tacos = $_POST["tacos_q"];
    $burger = $_POST["burger_q"];
    $hotdog = $_POST["hotdog_q"];
    $shipping = $_POST["shipping"];

    // Prices
    $p_tacos = 5 * $tacos;
    $p_burger = 7.5 * $burger;
    $p_hotdog = 1.5 * $hotdog;

    echo "<h3> Thank you for your purchase! </h3>";
    echo "username " . $username . "<br>";
    echo "password " . $password . "<br> <br>";

    echo "<table id=\"receipt\">";
        echo "<tr>";
            echo "<th> </th>";
            echo "<th> Quantity </th>";
            echo "<th> Cost Per Item</th>";
            echo "<th> Sub Total</th>";
        echo "</tr>";

        echo "<tr>";
            echo "<th> Tacos </th>";
            echo "<td>" . $tacos . "</td>";
            echo "<td> $5 </td>";
            echo "<td> $" . $p_tacos . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<th> Burgers </th>";
            echo "<td>" . $burger . "</td>";
            echo "<td> $7.5 </td>";
            echo "<td> $" . $p_burger . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<th> Hot Dogs </th>";
            echo "<td>" . $hotdog . "</td>";
            echo "<td> $1.5 </td>";
            echo "<td> $" . $p_hotdog . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<th> Shipping </th>";
            echo "<td colspan=\"2\">" . $shipping .  "</td>";
            if ($shipping == "Overnight"){
                echo "<td> $50 </td>";
                $p_shipping = 50;
            }
            else if ($shipping == "3 days"){
                echo "<td> $5 </td>";
                $p_shipping = 5;
            }
            else {
                echo "<td> Free </td>";
                $p_shipping = 0;
            }
        echo "</tr>";

        $total = $p_tacos + $p_burger + $p_hotdog + $p_shipping;

        echo "<tr>";
            echo "<th colspan=\"3\"> Total Cost </th>";
            echo "<td> $" . $total . "</td>";
        echo "</tr>";


    echo "</table";

?>
