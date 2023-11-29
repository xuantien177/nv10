<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact 1 page</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .gender-container,
        .skill-container {
            display: flex;
            gap: 10px;
        }

        .gender-container-child,
        .skill-container-child {
            display: flex;
            flex-direction: column;
        }

        .margin_div {
            margin-bottom: 5px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
<div style="margin-left: 50px;">
    <div class="register-container">
        <h3>
            <b>Form Liên hệ</b>
        </h3>
        <form method="POST" action="">
        <input type="hidden" value="Contact1Page" name="submit_contact1page">
            <div class="form-group col-12 mb-3 margin_div">
                <label for="">Username:</label>
                <input class="form-control" type="text" name="name" value="" />
            </div>
            <div class="form-group col-12 mb-3 gender-container margin_div">
                <label for="">Gender:</label>
                <span class="gender-container-child">
                    <span><input type="radio" name="gender" value="Male" />Male</span>
                    <span><input type="radio" name="gender" value="Female" />Female</span>
                </span>
            </div>
            <div class="form-group col-12 mb-3 margin_div">
                <label for="">Address:</label>
                <select name="address">
                    <option value="HN">Hà Nội</option>
                    <option value="TPHCM">Thành phố HCM</option>
                    <option value="DN">Đà Nẵng</option>
                    <option value="QN">Quảng Ninh</option>
                    <option value="HP">Hải Phòng</option>
                </select>
            </div>
            
    
            <div class="form-group col-12 mb-3" style="margin-top: 20px; ">
                <label for="">Note:</label>
                <textarea class="form-control" name="note" value=""></textarea>
            </div>
            <div class="form-group mt-3 col-3 margin_div">
                <button class="btn btn-danger btn-delete" type="button" name="btn-delete">Reset</button>
                <input class="btn btn-primary" type="submit" value="Contact" name="btn-submit" />
            </div>
            <div class="form-group col-12 mb-3 margin_div">
                <p >Bấm contact để hiển thị kết quả bên dưới</p>
            </div>
            <div class="form-group col-12 mb-3 margin_div">
                <label for="">----------------------------------------------------------</label>
            </div>
        </form><?php
    $name = '';
    $note = "";
    $gender = "";
    $address = "";
    $validate = false;
    // $address = '';
    // $job = "";
    // if(isset($_POST["name"]) && isset($_POST["address"])  && isset($_POST["job"]) && isset($_POST["note"]) ) { 
    if (!empty($_POST["name"]) && isset($_POST["note"]) && ($_POST["note"] !== "")  && !empty($_POST["gender"])) {
        $validate = true;
        $name = $_POST["name"];
        $note = $_POST["note"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
    }
    ?>
    
    </div>
        <div class="register-result-container">
            <?php
            if ($validate) {
                echo "<h2><b>Thông tin liên hệ</b></h2>";
                echo "<div>";
                echo "Username: <span>$name</span>";
                echo "</div>";
                echo "<div class='mt-3'>";
                echo "Gender: <span>$gender</span>";
                echo " </div>";
                echo "<div class='mt-3'>";
                echo "Address: <span>$address</span>";
                echo " </div>";
                echo "<div class='mt-3'>";
                echo "Note: <span>$note</span>";
                echo " </div>";
            }
            ?>
        </div>
        </div>
</body>

<script>
    var inputArr = document.querySelectorAll("input[type=text]");
    var btnDelete = document.querySelector(".btn-delete")
    btnDelete.onclick = () => {
        console.log(inputArr);
        for (var i = 0; i < inputArr.length; i++) {
            inputArr[i].value = ""
        }
    }
</script>