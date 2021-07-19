<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paypal Payment</title>

    <link rel="stylesheet" href="./payment.css">
</head>

<body>
    <main id="cart-main">
        <div class="site-title text-center">
            <h1 class="font-title">Shopping Cart</h1>
        </div>

        <div class="container">
            <div class="grid">
                <div class="col-1">
                    <div class="flex item justify-content-between">
                        <div class="flex">
                            <div class="img text-center">
                                <img src="./assets/payment/pro1.png" alt="">
                            </div>
                            <div class="title">
                                <h3>Canon EOS 1500D</h3>
                                <span>Electronics</span>

                                <div class="buttons">
                                    <button type="submit"><i class="fas fa-chevron-up"></i> </button>
                                    <input type="text" class="font-title" value="1">
                                    <button type="submit"><i class="fas fa-chevron-down"></i> </button>
                                </div>
                                <a href="#">Save for later</a> |
                                <a href="#">Delete From Cart</a>
                            </div>
                        </div>
                        <div class="price">
                            <h4 class="text-red">$349</h4>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="subtotal text-center">
                        <h3>Price Details</h3>

                        <ul>
                            <li class="flex justify-content-between">
                                <label for="price">Products ( 3 items ) : </label>
                                <span>$399</span>
                            </li>
                            <li class="flex justify-content-between">
                                <label for="price">Delivery Charges : </label>
                                <span>Free</span>
                            </li>
                            <hr>
                            <li class="flex justify-content-between">
                                <label for="price">Amout Payble : </label>
                                <span class="text-red font-title">$399</span>
                            </li>
                        </ul>
                        <div id="paypal-payment-button">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://www.paypal.com/sdk/js?client-id=AUnHicrU0zvmLqJ7CDJjCKq9j_s9vel221AzHvT-A8-zZoZZg3ilddI0WAXkeOoaUYQVsYJ8IRTKTYOx&disable-funding=credit,card"></script>
    <script src="payment.js">

    </script>
</body>

</html>