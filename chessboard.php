<!doctype html>
<html>
    <body>
        <style>
            .table{
                width: 400px;
                border: 15px solid #572f00;
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
            }
            .cell{
                width: 30px;
                height: 40px;
                box-sizing: border-box;
                margin: 0px;
                padding: 0px;
            }
            .white-cell{
                background-color: #fff;
            }
            .black-cell{
                background-color: #000;
            }
        </style>
        <table class="table">
        <?php 
        $whiteStart = true; // Just starting the first row with white cell first and alternating it later.
        for($i = 1; $i<=8; $i++){ 
            if($whiteStart){ ?>
                <tr>
                    <td class="cell white-cell"></td>
                    <td class="cell black-cell"></td>
                    <td class="cell white-cell"></td>
                    <td class="cell black-cell"></td>
                    <td class="cell white-cell"></td>
                    <td class="cell black-cell"></td>
                    <td class="cell white-cell"></td>
                    <td class="cell black-cell"></td>
                </tr>
        <?php }
            else{ ?>
                <tr>
                    <td class="cell black-cell"></td>
                    <td class="cell white-cell"></td>
                    <td class="cell black-cell"></td>
                    <td class="cell white-cell"></td>
                    <td class="cell black-cell"></td>
                    <td class="cell white-cell"></td>
                    <td class="cell black-cell"></td>
                    <td class="cell white-cell"></td>
                </tr>
            <?php 
            }
            ?>
        <?php 
        $whiteStart = !$whiteStart; // Here we alternate the boolean value of the variable so as to alternate the row's output
        } ?>
        </table>
</body>
</html>