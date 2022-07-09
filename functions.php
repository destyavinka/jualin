<?php
function pdo_connect_mysql()
{
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'db_produk';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title)
{
    // Get the amount of items in the shopping cart, this will be displayed in the header.
    $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
    echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Products | JUAL.IN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="style_cart.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="icon" href="images/profile.png" type="image/x-icon">
        <link href="css/style.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        </head>
	<body>
    
    <header class="pt-10 pb-100 bg-light header_1">
    <nav class="header_menu_1 pt-30 pb-30 mt-30">
        <div class="container px-xl-0">
            <div class="row justify-content-center align-items-center f-18 medium">
                <div class="col-lg-2">
                    <img src="i/jual.in.png" alt="Logo" class="img-fluid" data-aos="fade-down"
                            data-aos-delay="1000">
                    </a>
                </div>
                <div class="col-lg-6 text-center" data-aos="fade-down" data-aos-delay="750">
                    <a href="index.html" class="link color-heading mx-15">
                        Home
                    </a>
                    <a href="new.html" class="link color-heading mx-15">
                        New Arrival
                    </a>
                    <a href="about.html" class="link color-heading mx-15">
                        About
                    </a>
                    <a href="#" class="link color-heading f-16 mx-15">
                        <i class="fas fa-search">
                        </i>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-end align-items-center" data-aos="fade-down" data-aos-delay="1000">
                    <a href="dash.php?page=cart" class="link color-heading f-20 mx-35">
                        <i class="fas fa-shopping-cart"></i>
                        <span>$num_items_in_cart</span>
                    </a>

                   
                    <a href="logout.php" class="btn sm action-1">
                        Log Out
                    </a>
                </div>
            </div>
        </div>
    </nav>
   </header>
        <main>


       

EOT;
}
// Template footer
function template_footer()
{

    echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; TIA, Kelompok 1</p>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>s
        <script src="script.js"></script>
    </body>
</html>
EOT;
}
