<?php
    $checkWriteFile = false;
    $rootDir = realpath($_SERVER["DOCUMENT_ROOT"])."/nv10";
    if(isset($_POST['submit-student'])) {
        if(!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['age']) && !empty($_POST['class'])) {
            clearstatcache();
            $myfile = fopen("../student.txt", "a") or die("Unable to open file!");
            if(filesize("../student.txt")) {
                // your file is not empty
                fwrite($myfile,"\n");
                fwrite($myfile, $_POST['name']."\n");
                fwrite($myfile, $_POST['address']."\n");
                fwrite($myfile, $_POST['age']."\n");
                // fwrite($myfile, $_POST['class']);
                fclose($myfile);
                $checkWriteFile = true;
            }
            else {
                fwrite($myfile, $_POST['name']."\n");
                fwrite($myfile, $_POST['address']."\n");
                fwrite($myfile, $_POST['age']."\n");
                // fwrite($myfile, $_POST['class']);
                fclose($myfile);
                $checkWriteFile = true;
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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/center.css">
    <link rel="stylesheet" href="./css/index.css">
    <style>
           .form-group {
  display: flex;
  align-items: center; /* Căn chỉnh các phần tử theo chiều dọc */
  margin-bottom: 15px; /* Khoảng cách giữa các div form-group */
  margin-left: 10px;
}
.form-group label {
  min-width: 120px; /* Đảm bảo rộng đủ cho label */
  margin-right: 15px; /* Khoảng cách giữa label và input */
}
    </style>
</head>

<body>
<div class="content-right">
                <div class="add-student-container">
                    <h3>Thêm sinh viên mới</h3>
                    <form method="POST" action="" class="row">
                        <div class="form-group">
                            <label for="">Tên:</label>
                            <input class="form-control" type="text" name="name" value="" />
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ:</label>
                            <input class="form-control" type="text" name="address" value="" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tuổi:</label>
                            <input class="form-control" type="text" name="age" value="" />
                        </div>
                        <!-- <div class="form-group mb-3">
                            <label for="">Lớp:</label>
                            <input class="form-control" type="text" name="class" value="" />
                        </div> -->
                        <div style="text-align: center;">
                            <input class="btn btn-primary" type="submit" name="reset-form" value="Nhập lại">
                            <input class="btn btn-danger" type="submit" name="submit-student" value="Ghi">
                        </div>
                        <?php
                            if($checkWriteFile) {
                                echo "<p style={color:'red'}>Thêm thành công Student</p>";
                            }
                        ?>
                    </form>
                </div>
            </div>
</body>

</html>