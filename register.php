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
    <title>Đăng ký</title>
</head>
<body>
    <div class="login__page">
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['login'];
            $pass = $_POST['password'];
            if ($username == "" || $pass == "") {
                echo "Bạn hãy nhập đầy đủ thông tin!";
            } else {
                $serverdetails = "localhost";
                $userdetails = "root";
                $password = "";
                $dbdetails = "datanews";
                $conn = new mysqli($serverdetails, $userdetails, $password, $dbdetails);
                mysqli_set_charset($conn, 'UTF8');
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                $sql = "INSERT INTO customer (customer_name, customer_pass) VALUES ('$username', '$pass')";
                if ($conn->query($sql) === TRUE) {
                    echo '<script language="javascript">alert("Đã đăng ký thành công!"); window.location="login.php";</script>';
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
            }
        }   
    ?>
        <div class="login__page-form">
            <div class="come-home">
                <a href="./index.php">
                  <i class="fas fa-home"></i>
                </a>
            </div>
          <div class="login__page-form-banner">
            <div class="login__page-form-user">
              <i class="fas fa-users"></i>
              <h1>REGISTER</h1>
            </div>
          </div>
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
              <button name="submit" type="submit">REGISTER</button>
            </div>
            <div class="form-link">
                <i class="fas fa-arrow-left"></i>
                <a href="./login.php">Bạn đã có tài khoản?</a>
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