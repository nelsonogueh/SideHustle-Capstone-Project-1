<html>
 <head>   
<title> PHP PROGRAM TO CALCULATE ELECTRICITY BILL </title>
<H3>  PHP PROGRAM TO CALCULATE ELECTRICITY BILL</H3>
</head>
<body> 
<form method="post">
        ENTER THE METER NUMBER:
        <input type="number" name="metre_no" placeholder="Enter Metre number"/><br/><br>
        ENTER TOTAL UNITS:
        <input type="number" name="units" placeholder="Enter units consumed"/><br/><br>
        <input type="submit" name="Total" value="CALCULATE">
</form>
</body>
        

<?php
   // $total_unit = readline("ENTER THE TOTAL UNITS CONSUMED:");
   if(isset($_POST['Total']))
   {
   $metre_no=$_POST['metre_no'];
   $units=$_POST['units'];
   
    if ($units <= 50) 
    {
        $total_cost = $units * 3.50;
    } 
    elseif ($units >50 && $units <=150)
    {    
        $first_50=(50*3.50);
        $next_100=($units-50) * 4.00;    
        $total_cost=$first_50 + $next_100;
    }
    
    elseif ($units >150 && $units< 250 )
    {
        $second_100= (($units-150)*5.20);     
        $first_100=(100*4.00);
        $first_50=(50*3.50);
        $total_cost=($first_50+$first_100+$second_100);
    }
    
    else
    {
        $total_cost=($units*6.50);
    }
        echo "Your meter Number is $metre_no<br/>";
        echo "Total units consumed is $units units<br/>";
        echo "The total cost for the electrical bill is $$total_cost <br/>";
}
    ?>
</html>
