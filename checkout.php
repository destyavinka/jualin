<!doctype html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['masuk'])) {
    header("location:form_user.php");
    exit;
}
include 'functions.php';
$pdo = pdo_connect_mysql();

$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// If there are products in cart
if ($products_in_cart) {
    // There are products in the cart so we need to select those products from the database
    // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id IN (' . $array_to_question_marks . ')');
    // We only need the array keys, not the values, the keys are the id's of the products
    $stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Calculate the subtotal
    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['id']];
    }
}
if (isset($_POST["submit1"])) {

    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "db_produk");
    mysqli_query($link, "insert into data_checkout values('','$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[phone]','$_POST[address]','$_POST[payment]','$_POST[shipping]','$_POST[total]','$_POST[Barang]')");
}
if (isset($_POST['submit1']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: dash.php?page=placeorder');
    exit;
}


?>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="images/profile.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="css/formregistration.css">
    <title>Check Out | Jual.in</title>
</head>

<body>


    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="i/jual.in.png" class="" data-aos-delay="">
                <p>Pastikan data yang Anda masukkan benar!</p>
                <a href="index.html"> <input type="submit" name="" value="HOME" /><br /></a>
                <a href="products.php"> <input type="submit" name="" value="SHOP" /><br /></a>
            </div>

            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <h3 class="register-heading">Complete your order</h3>

                        <form name="form1" method="POST" class="row register-form" id="placeorder">


                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name *" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name *" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email *" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="13" maxlength="13" name="phone" class="form-control" placeholder="Your Phone *" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" placeholder="Enter Your Address *" value="" required />
                                </div>



                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <select class="form-control" name="payment">
                                        <option class="hidden" selected disabled>Please select your Payment Method</option>
                                        <option>BRI</option>
                                        <option>BNI</option>
                                        <option>BCA</option>
                                        <option>MANDIRI</option>
                                        <option>OVO</option>
                                        <option>DANA</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" name="shipping">
                                        <option class="hidden" selected disabled>Please select your Shipping Method</option>
                                        <option>J&T</option>
                                        <option>JNE</option>
                                        <option>Sicepat Express</option>
                                    </select>
                                </div>
                                <div class="form-group" style="display: none;">
                                    <select class="form-control" name="total">
                                        <option style="display: ;"><?= $subtotal ?></option>

                                    </select>
                                </div>
                                <div class="form-group" style="display: none;">
                                    <select class="form-control" name="Barang">
                                        <option style="display: ;"> <?php foreach ($products as $product) : ?>
                                                <tr>
                                                    <td>
                                                        <span href="dash.php?page=product&id=<?= $product['id'] ?>"><?= $product['name'] ?> <br> </span>
                                                        <br>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?></span>
                                        </option>

                                    </select>
                                </div>

                                <h3>Product Order</h3>

                                <?php foreach ($products as $product) : ?>
                                    <tr>
                                        <td>
                                            <span href="dash.php?page=product&id=<?= $product['id'] ?>"><?= $product['name'] ?></span>
                                            <br>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <p>
                                <div class="subtotal">
                                    <span class="text">Total Harga:</span>
                                    Rp <span class="price"><?= $subtotal ?></span> ,-

                                </div>
                            </div>
                            <input type="submit" style="padding: 20px; font-size: medium;" class="btnRegister" value="Buat Pesanan" name="submit1" />
                    </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>