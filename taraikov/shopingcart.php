<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="shopingcart.css">
</head>
<body>
  <section class="first">
  
<div class="container-word-all">


  <div class="header-container">
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
</div>
  
<div class=" cart_top mt-5 text-start" style=" margin-left: 3rem margin-top 10rem">
  <div class="row">
    <div class="col">
      <p class="fw-bold" style="font-size: 50px;">Корзина</p>
    </div>
  </div>
</div>

<form action="backand/refresh_cart.php" method="post">
  <table class="table mt-5">
      <thead>
          <tr>
              <th scope="col"></th>
              <th scope="col">Товар</th>
              <th scope="col">Название товара</th>
              <th scope="col">Описание</th>
              <th scope="col">Количество</th>
              <th scope="col">Цена</th>
          </tr>
      </thead>
      <tbody>
          
          <?php 
              include('./backand/spawn_cart_item.php');
          ?>

      </tbody>
  </table>
  <div class="container text-end">
      <button class="btn btn-danger" href="">Оформить заказ</button>
  </div>
</form>

</div>

<video src="/Forweb/black-hole-dark-space-moewalls-com.mp4" autoplay muted loop class="first-video"></video>
</section>
<script src="shopingcart.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> 