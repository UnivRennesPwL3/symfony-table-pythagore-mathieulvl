<?php
namespace App\Service;

class PythagoreUtility
{
    public function display(): string
    {
        $table = "<table border=\"1\" border-collapse=\"collapse\">\n";
        $table .= "<tr><th>&nbsp;</th>";

       
        for ($i = 0; $i <= 10; $i++) {
            $table .= "<th>$i</th>";
        }
        $table .= "</tr>\n";   
        for ($i = 0; $i <= 10; $i++) {
            $table .= "<tr>";
            $table .= "<th>$i</th>";  

            for ($j = 0; $j <= 10; $j++) {
                if ($i === $j) {
                    $table .= "<td>X</td>"; 
                } else {
                    $table .= "<td>" . ($i * $j) . "</td>";  
                }
            }
            $table .= "</tr>\n";
        }

        $table .= "</table>\n";
        return $table;
    }
}
