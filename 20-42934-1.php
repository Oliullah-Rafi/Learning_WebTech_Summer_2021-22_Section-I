
<?php
# 1.
$length =5;
$width=10;
$area = ($length * $width);
$perimeter = 2*($length+$width);
 echo "The area and perimeter of a Rectangle".$area."<br>";

 echo "Perimeter of a Rectangle".$perimeter;

?>


<?php
#4
$x = 5;
$y = 10;
$z= 15;


if (($x>$y)  && ($x>$z)){
	  echo "X is the largest value";
  
} else if(($y>$x)  && ($y>$z)){
  echo "y is the largest value";
}
else{
	 echo "z is the largest value.<br>";
}
?>




<?php
#3.
#Write a PHP script to find whether a given number is odd or even
#Hints: use IF-ELSE



$number =20;

 if($number % 2 == 0){
        echo "Even"; 
    }
    else{
        echo "Odd";
    }
?>




<?php
#2.
# Write a PHP script to calculate the VAT (Value Added Tax) over an amount
#Hints: VAT = 15% of the amount


$Price = 24.69;
$Vat = 15;
$Totalvat= ($Price / 100)*$Vat;

echo"Totalvat is ".$Totalvat."<br/>";

$Totalprice = ($Price + $Totalvat);

echo"Totalprice is :".$Totalprice;
?>





<?php
#5.
#Write a PHP script to print all the odd numbers between 10 to 100
# Hints: use LOOP & IF-ELSE




 
 	for ($number = 10;$number <= 100;$number += 1) {
 		 if($number % 2 ==1)
 		 {
 		 	 echo "The Even numbers between 10 to 100: $number <br>";
 		 }
 		  else{

 	echo "The odd number is not between 10 to 100";
}


 

 }


?>



<?php
#6
$arr = array(1,2,3,4,5,6);
$element=6;
$cnt=0;

for ($i=0; $i < 6 ; $i++)
    { 
        if($arr[$i]==$element)
                {
                        $cnt=1;
                        $pos=$i+1;
                        break;
                }
    
    }
     if($cnt==0)
        {
                echo"<br/>". " Element Not Found..!!";
        }
        else
        {
            echo"<br/>". " Element is Found..!!";
        }
    
    

?>





<?php
#Print the following shapes
#Hints: use NESTED LOOP
#A.	
for ($i=0; $i<=3; $i++)	
{	 
for($j=1;$j<=$i;$j++)	  
{	  	
echo " * ";	 
}	  	
echo "<br/>";   	
}  

?>




<?php   
#B.
for ($i=0; $i<=3; $i++) 
{    
for($j=1;$j<=3-$i;$j++)     
{       
echo $j;  
}       
echo "<br/>";       
}  

?>

<?php   
#C.
for ($i=0; $i<=3; $i++) 
{    
for($j=1;$j<=$i-3;$j++)     
{       
echo $j;  
}       
echo "<br/>";       
}  

?>


<?php
#8
#A
$fruits = array (
  array(1,2,3,"A"),
  array(1,2,"B","C"),
  array(1,"D","E","F"),
  
);
  
echo $fruits[0][0]."".$fruits[0][1]."".$fruits[0][2]."".$fruits[0][3]."<br>";
echo $fruits[1][0]."".$fruits[1][1]."".$fruits[1][2]."".$fruits[1][3].".<br>";
echo $fruits[2][0]."".$fruits[2][1]."".$fruits[2][2]."".$fruits[2][3].".<br>";

?>

<?php  
#8 
#B.A
 
#B.
for ($i=0; $i<=3; $i++) 
{    
for($j=1;$j<=3-$i;$j++)     
{       
echo $j;  
}       
echo "<br/>";       
}  



?>

<?php  
#8 
#B.B
 

for ($i=0; $i<=3; $i++) 
{    
for($j=1;$j<=3-$i;$j++)     
{       
echo $j;  
}       
echo "<br/>";       
}  



?>