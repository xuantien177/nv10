<?php
        $pageCenter = '';
    if(isset($_POST["submit_register"])){
        $pageCenter = 'register.php';
    }
    if(isset($_POST["submit_contact1page"])){
        $pageCenter = 'contact1page.php';
    }
    
    if(isset($_POST["submit_calculate"])){
        $pageCenter = 'calculate.php';
    }
    if(!empty($_POST["submit_calculate2"]) || isset($_POST['submitCalculate'])){
        $pageCenter = 'calculate2.php';
    }
    if(!empty($_POST["submit_totalScore"]) || isset($_POST['submitTotalScore']) || isset($_POST['cancelTotalScore'])){
        $pageCenter = 'totalScore.php';
    }
    if(!empty($_POST["submit_oneDimensionalArray"]) || isset($_POST['calculate_total_oda']) || isset($_POST['reset_total_oda'])){
        $pageCenter = 'oneDimensionalArray.php';
    }
    if(isset($_POST["submit_listStudent"])){
        $pageCenter = 'listStudent.php';
        // header('location: ./listStudent.php');
    }

    if(isset($_POST["submit_addStudent"])){
        $pageCenter = 'addStudent.php';
        // header('location: ./addStudent.php');
    }
    if(isset($_POST["submit_yahoo"])){
        $pageCenter = 'loginYahoo.php';
        // header('location: ./loginYahoo.php');
    }
    
    
    if(isset($_POST["submit_contact"])){
        $pageCenter = 'contact.php';
    }
    if(isset($_POST["submit_matrix"]) || isset($_POST["calculate_matrix"]) || isset($_POST["reset_matrix"])){
        $pageCenter = 'matrix.php';
    }
    if(isset($_POST["submit_associateArr"])){
        $pageCenter = 'associateArr.php';
    }
    
    if(isset($_GET["page"])){
        if($_GET["page"] === "Home") {
            $pageCenter = 'home.php';
        }
    }
    if(isset($_GET["page"])){
        if($_GET["page"] === "DrawTable") {
            $pageCenter = 'drawTable.php';
        }
    }
    if(isset($_GET["page"])){
        if($_GET["page"] === "Loop") {
            $pageCenter = 'loop.php';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhiệm vụ 10</title>
    <link rel="stylesheet" href="./css/index.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header,
        footer {
            border-bottom: 2px solid #333;
            padding: 1em;
            text-align: center;
        }

        header {
            display: flex;
            justify-content: space-between;
        }

        main {
            padding: 1em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            border: 2px solid #333;
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>


    <main>
        <h2>Danh Sách Bài Tập</h2>
        <table>
            <thead>
                <tr>
                <th style="text-align: center;">Nguyễn Xuân Tiến<br>Mã sinh viên: AT160448 <br>
                        <img src="avt.jpg" alt="My Image" style="height: 200PX; width: 200px;">
                </th>
                    <th>
                        <div style="display: flex; justify-content: center;">
                        <?php include './pages/head.php'; ?>
                            <!-- <img src="https://template.canva.com/EAENvp21inc/1/0/1600w-qt_TMRJF4m0.jpg" alt="Banner" style="max-width: 95%; height: 70%; width: 100%;"> -->
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th style="text-align: center;">
                <a href="../7.1/index.php">1.7.1. Nhiệm vụ 1: Tạo template</a><br><br>
                <a href="../nv2/index.php">1.7.2. Nhiệm vụ 2: Sử dụng template</a><br><br>
                <a href="../nv3/index.php">1.7.3. Nhiệm vụ 3: Lấy dữ liệu và gửi dữ liệu</a><br><br>
                <a href="../nv4/index.php">1.7.4. Nhiệm vụ 4: Form tính toán</a><br><br>
                <a href="../nv5/index.php">1.7.5. Nhiệm vụ 5: Mảng</a><br><br>
                <a href="../nv6/index.php">1.7.6. Nhiệm vụ 6: GetForm</a><br><br>
                <a href="../nv7/7.7/index.php">1.7.7. Nhiệm vụ 7: Session</a><br><br>
                <a href="../nv8/7.8/index.php">1.7.8. Nhiệm vụ 8: Cookie</a><br><br>
                <a href="../nv9/index.php">1.7.9. Nhiệm vụ 9: Function</a><br><br>
                <a href="../nv10/index.php">1.7.10. Nhiệm vụ 10: Đọc, ghi file</a><br><br>
            </th>
    
                    <th>

                        <body>
                            <div class="container-app">
                                
                                <div class="content">
                                    <?php include './pages/left.php'; ?>
                                    <div class="content-right">
                                    <?php 
                                    if($pageCenter!='') include './pages/'.$pageCenter; 
                                    else echo '<h2> Center </h2>'
                                    ?>
                                    </div>
                                </div>
                                <?php //include './pages/footer.php' ;
                                ?>
                            </div>
                        </body>


                    </th>
                </tr>
                <tr>
                    <!-- <th colspan="2" style="text-align: center;">Bản quyền © 2023 - Nguyễn Xuân Tiến</th> -->
                    <th colspan="2" style="text-align: center;"> <?php include './pages/footer.php'; ?>
                    </th>
                </tr>
            </tbody>
        </table>
    </main>
</body>

</html>
