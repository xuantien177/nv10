<?php
    $n = 3; // row
    $m = 3; // col
    $arrValue1 = [];
    $arrValue2 = [];
    $arrSum = [];
    $arrMinus = [];
    $arrMultiply = [];
    if(isset($_POST['calculate_matrix'])) {
        for ($row = 0; $row < $n; $row++) {
            for ($col = 0; $col < $m; $col++) {
                $arrValue1[$row][$col] = $_POST["value1_$row$col"];
            }
            
        }
        for ($row = 0; $row < $n; $row++) {
            for ($col = 0; $col < $m; $col++) {
                $arrValue2[$row][$col] = $_POST["value2_$row$col"];
            }           
        }
        // Tổng
        for ($row = 0; $row < $n; $row++) {
            for ($col = 0; $col < $m; $col++) {
                $arrSum[$row][$col] = $arrValue1[$row][$col] + $arrValue2[$row][$col];
            }           
        }

        // Hiệu
        for ($row = 0; $row < $n; $row++) {
            for ($col = 0; $col < $m; $col++) {
                $arrMinus[$row][$col] = $arrValue1[$row][$col] - $arrValue2[$row][$col];
            }           
        }

        // Tích
        for ($row = 0; $row < $n; $row++) {
            for ($col = 0; $col < $m; $col++) {
                $arrMultiply[$row][$col] = 0;
                for  ($k = 0; $k < $m; $k++) {
                    $arrMultiply[$row][$col] = $arrMultiply[$row][$col] + $arrValue1[$row][$k] * $arrValue2[$k][$col];
                }
            }           
        }           
                       
    }
      
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/center.css">
    <style>
    .matrix-arr {
        margin-top: 10px;
        display: flex;
        gap: 5px;
    }

    .value_arr {
        max-width: 50px;
        margin-right: 5px;
    }

    .result-oda {
        align-self: flex-start;
        margin-top: 10px;
    }

    .result-matrix-container-child {
        display: flex;
        gap: 10px;
    }
    </style>
</head>

<body>
    <div class="matrix-container">
        <form method="POST" action="">
            <div class="matrix-arr">
                <?php
                echo "<div>";
                echo "<p>Nhập Ma trận 1</p>";
                if($n && $m && $arrValue1) {               
                    for ($row = 0; $row < $n; $row++) {
                        for ($col = 0; $col < $m; $col++) {
                            $arrValue = $arrValue1[$row][$col];
                            echo "<input class='value_arr' type='number' name='value1_$row$col' value='$arrValue' />";
                        }
                        echo "<br>";
                    }
                }
                else {
                    for ($row = 0; $row < $n; $row++) {
                        for ($col = 0; $col < $m; $col++) {
                            echo "<input class='value_arr' type='number' name='value1_$row$col' value='' />";
                        }
                        echo "<br>";
                    }
                }
                echo "</div>";
                echo "<div>";
                echo "<p>Nhập Ma trận 2</p>";
            if($n && $m && $arrValue2) {
                for ($row = 0; $row < $n; $row++) {
                    for ($col = 0; $col < $m; $col++) {
                        $arrValue = $arrValue2[$row][$col];
                        echo "<input class='value_arr' type='number' name='value2_$row$col' value='$arrValue' />";
                    }
                    echo "<br>";
                }
            }
            else {
                for ($row = 0; $row < $n; $row++) {
                    for ($col = 0; $col < $m; $col++) {
                        echo "<input class='value_arr' type='number' name='value2_$row$col' value='' />";
                    }
                    echo "<br>";
                }
            }
            echo "</div>";
            ?>
            </div>
            <div class="mt-3">
                <input class="btn btn-primary" type="submit" name="calculate_matrix" value="Tính">
                <input class="btn btn-danger" type="submit" name="reset_matrix" value="Nhập lại">
            </div>
        </form>
        <div class="result-matrix-container mt-3">
            <h3>KẾT QUẢ</h3>
            <div class="result-matrix-container-child">
                <div>Ma trận Tổng:
                    <?php
                        echo "<div>";
                        if($n && $m && $arrSum) {               
                            for ($row = 0; $row < $n; $row++) {
                                for ($col = 0; $col < $m; $col++) {
                                    $arrValue = $arrSum[$row][$col];
                                    echo "<input class='value_arr' type='number' name='valueSum_$row$col' value='$arrValue' />";
                                }
                                echo "<br>";
                            }
                        }
                        else{               
                            for ($row = 0; $row < $n; $row++) {
                                for ($col = 0; $col < $m; $col++) {
                                    echo "<input class='value_arr' type='number' name='valueSum_$row$col' value='$' />";
                                }
                                echo "<br>";
                            }
                        }
                        echo "</div>";
                    ?>
                </div>
                <div>Ma trận Hiệu:
                    <?php
                        echo "<div>";
                        if($n && $m && $arrSum) {               
                            for ($row = 0; $row < $n; $row++) {
                                for ($col = 0; $col < $m; $col++) {
                                    $arrValue = $arrMinus[$row][$col];
                                    echo "<input class='value_arr' type='number' name='valueMinus_$row$col' value='$arrValue' />";
                                }
                                echo "<br>";
                            }
                        }
                        else{               
                            for ($row = 0; $row < $n; $row++) {
                                for ($col = 0; $col < $m; $col++) {
                                    echo "<input class='value_arr' type='number' name='valueMinus_$row$col' value='$' />";
                                }
                                echo "<br>";
                            }
                        }
                        echo "</div>";
                    ?>
                </div>
                <div>Ma trận Tích:
                    <?php
                        echo "<div>";
                        if($n && $m && $arrMultiply) {               
                            for ($row = 0; $row < $n; $row++) {
                                for ($col = 0; $col < $m; $col++) {
                                    $arrValue = $arrMultiply[$row][$col];
                                    echo "<input class='value_arr' type='number' name='valueMultiply_$row$col' value='$arrValue' />";
                                }
                                echo "<br>";
                            }
                        }
                        else{               
                            for ($row = 0; $row < $n; $row++) {
                                for ($col = 0; $col < $m; $col++) {
                                    echo "<input class='value_arr' type='number' name='valueMultiply_$row$col' value='$' />";
                                }
                                echo "<br>";
                            }
                        }
                        echo "</div>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>