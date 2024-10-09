<?php
namespace App\Service;

class PythagoreUtility
{
    public function display(): string
    {
        $t = "<table border=\"1\" border-collapse=\"collapse\">\n";
        $t .= "<tr><th>&nbsp;</th>";

       
        for ($i = 0; $i <= 10; $i++) {
            $t .= "<th>$i</th>";
        }
        $t .= "</tr>\n";   
        for ($i = 0; $i <= 10; $i++) {
            $t .= "<tr>";
            $t .= "<th>$i</th>";  

            for ($j = 0; $j <= 10; $j++) {
                if ($i === $j) {
                    $t .= "<td>X</td>"; 
                } else {
                    $t .= "<td>" . ($i * $j) . "</td>";  
                }
            }
            $t .= "</tr>\n";
        }

        $t .= "</table>\n";
        return $t;
    }
}
