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
    <link rel="stylesheet" href="   ./assets/fonts/fontawesome-free-5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        .around_right{
            width: 100%;
            padding: 40px;
        }
        .around_right-title {
            font-size: 3.5rem;
            margin-bottom: 64px;
            text-align: center;
        }
        .form-add div{
            display: flex;
            margin: 24px 0;
        }
        .form-add div label{
            min-width: 80px;
            width: 15%;
            font-size: 2rem;
            margin-right: 2px;
            line-height: 2.2rem;
        }
        .form-add div label span{
            color: red;
        }
        .form-add div input{
            width: 100%;
            padding: 16px;
            font-size: 2rem;
            outline: none;
        }
        .form-add div:last-child input {
            padding: 36px 16px;
        }
        .btn button{
            padding: 12px 36px;
            background: #00FFFF;
            border: none;
            box-shadow: 1px 1px 3px grey;
            float: right;
            margin-right: 32px;
            cursor: pointer;
            font-size: 1.2rem;
            transition: box-shadow ease 0.25s;
        }
        .btn button:hover{
            box-shadow: 2px 2px 5px grey;
        }
        .back-admin i {
            font-size: 3.5rem;
            color: var(--black-color);
            transition: color ease 0.3s;
        }
        .back-admin i:hover {
            color: var(--hover-color);
        }
        .hover-news {
            border-right: 8px solid var(--hover-color);
        }
    </style>
    <title>ADD</title>
</head>
<body>
    <div class="around">
        <div class="around_left l-2 m-0 c-0">
            <h1 class="around_left-title">ADD</h1>
            <div class="around_left-item hover-news">
                <i class="fas fa-newspaper"></i>
                <p><a href="#">Tin mới</a></p>
            </div>
            <div class="around_left-item">
                <i class="fas fa-running"></i>
                <p><a href="./addsport.php">Tin thể thao</a></p>
            </div>
            <div class="around_left-item">
                <i class="fas fa-tshirt"></i>
                <p><a href="#tinthoitrang">Tin thời trang</a></p>
            </div>
            <div class="around_left-item">
                <i class="fas fa-fire"></i>
                <p><a href="#tinnong">Tin nóng</a></p>
            </div>
        </div>
        <div class="around_right l-10 m-12 c-12">
            <div class="back-admin">
                <a href="./administration.php">
                    <i class="fas fa-home"></i>
                </a>
            </div>
            <h1 class="around_right-title">Hãy thêm tin mới !</h1>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $title = $_POST['title'];
                $image = $_POST['image'];
                $time = $_POST['time'];
                $details = $_POST['details'];
                if ($title == "" || $image == "" || $time == "" || $details == "") {
                        echo '<script language="javascript">alert("Bạn hãy nhập đầy đủ thông tin của tin tức!");</script>';
                        // echo "Bạn hãy nhập đầy đủ thông tin của tin tức";
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
                    $sql = "INSERT INTO tinmoi (titlenew, imagenew, timenew, detailsnew) VALUES ('$title', '$image', '$time', '$details')";
                    if ($conn->query($sql) === TRUE) {
                        echo '<script language="javascript">alert("Đã thêm tin mới!"); window.location="addnews.php";</script>';
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                }
            }   
        ?>
            <form action="addnews.php" class="form-add" method="POST">
                <div class="form-add__td">
                    <label for="">Tiêu đề(<span>*</span>)</label>
                    <input type="text" placeholder="Điền tiêu đề tại đây..." name="title">
                </div>
                <div class="form-add__img">
                    <label for="">Ảnh(<span>*</span>)</label>
                    <input type="text" placeholder="Gán link ảnh tại đây..." name="image">
                </div>
                <div class="form-add__time">
                    <label for="">Thời gian(<span>*</span>)</label> 
                    <input type="text" placeholder="Điền thời gian tại đây.." name="time">
                </div>
                <div class="form-add__nd">
                    <label for="">Chi tiết tin(<span>*</span>)</label>
                    <input type="text" placeholder="Hãy điền nội dung tin..." name="details">
                </div>
                <div class="btn">
                    <button type="submit">Lên bài</button>
                </div>
            </form>
        </div>
</body>
</html>