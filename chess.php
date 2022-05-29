<?php

echo "<table>";
    for($x = 0; $x <= 3; $x++){
        echo "<tr>";
        for($y = 0; $y <= 3; $y++){
                
                echo "<td style='border: 1px solid #000000; width: 50px; height: 50px; background-color: white;'>";
                echo "</td>";
            
                echo "<td style='border: 1px solid #000000; width: 50px; height: 50px; background-color: black;'>";
                echo "</td>";           
        }
        echo "</tr>";
        echo "<tr>";
        for($z = 0; $z <= 3; $z++){
            echo "<td style='border: 1px solid #000000; width: 50px; height: 50px; background-color: black;'>";
            echo "</td>";  
            
            echo "<td style='border: 1px solid #000000; width: 50px; height: 50px; background-color: white;'>";
            echo "</td>";            
        }
        echo "</tr>";
    }
echo "</table>";
?>
