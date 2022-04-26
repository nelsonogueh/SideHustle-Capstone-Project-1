<!DOCTYPE html>
<head></head>

<!-- input Form for units  -->
<body>
    <p> <b>NOTE: </b>Units are bought in 50(s) and 100(s)</p>
    <form action="electricBill.php" method="get">
        UNIT: <input type="text" name="unit">
        <input type="submit">
    </form>
</body>
<br>

<!-- conditional statement for electiric bill -->
<?php 
    $unitMeasure = $_GET["unit"]??'0';
    $unitMeasureChecker = $unitMeasure % 50 ;

    if ($unitMeasureChecker == 0 ){
        if($unitMeasure == 0 || $unitMeasure < 0){
            echo "No empty unit allowed";
            }elseif ($unitMeasure == "50"){
                echo "Your electric bill is NGN. 3.50/unit";
            } elseif ($unitMeasure == "100" ){
                echo "Your electric bill is NGN. 4.00/unit";
            } elseif ($unitMeasure == "200" || $unitMeasure < "250" ){
                echo "Your electric bill is NGN. 5.20/unit";
            }elseif ($unitMeasure >= "250" ){
                echo "Your electric bill is NGN. 6.50/unit";
            } else{
                echo "Your inputted the wrong value";
            }

    } else {
        echo "READ THE NOTE AND TRY AGAIN!!!";
    }

?> 



</html>