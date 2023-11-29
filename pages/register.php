<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    .margin_div{
        margin-bottom: 5px;
        margin-top: 5px;
    }
    
    </style>
</head> 

<body>
    <div class="register-container">
        <h3>
            <b>Form Đăng Ký</b>
        </h3>
        <form method="POST" action="pages/registerResult.php">
            <div class="form-group col-12 mb-3 margin_div">
                <label for="">Username:</label>
                <input class="form-control" type="text" name="name" value="" />
            </div>
            <div class="form-group col-12 mb-3 margin_div">
                <label for="">Password:</label>
                <input class="form-control" type="password" name="password" value="" />
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
            <div class="form-group col-12 mb-3 margin_div">
                <label for="">Enable Programming Language:</label>
                <span class="ms-4"><input type="checkbox" name="programmingLanguage[]" value="PHP"> PHP </span>
                <span class="ms-4"><input type="checkbox" name="programmingLanguage[]" value="C#"> C# </span>
                <span class="ms-4"><input type="checkbox" name="programmingLanguage[]" value="Java"> Java </span>
                <span class="ms-4"><input type="checkbox" name="programmingLanguage[]" value="C++"> C++ </span>
            </div>
            <div class="form-group col-12 mb-3 skill-container margin_div">
                <label for="">Skill:</label>
                <span class="skill-container-child">
                    <span><input type="radio" name="skill" value="Normal" />Normal</span>
                    <span><input type="radio" name="skill" value="Good" />Good</span>
                    <span><input type="radio" name="skill" value="VeryGood" />VeryGood</span>
                    <span><input type="radio" name="skill" value="Excellent" />Excellent</span>
                </span>
            </div>
            <!-- <div class="form-group col-12 mb-3">
                <label for="">Địa chỉ:</label>
                <input class="form-control" type="text" name="address" value="" />
            </div>
            <div class="form-group col-12 mb-3">
                <label for="">Nghề:</label>
                <input class="form-control" type="text" name="job" value="" />
            </div> -->
            <div class="form-group col-12 mb-3" style="margin-top: 20px; ">
                <label for="">Note:</label>
                <textarea class="form-control" name="note" value=""></textarea>
            </div>
            <div class="form-group col-12 mb-3 margin_div">
                <label for="">Marriage Status:</label>
                <span class="ms-4"><input type="checkbox" name="marriageStatus" value="1"></span>
            </div>
            <div class="form-group mt-3 col-3 margin_div">
                <button class="btn btn-danger btn-delete" type="button" name="btn-delete">Xóa</button>
                <input class="btn btn-primary" type="submit" value="Đăng ký" name="btn-submit" />
            </div>
        </form>
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
