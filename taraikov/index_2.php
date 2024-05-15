<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="js/script.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="index_2.css">
</head>
<body>
  <section class="first">

    <div class="container-word-all">

  <header class="header">
    <a href="index.php" class="header-logo"></a>
    <div class="form">
      <button class="form-button"></button>
      <input class="form-input" type="search" placeholder="Поиск">
    </div>
    <nav class="header-nav">
      <ul class="header-list">
        <li class="header-item"><a class="header-link" href="#">Коллекции</a>
          <ul class="submenu">
            <li><a href="index_2.php">Аксессуары</a></li>
            <li><a href="index_5.php">Коллаборации кроссовок</a></li>
              <li><a href="index_6.php">Верхняя одежда</a></li>    
          </ul>
        </li>
        <li class="header-item"><a class="header-link" href="index_4.php">Регистрация</a></li>
        <li class="header-item"><a class="header-link" href="index_3.php">О нас</a></li>
        <li class="header-item"><a class="header-link" href="shopingcart.php">Корзина</a></li>
      </ul>
    </nav>
  </header>
  <div class="product">
    
  <?php
require_once './backand/db.php';
$result = mysqli_query($connect, "SELECT * FROM `accessories`");
while ($row = mysqli_fetch_assoc($result)): 
?>


<article class="card">
    <img src="/Forweb/<?php echo $row['image'] ?>"  alt="Hoodie Desert Detective" 
      class="card-img">
      <h2 class="card-name"><?php echo $row['name'] ?></h2>
      <h2 class="Description"></h2>
      <p class="card-price"><?php echo $row['price'] ?><span class="card-currency">USD.</span></p>
    <button class="card-btn"><a href="./backand/go_to_cart.php?id=<?php echo $row['id']?>">В корзину</a></button>

</article>

<?php endwhile; ?>


  
</div>

<div class="futer-container-all">
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>&copy; Пример веб-сайта корпорации Wix в 2024 году. Все права защищены.</p>
        </div>
        <div class="col-md-6">
          <ul class="footer-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div>
    
</div>

<video src="/Forweb/black-hole-dark-space-moewalls-com.mp4" autoplay muted loop class="first-video"></video>
</section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>