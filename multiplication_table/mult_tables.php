<!DOCTYPE html>

<html>
	<head>
		<title> Multiplication Table </title>
	</head>

	<body>

        <table>
            <!-- First row -->
            <tr>
                <th></th>
        		<?php
                    for($x = 1; $x <= 100; $x++):
        				echo "<th> $x </th>";
        		    endfor;
                ?>
            </tr>

            <?php
                for($x = 1; $x <= 100; $x++):
                    echo "<tr>";
                        for($y = 1; $y <= 100; $y++):
                            // First col
                            if($y == 0):
                                echo "<th> $y </th>";
                            // Multiplication rows and cols
                            else:
                                $z = $x * $y;
                                echo "<td> $z </td>";
                            endif;
                        endfor;
                    echo "</tr>";
                endfor;
            ?>

        </table>

	</body>
</html>
