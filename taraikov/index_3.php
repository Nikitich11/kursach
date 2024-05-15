<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="index_3.css">
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

  <div class="faq">
    <div class="faq-item">
      <input class="faq-input" type="checkbox" name="faq" id="faq_1">
      <label class="faq-title" for="faq_1">Какими способами я могу произвести оплату за товар?</label>
      <div class="faq-text">
        <p>Вы можете оплатить покупки банковской картой,
           а также картами Visa, Qiwi, Paypal,
            а также картами других банков.</p>
      </div>
    </div>

    <div class="faq-item">
      <input class="faq-input" type="checkbox" name="faq" id="faq_2">
      <label class="faq-title" for="faq_2">Как вы можете подтвердить подлинность ваших товаров?</label>
      <div class="faq-text">
        <p>Наша одежда и аксессуары заказываются в Европе у проверенных поставщиков.
 Не беспокойтесь о качестве и подлинности наших товаров.
 Я рад, что смог ответить на ваш вопрос.</p>
      </div>
    </div>

    <div class="faq-item">
      <input class="faq-input" type="checkbox" name="faq" id="faq_3">
      <label class="faq-title" for="faq_3">Как мне оформить заказ?</label>
      <div class="faq-text">
        <p>1. Выбор товара - Выберите интересующий вас товар. Перед вами откроется страница  на которой представлен товар с его характеристиками.
 2. Добавление товара в корзину - После выбора понравившейся модели выберите размер и нажмите кнопку "Добавить в корзину". Товар будет автоматически отправлен в вашу корзину покупок. Вы можете добавить в корзину любое количество товаров.
 3. Корзина покупок - Чтобы оформить заказ, перейдите в раздел "Корзина покупок". Ознакомьтесь с его содержимым. Вы можете изменить количество товара в корзине или удалить то, что вам не нужно.
 4. Оформление заказа - Для оформления заказа вам необходимо нажать на кнопку "Оформить заказ" и ввести свои контактные данные. После этого нажмите кнопку "Подтвердить заказ".</p>
      </div>
    </div>

    <div class="faq-item">
      <input class="faq-input" type="checkbox" name="faq" id="faq_4">
      <label class="faq-title" for="faq_4">Как долго мне предстоит ждать отправки отвара?</label>
      <div class="faq-text">
        <p>Если товар есть на складе,
он будет доставлен в службу доставки в течение 24 часов после оплаты</p>
      </div>
    </div>

    <div class="faq-item">
      <input class="faq-input" type="checkbox" name="faq" id="faq_5">
      <label class="faq-title" for="faq_5">Как мне вернуть товар?</label>
      <div class="faq-text">
        <p>Вы имеете право отказаться от товара ненадлежащего качества в течение 7 календарных дней после получения если с нашей стороны произошла ошибка.
 При возврате товара надлежащего качества стоимость доставки и комиссия за перевод не возвращаются.
 Возврат осуществляется через службу технической поддержки.</p>
      </div>
    </div>

    <div class="faq-item">
      <input class="faq-input" type="checkbox" name="faq" id="faq_6">
      <label class="faq-title" for="faq_6">Можно ли модифицировать товар индивидуально и сколько это будет стоить?</label>
      <div class="faq-text">
        <p>Для этого вы можете связаться с нами. Цена зависит от сложности работы.</p>
      </div>
    </div>

    <div class="faq-item">
      <input class="faq-input" type="checkbox" name="faq" id="faq_7">
      <label class="faq-title" for="faq_7">Можно ли оплатить заказ наличными?</label>
      <div class="faq-text">
        <p>Да, если CDEK поддерживает эту функцию в вашем городе (вы можете узнать на странице оформления заказа).</p>
      </div>
    </div>

    <div class="faq-item">
      <input class="faq-input" type="checkbox" name="faq" id="faq_8">
      <label class="faq-title" for="faq_8">Возможно ли получение товара бесконтактным способом оплаты?</label>
      <div class="faq-text">
        <p>Да, поддерживает ли CDEK эту функцию в вашем городе (вы можете узнать на странице оформления заказа).</p>
      </div>
    </div>

    <div class="faq-item">
      <input class="faq-input" type="checkbox" name="faq" id="faq_9">
      <label class="faq-title" for="faq_9">В какие страны возможна доставка?</label>
      <div class="faq-text">
        <p>На данный момент только в Россию и Казахстан</p>
      </div>
    </div>

    <div class="faq-item">
      <input class="faq-input" type="checkbox" name="faq" id="faq_10">
      <label class="faq-title" for="faq_10">Is it possible to pick up the goods by pickup in the showroom?</label>
      <div class="faq-text">
        <p>There is no such possibility at the moment. Now there is only an online store. If you have any special offers, please contact us.</p>
      </div>
    </div>
  </div>  



<div class="container-all">
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