<?php
$name = '';
$note = "";
$password = '';
$gender = "";
$address = "";
$programmingLanguage = "";
$skill = "";
$marriageStatus = "";
$validate = false;
// $address = '';
// $job = "";
// if(isset($_POST["name"]) && isset($_POST["address"])  && isset($_POST["job"]) && isset($_POST["note"]) ) { 
if (!empty($_POST["name"]) && isset($_POST["note"]) && ($_POST["note"] !== "") && isset($_POST["password"]) && ($_POST["password"] !== "") && !empty($_POST["gender"]) && !empty($_POST["programmingLanguage"]) && !empty($_POST["skill"])) {
    $validate = true;
    $name = $_POST["name"];
    $note = $_POST["note"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    for ($i = 0; $i < count($_POST["programmingLanguage"]); $i++) {
        if ($i === 0) {
            $programmingLanguage = $_POST["programmingLanguage"][$i];
        } else {
            $programmingLanguage = $programmingLanguage . "," . $_POST["programmingLanguage"][$i];
        }
    }
    $skill = $_POST["skill"];
    $marriageStatus =  isset($_POST["marriageStatus"]) && $_POST["marriageStatus"] === "1" ? "Đã kết hôn" : "Chưa kết hôn";

    // $address = $_POST["address"];
    // $job = $_POST["job"];
}
?>

<?php
$pageCenter = '';
if (isset($_POST["submit_register"])) {
    $pageCenter = 'register.php';
}

if (isset($_POST["submit_calculate"])) {
    $pageCenter = 'calculate.php';
}
if (!empty($_POST["submit_calculate2"]) || isset($_POST['submitCalculate'])) {
    $pageCenter = 'calculate2.php';
}
if (!empty($_POST["submit_totalScore"]) || isset($_POST['submitTotalScore']) || isset($_POST['cancelTotalScore'])) {
    $pageCenter = 'totalScore.php';
}
if (!empty($_POST["submit_oneDimensionalArray"]) || isset($_POST['calculate_total_oda']) || isset($_POST['reset_total_oda'])) {
    $pageCenter = 'oneDimensionalArray.php';
}
if (isset($_POST["submit_listStudent"])) {
    $pageCenter = 'listStudent.php';
    // header('location: ./listStudent.php');
}

if (isset($_POST["submit_addStudent"])) {
    header('location: ./addStudent.php');
}
if (isset($_POST["submit_yahoo"])) {
    header('location: ./loginYahoo.php');
}


if (isset($_POST["submit_contact"])) {
    $pageCenter = 'contact.php';
}
if (isset($_POST["submit_matrix"]) || isset($_POST["calculate_matrix"]) || isset($_POST["reset_matrix"])) {
    $pageCenter = 'matrix.php';
}
if (isset($_POST["submit_associateArr"])) {
    $pageCenter = 'associateArr.php';
}

if (isset($_GET["page"])) {
    if ($_GET["page"] === "Home") {
        $pageCenter = 'home.php';
    }
}
if (isset($_GET["page"])) {
    if ($_GET["page"] === "DrawTable") {
        $pageCenter = 'drawTable.php';
    }
}
if (isset($_GET["page"])) {
    if ($_GET["page"] === "Loop") {
        $pageCenter = 'loop.php';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
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
                                        </form>
                                        <form method="post" action="">
                                            <input type="submit" value="Register" name="submit_register">
                                            <input type="submit" value="Contact1Page" name="submit_contact">
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
                <a href="../nv5/index.php">1.7.5. Nhiệm vụ 5: Mảng</a><br><br>
                <a href="../nv6/index.php">1.7.6. Nhiệm vụ 6: GetForm</a><br><br>
            </th>
                    <th>

                        <body>
                            <div class="container-app">

                                <div class="content">
                                    <?php include './left.php'; ?>
                                    <div class="content-right">
                                        <div class="register-result-container">
                                            <?php
                                            if ($validate) {
                                                echo "<h3><b>Kết quả đăng ký</b></h3>";
                                                echo "<div>";
                                                echo "Username: <span>$name</span>";
                                                echo "</div>";
                                                echo "<div class='mt-3'>";
                                                echo "Password: <span>$password</span>";
                                                echo " </div>";
                                                echo "<div class='mt-3'>";
                                                echo "Gender: <span>$gender</span>";
                                                echo " </div>";
                                                echo "<div class='mt-3'>";
                                                echo "Address: <span>$address</span>";
                                                echo " </div>";
                                                echo "<div class='mt-3'>";
                                                echo "Enable Programming Language: <span>$programmingLanguage</span>";
                                                echo " </div>";
                                                echo "<div class='mt-3'>";
                                                echo "Skill: <span>$skill</span>";
                                                echo " </div>";
                                                echo "<div class='mt-3'>";
                                                echo "Note: <span>$note</span>";
                                                echo " </div>";
                                                echo "<div class='mt-3'>";
                                                echo "Marriage Status: <span>$marriageStatus</span>";
                                                echo " </div>";
                                            }
                                            ?>
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