<?php
require_once __DIR__ . '/models/accessories.php';
require_once __DIR__ . '/models/category.php';
require_once __DIR__ . '/models/food.php';
require_once __DIR__ . '/models/category.php';

require_once __DIR__ . '/data/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css' integrity='sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==' crossorigin='anonymous'/>
  <title>Negozio animali On-line</title>
</head>
<body>
  <h1 class="text-center">Boolean PetShop</h1>
  <div class="container">
    <div class="text-center">
      <div class="row">

      <?php foreach($products as $product): ?>
        <div class="col-3 p-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="<?php echo $product->getName() ?>">
            <div class="card-body">
              <p class="card-text"> <i class="<?php echo $product->getCategory()->icon ?>"></i><?php echo $product->getCategory()->name?></p>
              <h5 class="card-title"><?php echo $product->getName()?></h5>
              <p class="card-text"><?php echo $product->getPrice()?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  
</body>
</html>