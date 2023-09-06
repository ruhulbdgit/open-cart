<?php
session_start();
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CART</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center border rounded my-5 bg-light">MY CART</h2>
            </div>
            <div class="col-lg-8">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No:</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        if (isset($_SESSION['cart'])) {

                            foreach ($_SESSION['cart'] as $key => $value) {

                                echo "
                            <tr>
                                <td>1</td>
                                <td>{$value[Item_Name]}</td>
                                <td>{$value[Price]}</td>
                                <td><input type='number' value='$value[Quantity]' min='1' max='10'></td>
                                <td><input class="btn btn-primary"  value="Remove">Remove</td>
                            </tr>";
                                $serialNumber++; // Increment the serial number
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>