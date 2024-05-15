<?php
require_once './backand/db.php';
$result = mysqli_query($connect, "SELECT * FROM `closets`");
while ($row = mysqli_fetch_assoc($result)): 
?>


<article class="card">
    <img src="/Forweb/<?php echo $row['image'] ?>"  alt="Hoodie Desert Detective" 
      class="card-img">
      <h2 class="card-name"><?php echo $row['name'] ?></h2>
      <h2 class="Description"></h2>
      <p class="card-price"><?php echo $row['price'] ?><span class="card-currency">USD.</span></p>
    <button class="card-btn"><button class="card-btn"><a href="./backand/go_to_cart.php?id=<?php echo $row['id']?>">В корзину</a></button></button>

</article>

<?php endwhile; ?>
