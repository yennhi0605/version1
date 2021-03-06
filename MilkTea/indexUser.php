<?php
  require "database.php";
  require "Model/Coffee.php";
  require "Model/Juice_Tea.php";
  require "Model/Milktea.php";
  require "Model/Smoothie.php";

  $sql = "SELECT * from MilkTeas";
  $result = $db->query($sql)->fetch_all(MYSQLI_ASSOC);

  $milkteas = array();
  for($i = 0; $i < count($result); $i++) {
    $milk = $result[$i];
  
  
    if($milk['type'] == 'Coffee'){
      array_push($milkteas, new Coffee($milk['id'], $milk['name'], $milk['price'], $milk['image']));
    }
     if($milk['type'] == 'Juice_Tea'){
      array_push($milkteas, new Juice_Tea($milk['id'], $milk['name'], $milk['price'], $milk['image']));
    }
    if($milk['type']== 'Milktea'){
      array_push($milkteas, new Milktea($milk['id'], $milk['name'], $milk['price'], $milk['image']));
    }
    if($milk['type'] == 'Smoothie'){
      array_push($milkteas, new Smoothie($milk['id'], $milk['name'], $milk['price'], $milk['image']));
    }
  }

  /*========================Detail==========================*/

  // if (isset($_POST["detail"])) {
  //   $img = $_POST["image"];
  //   $name = $_POST["name"];
  //   $price = $_POST["price"];
  //   $type = $_POST["type"];
  // }

?>

<!DOCTYPE html>
<html>
<head>
  <title>MilkTea Shop</title>
  <link rel="stylesheet" type="text/css" href="milktea.css">
</head>
<body>
  <div class="header">
    <p>Liên hệ: Nguyễn Yến Nhi</p>
    <p>Địa chỉ: 101B Lê Hữu Trác, Sơn Trà Đà Nẵng</p>
    <p style="margin-right: 400px">Phone: 0354236247</p>
    <form action="index.php">
      <button name="logout" type="submit" style="background-color: red">Log out</button>
    </form>
  </div>

  <div class="slideshow-container" style="margin-top: 20px">
          <div class="mySlides fade">
            <img src="image/slide1.jpg" style="width:100%; height: 300px">
          </div>

          <div class="mySlides fade">
            <img src="image/slide2.jpg" style="width:100%; height: 300px">
          </div>

          <div class="mySlides fade">
            <img src="image/slide3.jpg" style="width:100%; height: 300px">
          </div>
  </div>
   
    <div class="menu">
      <div class="menu a">
        <a href="indexUser.php">TRANG CHỦ</a>
        <a href="Gioi Thieu">GIỚI THIỆU</a>
        <a href="Tin Tuc">TIN TỨC</a>
        <a href="Huong Dan">HƯỚNG DẪN ĐẶT HÀNG</a>
        <a href="Lien He">LIÊN HỆ</a>
      </div>
      <div class="search">    
        <input class="search" type="text" placeholder="Search" name=""> 
         <!-- <button style="margin-top: 15px;"><img src="image/icon.png" alt="icon.png" width="30px">
         </button>     -->
      </div>
      <div class="cart">
       <button style="background-color: sandybrown">
        <img src="image/cart.jpg" alt="icon.png" width="15px" height="15px"> CART
      </button>
      </div>
    </div>

  <!--Hien Thi San Pham--> 

  <div class="milk-container">
    <?php
      for ($i=0; $i < count($milkteas); $i++) { 
    ?>
    <div class="item-milk">
      <img class="item-milk-icon" src=<?php echo $milkteas[$i]->getImagePath(); ?>>
      <h1 class="item-milk-name"><?php echo $milkteas[$i]->name ?></h1>
      <p style="color: brown" class="item-milk-type"><?php echo $milkteas[$i]->getType() ?></p>
      <h2 class="item-milk-price"><?php echo $milkteas[$i]->getDisplayPrice() ?></h2>
      <form action="" method="post" class="btn">
        <button name="detail" style="margin-right: 30px; background-color: sandybrown" onclick="detail(<?php echo $milkteas[$i]->id; ?>)">Detail</button>
       <button name="order" style="margin-left: 30px; background-color: red">Order</button>
      </form>
    </div>

     <?php
      }
     ?>
      </div>
      <hr>
      <div class="footer">
        <div class="footer-lienhe">
          <h1 style="color: white">THÔNG TIN LIÊN HỆ</h1>
          <hr>
          <p>Địa Chỉ: 101B Lê Hữu Trác, Sơn Trà, Đà Nẵng</p>
          <p>Phone: 035 4236 247</p>
          <p>Facebook: Nguyễn Yến Nhi</p>
          <p>Email: nhi.nguyen@gmail.com</p>
        </div>
        <div class="footer-giaohang">
          <h1 style="color: white">CHÍNH SÁCH</h1>
          <hr>
          <p>Chính Sách Giao Hàng</p>
          <p>Chính Sách Vận CHuyển</p>
          <p>Chính Sách Thanh Toán</p>
          <p>Khách Hàng Thân Thiết</p>
        </div>
        <div class="footer-menu">
          <h1 style="color: white">MENU</h1>
          <hr>
          <p>Coffee</p>
          <p>Milk Tea</p>
          <p>Smoothie</p>
          <p>Juice/Tea</p>
        </div>
      </div>  

    <script type="text/javascript">
    
    var slideIndex = 0;
    showSlides();

    function showSlides() {

      var i;
      var slides = document.getElementsByClassName("mySlides");

        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }

          slideIndex++;

        if (slideIndex > slides.length) {
          slideIndex = 1
        } 

        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }

          slides[slideIndex-1].style.display = "block";         
          setTimeout(showSlides, 2000); 
    }
    </script>    
</body>
</html>