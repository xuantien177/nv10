<?php
    // $rootDir = realpath($_SERVER["DOCUMENT_ROOT"])."\\7.2\\";
    // $rootDir = str_replace('\\', '/', $rootDir);
    if(isset($_POST["submitUpload"])) {
        if(isset($_FILES['fileToUpload'])){
            $files = $_FILES['fileToUpload'];
        
        $names = $files['name'];
        $types = $files['type'];
        $tmp_names = $files['tmp_name'];
        $errors = $files['error'];
        $sizes = $files['size'];

        //Số file được upload
        $numitems = count($names);
        $numfiles = 0;
        
    }
        
?>


<?php
        $pageCenter = '';
    if(isset($_POST["submit_register"])){
        $pageCenter = 'register.php';
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
        header('location: ./addStudent.php');
    }
    if(isset($_POST["submit_yahoo"])){
        header('location: ./loginYahoo.php');
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
    <title>upload</title>
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/center.css">
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
                        <img src="../ntq.jpg" alt="My Image" style="height: 200PX; width: 200px;">
                </th>
                    <th>
                    <div style="display: flex; justify-content: center;">

<body>
    <div class="header-container">
        <img class="img-header" src="../images/header-small.png" alt="" style="width: 90%;">
        <nav class="pages">
        <form method="get" action="">
                <input type="submit" value="Home" name="page">
                <!-- <input type="submit" value="DrawTable" name="page">
                <input type="submit" value="Loop" name="page"> -->
            </form>
            <form method="post" action="">
                <!-- <input type="submit" value="Calculate" name="submit_calculate">
                <input type="submit" value="Register" name="submit_register">
                <input type="submit" value="Contact" name="submit_contact">
                <input type="submit" value="Calculate2" name="submit_calculate2">
                <input type="submit" value="TotalScore" name="submit_totalScore"> -->
                <!-- <input type="submit" value="OneDimensionalArray" name="submit_oneDimensionalArray"> -->
                <input type="submit" value="Matrix" name="submit_matrix">
                <input type="submit" value="Matrix 2D" name="submit_matrix">
                <input type="submit" value="AssociateArr" name="submit_associateArr">
                <!-- <input type="submit" value="ListStudent" name="submit_listStudent">
                <input type="submit" value="AddStudent" name="submit_addStudent">
                <input type="submit" value="Yahoo" name="submit_yahoo"> -->
            </form>
           
        </nav>
    </div>
</body>
<!-- <img src="https://template.canva.com/EAENvp21inc/1/0/1600w-qt_TMRJF4m0.jpg" alt="Banner" style="max-width: 95%; height: 70%; width: 100%;"> -->
</div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align: center;"><a href="../7.1/index.php">1.7.1. Nhiệm vụ 1: Tạo template</a><br><br>
                <a href="../nv2/index.php">1.7.2. Nhiệm vụ 2: Sử dụng template</a><br><br>
                <a href="../nv3/index.php">1.7.3. Nhiệm vụ 3: Lấy dữ liệu và gửi dữ liệu</a><br><br>
                <a href="../nv4/index.php">1.7.4. Nhiệm vụ 4: Form tính toán</a><br><br>
                <a href="../nv5/index.php">1.7.5. Nhiệm vụ 5: Mảng</a><br><br></th>
                    <th>

                        <body>
                            <div class="container-app">
                                
                                <div class="content">
                                    <?php include './left.php'; ?>
                                    <div class="content-right">
                                    <div class="upload-container">
                    <h1>Danh sách file đã Upload:</h1> 
                    <div>
                        <?php
                        for ($i = 0; $i < $numitems; $i++) {
                            if ($errors[$i] == 0) {
                                $numfiles++;
                                // $pathDownloadFile = '../uploads/'.$names[$i];
                                // echo "<a href='$pathDownloadFile'>Download File: $names[$i]</a><br>";

                                $pathDownloadFile = 'download.php?path=../uploads/'.$names[$i];
                                echo "<a href='$pathDownloadFile'>Download File: $names[$i]</a><br>";
                                

                                // echo "<b>Uploaded file $numfiles:</b><br>";
                                // echo "Name: $names[$i] <br>";
                                // echo "Temporary saved at: $tmp_names[$i] <br>";
                                // echo "Size: $sizes[$i] bytes<br><hr>";
                                // move_uploaded_file($tmp_names[$i],'../uploads/'.$names[$i]);
                            }
                        }
                        // echo "Number of uploaded files: " .$numfiles;
                        
                        }else {
                            echo "No files selected."; 
                        }
                        ?>
                    </div>
                </div>
                                    </div>
                                </div>
                                <?php //include './pages/footer.php' ;
                                ?>
                            </div>
                        </body>


                    </th>
                </tr>
                <tr>
                    <!-- <th colspan="2" style="text-align: center;">Bản quyền © 2023 - Nguyễn Thị Quỳnh</th> -->
                    <th colspan="2" style="text-align: center;"> <?php include './footer.php'; ?>
                    </th>
                </tr>
            </tbody>
        </table>
    </main>
</body>

</html>
