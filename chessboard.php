
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
    $whiteStartRow = true;
    $whiteCell = true;
    for( $h = 1; $h <= 8; $h++)
    { // Rows
        if( $whiteStartRow ){ 
            ?>
            <tr>
                <?php
                    for( $i = 1; $i <= 8; $i++ )
                    { // Horizontal cells
                        if( $whiteCell ){
                            ?>
                            <td class="cell white-cell"></td>
                            <?php
                            $whiteCell = !$whiteCell;
                        }
                        else{ ?>
                            <td class="cell black-cell"></td>
                            <?php
                            $whiteCell = !$whiteCell;
                        }
                    }
                ?>
            </tr>
            <?php
            $whiteStartRow = !$whiteStartRow;
        }
        else{
            ?>
            <tr>
            <?php
                for( $i = 1; $i <= 8; $i++ )
                { // Horizontal cells
                    if( !$whiteCell ){
                        ?>
                        <td class="cell white-cell"></td>
                        <?php
                        $whiteCell = !$whiteCell;
                    }
                    else{
                    ?>
                    <td class="cell black-cell"></td>
                    <?php
                        $whiteCell = !$whiteCell;
                    }
                }
            ?>
            </tr>
            <?php
            $whiteStartRow = !$whiteStartRow;
        }
    }
    ?>
    </table>
</body>
</html>
