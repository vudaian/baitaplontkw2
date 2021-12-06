<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/grid.css" />
    <link rel="stylesheet" href="./assets/css/base.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/responsive.css" />
    <link
      rel="stylesheet"
      href="./assets/fonts/fontawesome-free-5.15.4/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>News</title>
  </head>
  <body>
    <div class="app grid wide">
      <!-- Header -->
      <div class="overflow"></div>
      <div class="header">
        <div class="header_top">
          <div class="js-open open_menu-mobile l-0 m-0 c-6">
            <i class="fas fa-bars"></i>
          </div>
          <ul class="js-menu header_top-right m-9 c-3">
            <div class="js-close close_header_top-right">
              <i class="fas fa-times"></i>
            </div>
            <li class="header_top-right-item">
              <a href="./index.php" class="header_top-right-link">Trang chủ</a>
            </li>
            <li class="header_top-right-item">
              <a href="#" class="header_top-right-link">Giới thiệu</a>
            </li>
            <li class="header_top-right-item">
              <a href="#" class="header_top-right-link">Đăng nhập</a>
            </li>
          </ul>
          <ul class="header_top-left m-0 c-0">
            <li class="header_top-left-item">
              <a href="#" class="header_top-left-link">
                <i class="header_top-left-item-icon fab fa-facebook-square"></i>
              </a>
            </li>
            <li class="header_top-left-item">
              <a href="#" class="header_top-left-link">
                <i class="header_top-left-item-icon fab fa-twitter-square"></i>
              </a>
            </li>
            <li class="header_top-left-item">
              <a href="#" class="header_top-left-link">
                <i class="header_top-left-item-icon fab fa-youtube-square"></i>
              </a>
            </li>
            <li class="header_top-left-item">
              <a href="#" class="header_top-left-link">
                <i class="header_top-left-item-icon fab fa-linkedin"></i>
              </a>
            </li>
            <li class="header_top-left-item">
              <a href="#" class="header_top-left-link">
                <i
                  class="header_top-left-item-icon fab fa-google-plus-square"
                ></i>
              </a>
            </li>
          </ul>
          <div class="icon_search js-open-search l-0 m-3 c-6">
            <i class="fas fa-search"></i>
          </div>
        </div>

        <div class="header_center">
          <div class="header_center-logo l-3 m-12 c-12">
            <img
              src="./assets/images/logo.png"
              alt="LOGO"
              class="header_center-logo-img"
            />
          </div>
          <div class="header_center-search js-search-box l-9">
            <form action="" method="" class="header_center-search-form">
              <input
                type="text"
                class="header_center-seach-box"
                placeholder="Tìm kiếm..."
              />
              <button type="">
                <i class="fas fa-search"></i>
              </button>
            </form>
          </div>
        </div>
        <!-- Javascrip open & close -->
        <script>
          const menu = document.querySelector(".js-menu");
          const menuOpen = document.querySelector(".js-open");
          const menuClose = document.querySelector(".js-close");
          const overflow = document.querySelector(".overflow");
          const openSearch = document.querySelector(".js-open-search");
          const closeSearch = document.querySelector(".js-close-search");
          const iconSearch = document.querySelector(".js-search-box");
          function showMenu() {
            menu.classList.add("open");
            overflow.classList.add("open");
          }
          function hideMenu() {
            overflow.classList.remove("open");
            menu.classList.remove("open");
          }
          function showSearch() {
            overflow.classList.add("open");
            iconSearch.classList.add("open");
          }
          function hideSearch() {
            overflow.classList.remove("open");
            iconSearch.classList.remove("open");
          }
          menuOpen.addEventListener("click", showMenu);
          menuClose.addEventListener("click", hideMenu);
          openSearch.addEventListener("click", showSearch);
          overflow.addEventListener("click", hideSearch);
          overflow.addEventListener("click", hideMenu);
        </script>
        <div class="header_menu l-12 m-0 c-0">
          <ul class="header_menu-list">
            <li class="header_menu-item">
              <a href="index.html" class="header_menu-item-homelink">
                <i class="header__menu-item-homelink-icon fas fa-home"></i>
              </a>
            </li>
            <li class="header_menu-item">
              <h3 class="header__menu-item-title">Tin mới</h3>
              <i class="header__menu-item-icon fas fa-angle-down"></i>
              <ul class="header_menu-item-list">
                <li class="header_menu-item-list-item">Thời sự</li>
                <li class="header_menu-item-list-item">Tin nóng</li>
                <li class="header_menu-item-list-item">Xã hội</li>
              </ul>
            </li>
            <li class="header_menu-item">
              <h3 class="header__menu-item-title">An ninh</h3>
              <i class="header__menu-item-icon fas fa-angle-down"></i>
              <ul class="header_menu-item-list">
                <li class="header_menu-item-list-item">Biên giới</li>
                <li class="header_menu-item-list-item">Hải đảo</li>
                <li class="header_menu-item-list-item">An ninh nước ngoài</li>
                <li class="header_menu-item-list-item">An ninh trong nước</li>
              </ul>
            </li>
            <li class="header_menu-item">
              <h3 class="header__menu-item-title">Thời trang</h3>
              <i class="header__menu-item-icon fas fa-angle-down"></i>
              <ul class="header_menu-item-list">
                <li class="header_menu-item-list-item">Show diễn</li>
                <li class="header_menu-item-list-item">Hot trend</li>
                <li class="header_menu-item-list-item">Hàng chính hãng</li>
              </ul>
            </li>
            <li class="header_menu-item">
              <h3 class="header__menu-item-title">Giáo dục</h3>
              <i class="header__menu-item-icon fas fa-angle-down"></i>
              <ul class="header_menu-item-list">
                <li class="header_menu-item-list-item">Đổi mới</li>
                <li class="header_menu-item-list-item">Sách giáo khoa</li>
              </ul>
            </li>
            <li class="header_menu-item">
              <h3 class="header__menu-item-title">Giải trí</h3>
              <i class="header__menu-item-icon fas fa-angle-down"></i>
              <ul class="header_menu-item-list">
                <li class="header_menu-item-list-item">Game show</li>
                <li class="header_menu-item-list-item">Showbits</li>
                <li class="header_menu-item-list-item">Ca sĩ nổi tiếng</li>
                <li class="header_menu-item-list-item">Drama</li>
              </ul>
            </li>
            <li class="header_menu-item">
              <h3 class="header__menu-item-title">Công nghệ</h3>
              <i class="header__menu-item-icon fas fa-angle-down"></i>
              <ul class="header_menu-item-list">
                <li class="header_menu-item-list-item">AI</li>
                <li class="header_menu-item-list-item">Robot</li>
                <li class="header_menu-item-list-item">Công nghệ vũ trụ</li>
                <li class="header_menu-item-list-item">Công nghệ xanh</li>
                <li class="header_menu-item-list-item">Công nghệ cuộc sống</li>
              </ul>
            </li>
            <li class="header_menu-item">
              <h3 class="header__menu-item-title">Ẩm thực</h3>
              <i class="header__menu-item-icon fas fa-angle-down"></i>
              <ul class="header_menu-item-list">
                <li class="header_menu-item-list-item">Món ngon</li>
                <li class="header_menu-item-list-item">Món Tây</li>
                <li class="header_menu-item-list-item">Ẩm thực Việt Nam</li>
                <li class="header_menu-item-list-item">Nghệ thuật ẩm thực</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <!-- main -->
      <div class="main">
        <div class="main__content">
                <?php
                    $conn = mysqli_connect("localhost","root","","datanews");
                    if (mysqli_connect_errno()) {
                        echo "Kết nối thất bại " . mysqli_connect_error();
                    }
                    $ID = '';
                    $titlesport = '';
                    $imagesport = '';
                    $timesport = '';
                    $detailsport = '';
                    if (isset($_GET['ID'])) {
                        $ID = $_GET['ID'];
                        $sql = "SELECT * FROM tinthethao WHERE ID = {$ID}";
                        $exe = mysqli_query($conn, $sql);
                        if ($exe) {
                            $result = mysqli_fetch_assoc($exe);
                        }
                    }
                    
                    $conn->close();

                ?>
          <div class="time">
            <p class="main__content__time"><?php echo $result['timesport'];?></i></p>
          </div>
          <h1 class="main__content-title">
            <?php echo $result['titlesport']; ?>
          </h1>
          <div class="content-img">
            <img
              src="<?php echo $result['imagesport']; ?>"
              alt="anh bong da"
              class="main__content-img"
            />
            <p class="main__content-img-sub"><i>ảnh nguồn từ vtv</i></p>
          </div>
          <p class="main__content-text">
            <?php echo $result['detailssport']; ?>
          </p>
        </div>
        <div class="main__comment">
          <h3 class="main__comment__title">bình luận</h3>
          <?php
                  $conn = mysqli_connect("localhost","root","","datanews");
                  if (mysqli_connect_errno())
                  {
                  echo "Kết nối thất bại " . mysqli_connect_error();
                  }
                  $query=mysqli_query($conn,"select * from `comment`");
                  while($row=mysqli_fetch_array($query)){
                  ?>
          <div class="main__comment__member">
            <div class="main__comment__member-left">
              <img
                src="https://icon-library.com/images/google-user-icon/google-user-icon-12.jpg"
                alt=""
              />
            </div>
            <div class="main__comment__member-right">
                  <h4 class="main__comment__member-name"><?php echo $row['name']; ?></h4>
                  <p class="main__comment__member-text"><?php echo $row['cmt']; ?></p>
            </div>
          </div>
              <?php
              }
              ?>
          <div class="main__content__users">
            <form action="http://localhost/The news/index_sport.php?ID=<?php echo $ID;?>" method="POST" style="width: 100%; display: flex;"> 
              <input
                type="text"
                class="main__content__users-name"
                placeholder="Tên của bạn là?"
                name="name"
              />
              <input
                type="text"
                class="main__content__users-cmt"
                placeholder="Viết bình luận..."
                name="cmt"
              />
              <div class="main__content__users-send">
                <button tyle="submit"><i class="far fa-paper-plane"></i></button>
              </div>
            </form>
              <?php
                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                      $name = $_POST['name'];
                      $cmt = $_POST['cmt'];
                      if ($name == "" || $cmt == "") {
                          echo '<script language="javascript">alert("Bạn hãy nhập tên hoặc comment.");</script>';
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
                          $sql = "INSERT INTO comment (name, cmt) VALUES ('$name', '$cmt')";
                          if ($conn->query($sql) === TRUE) {
                            echo '<script language="javascript">alert("Đã thêm comment.");</script>';
                          } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                          }
                          $conn->close();
                      }
                  }   
              ?>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <div class="footer">
        <div class="footer__content">
          <div class="footer__content-right l-4 m-6 c-12">
            <h3 class="footer__content-title">LIÊN HỆ</h3>
            <p>Email: contact@nhanh.vn</p>
            <br />
            <p>Hotline: 1900.2008</p>
            <br />
            <p>
              Trụ sở chính: Tòa nhà Vân Hồ, 51 Lê Đại Hành, Hai Bà Trưng, Hà Nội
            </p>
            <br />
          </div>
          <div class="footer__content-center l-4 m-6 c-12">
            <h3 class="footer__content-title">VỀ CHÚNG TÔI</h3>
            <ul class="footer__content-list">
              <li class="footer__content-item">Trang chủ</li>
              <li class="footer__content-item">Liên hệ</li>
              <li class="footer__content-item">Giới thiệu</li>
            </ul>
          </div>
          <div class="footer__content-left l-4 m-6 c-12">
            <h3 class="footer__content-title">LIÊN KẾT</h3>
            <div class="footer__content-left-contact">
              <i class="icon-facebook fab fa-facebook-square"></i>
              <h3>FACEBOOK</h3>
            </div>
            <div class="footer__content-left-contact">
              <i class="icon-twitter fab fa-twitter-square"></i>
              <h3>TWITTER</h3>
            </div>
          </div>
        </div>
        <div class="footer__end">
          <h3>@ - BY ASS</h3>
        </div>
      </div>
    </div>
  </body>
</html>
