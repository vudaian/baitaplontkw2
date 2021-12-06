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
    <title>ADMIN</title>
    <style>
        body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        }
        #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #666;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
        }
        #myBtn:hover {
        background-color: #555;
        color: var(--hover-color);
        }
    </style>
</head>
<body>
    <div class="around">
        <div class="around_left l-2 m-0 c-0">
            <h1 class="around_left-title">ADMIN</h1>
            <div class="around_left-item">
                <i class="fas fa-newspaper"></i>
                <p><a href="#tinmoi">Tin mới</a></p>
            </div>
            <div class="around_left-item">
                <i class="fas fa-running"></i>
                <p><a href="#tinthethao">Tin thể thao</a></p>
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
            <div class="btn-add">
                <div class="btn-add-link">
                    <i class="fas fa-plus-square" style="margin-right: 5px; color: var(--white-color);"></i>
                    <a href="./addnews.php">Thêm tin mới</a>
                </div>
            </div>
            <div class="around_right-info">
                <table class="table">
                    <thead id="tinmoi">
                        <tr>
                            <td bgcolor="#E6E6FA">Tin mới</td>
                            <td bgcolor="#E6E6FA">Ảnh</td>
                            <td bgcolor="#E6E6FA">Ngày đăng</td>
                            <td bgcolor="#E6E6FA">Chi tiết</td>
                            <td bgcolor="#E6E6FA">Quản lý</td>
                        <tr>
                    </thead>
                    <tbody>
                        <?php
                            $conn = mysqli_connect("localhost","root","","datanews");
                            if (mysqli_connect_errno())
                            {
                            echo "Kết nối thất bại " . mysqli_connect_error();
                            }
                            $query=mysqli_query($conn,"select * from `tinmoi`");
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $row['titlenew']; ?></td>
                            <td><?php echo $row['imagenew']; ?></td>
                            <td><?php echo $row['timenew']; ?></td>
                            <td><?php echo $row['detailsnew']; ?></td>
                            <td class="around_right-info-link">
                                <a href="updatenews.php?titlenew=<?php echo $row['titlenew']; ?>">
                                    <i class="fas fa-tools"></i>
                                </a>
                                <a href="delete.php?titlenew=<?php echo $row['titlenew']; ?>">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <thead id="tinthethao">
                        <tr>
                            <td bgcolor="#E6E6FA">Tin thể thao</td>
                            <td bgcolor="#E6E6FA">Ảnh</td>
                            <td bgcolor="#E6E6FA">Ngày đăng</td>
                            <td bgcolor="#E6E6FA">Chi tiết</td>
                            <td bgcolor="#E6E6FA">Quản lý</td>
                        <tr>
                    </thead>
                    <tbody>
                        <?php
                            $conn = mysqli_connect("localhost","root","","datanews");
                            if (mysqli_connect_errno())
                            {
                            echo "Kết nối thất bại " . mysqli_connect_error();
                            }
                            $query=mysqli_query($conn,"select * from `tinthethao`");
                            while($row=mysqli_fetch_array($query)){
                        ?>
	                    <tr>
                            <td><?php echo $row['titlesport']; ?></td>
                            <td><?php echo $row['imagesport']; ?></td>
                            <td><?php echo $row['timesport']; ?></td>
                            <td><?php echo $row['detailssport']; ?></td>
                            <td class="around_right-info-link">
                                <a href="updatesport.php?titlesport=<?php echo $row['titlesport']; ?>">
                                    <i class="fas fa-tools"></i>
                                </a>
                                <a href="delete.php?titlesport=<?php echo $row['titlesport']; ?>">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-caret-up"></i></button>
    <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    </script>
</body>
</html>