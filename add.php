<?php
$n1=$_POST["n1"];//stores ist number
$n2=$_POST["n2"];//stores 2nd number

for($i=$n1;$i<=$n2;$i++)
{
 
        if ($i == 1 || $i == 0) 
            continue; 
  
        $flag = 1; 
  
        for ($j = 2; $j <= $i / 2; ++$j) { 
            if ($i % $j == 0) { 
                $flag = 0; 
                break; 
            } 
        } 
  
        
        if ($flag == 1) 
          echo " $i";

}
echo "are prime number btw $n1 and $n2";
?>

