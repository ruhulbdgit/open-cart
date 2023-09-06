<?php include("header.php");
session_start() ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/03-i.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Samsung-1</h5>
                            <p class="card-text">Some quick example text to build he card's content.</p>
                            <p class="card-text">Price: $2000</p>
                            <button class="btn btn-primary">Test</button>
                            <button type="submit" name="Add-To-Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Samsung-1">
                            <input type="hidden" name="Price" value="200">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/04-i.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Samsung-2</h5>
                            <p class="card-text">Some quick example text to build he card's content.</p>
                            <p class="card-text">Price: $3000</p>
                            <button class="btn btn-primary">Test</button>
                            <button type="submit" name="Add-To-Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Samsung-2">
                            <input type="hidden" name="Price" value="3000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/05-i.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Samsung-10</h5>
                            <p class="card-text">Some quick example text to build he card's content.</p>
                            <p class="card-text">Price: $3000</p>
                            <button class="btn btn-primary">Test</button>
                            <button type="submit" name="Add-To-Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Samsung-10">
                            <input type="hidden" name="Price" value="3000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/06-i.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Samsung-4</h5>
                            <p class="card-text">Some quick example text to build he card's content.</p>
                            <p class="card-text">Price: $2000</p>
                            <button class="btn btn-primary">Test</button>
                            <button type="submit" name="Add-To-Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Samsung-4">
                            <input type="hidden" name="Price" value="4000">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>