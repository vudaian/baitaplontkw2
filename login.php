<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="login__page">
        <div class="login__page-form">
          <div class="come-home">
            <a href="./index.php">
              <i class="fas fa-home"></i>
            </a>
          </div>
          <div class="login__page-form-banner">
            <div class="login__page-form-user">
              <i class="fas fa-users"></i>
              <h1>WELCOME</h1>
            </div>
          </div>
          <?php
            if (isset($_POST["submit"])) {
                // lấy thông tin người dùng
                $username = $_POST["login"];
                $password = $_POST["password"];
                //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
                //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
                $username = strip_tags($username);
                $username = addslashes($username);
                $password = strip_tags($password);
                $password = addslashes($password);
                $conn = mysqli_connect("localhost","root","","datanews");
                if (mysqli_connect_errno())
                {
                echo "Kết nối thất bại " . mysqli_connect_error();
                }
                $sql = "select * from customer where customer_name = '$username' and customer_pass = '$password' ";
                $query = mysqli_query($conn,$sql);
                $num_rows = mysqli_num_rows($query);
                if ($num_rows==0) {
                    echo '<script language="javascript">alert("Sai/thiếu tên đăng nhập hoặc mật khẩu, hãy nhập lại!"); window.location="login.php";</script>';
                }else{
                    echo '<script language="javascript">alert("Đã đăng nhập, bấm OK để về trang chủ!"); window.location="index.php";</script>';
                }
            }
          ?>
          <form action="" method="POST" onsubmit="return validate()"> 
            <div class="form-field">
              <input type="text" id="login" class="form-input" placeholder=" " name="login">
              <label for="" class="form-label">Username</label>
            </div>
            <div class="form-field">
              <input type="password" id="password" class="form-input" placeholder=" " name="password">
              <label for="" class="form-label">Password</label>
            </div>
            <div class="form-btn">
              <button name="submit" type="submit">LOGIN</button>
            </div>
            <div class="form-link">
              <a href="./register.php">Bạn chưa có tài khoản?</a>
              <i class="fas fa-arrow-right"></i>
            </div>
          </form>
          <script>
                function validate() {
                var u = document.getElementById("login").value;
                var p = document.getElementById("password").value;
                
                if(u== "") {
                alert("Vui lòng nhập tên!");
                return false;
                }
                if(p == "") {
                alert("Vui lòng nhập mật khẩu!");
                return false;
                }   
                return true;
                }
            </script>
        </div>
    </div>
</body>
</html>