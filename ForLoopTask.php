<?php
$result = 0;
for($x = 1; $x <= 30; $x++){
$result += $x;
}
echo "The sum of numbers between 1 and 30 = " . $result;
echo "<br/><br/>";

for ($i=1; $i<=5; $i++)	
{	 
for($j=1;$j<=$i;$j++)	  
{	  	
echo "*"." ";	 
}	  	
echo "<br/>";   
}

echo "<br/>";

function Factorial($number){ 
    if($number <= 1){   
        return 1;   
    }   
    else{   
        return $number * Factorial($number - 1);   
    }   
} 
  
$n = 4; 
$fact = Factorial($n);
echo "Factorial = $fact";
echo "<br/><br/>";

echo "<table border ='1' style='border-collapse: collapse;font-size:20px;'>";
	for ($row=1; $row <= 6; $row++) { 
		echo "<tr>";
		for ($col=1; $col <= 5; $col++) { 
		   $p = $col * $row;
		   echo "<td>" . $row . "*" . $col . "=" . $p . "</td>\n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>