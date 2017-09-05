<?php
require_once './products.php'; //подключили файл с скриптом
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Album example for Bootstrap</title>

    <!— Bootstrap core CSS —>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/album.css" rel="stylesheet">

</head>

<body>

<div class="album text-muted">
    <div class="container">

        <div class="row">

            <?php foreach ($products as $product) : ?>
                <div class="card">
                    <img src="./1.png" alt="Card image cap">
                    <h6><?php echo $product[0] ?></h6>
                    <span>Цена: <?php echo $product[1] ?></span>
                    <p class="card-text"><?php echo $product[2] ?></p>
                        <button type="submit" class="btn btn-default">купить</abutton>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="card">
        <img src="./4.png" alt="Card image cap">
        <h6>Шапка мужская</h6>
        <span>Цена: <?php echo $product[1] ?></span>
        <p class="card-text">Крутая шапка</p>
        <a href="https://www.google.ru" button type="submit" class="btn btn-default">купить</button>
    </div>
</body>
</html>