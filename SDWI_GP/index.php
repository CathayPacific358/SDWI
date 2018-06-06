<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./totalStyle.css" rel="stylesheet">
    <?php

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "planecup";
    $mes = $password = $username = "";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if (!empty($_GET['user']) && !empty($_GET['psw'])) {
        $username = $_GET['user'];
        $sql = "SELECT password FROM user WHERE username = '$username'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $password = $row['password'];
        if (hash("md5", $password) == $_GET['psw']) {
            $head = "<a class=\"py-2 d-none d-md-inline-block\" href=\"#\">Hello, " . $_GET['user'] . "</a>
            <a class=\"py-2 d-none d-md-inline-block\" href=\"index.php\">Sign out</a>
            ";
            $password = $_GET['psw'];
            $index = "index.php?user=" . $username . "&psw=" . $password;
            $contacts = "contacts.php?user=" . $username . "&psw=" . $password;
            $homepage = "homepage.php?user=" . $username . "&psw=" . $password;
        } else {
            $head = "<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sign in</a>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                <a class=\"dropdown-item\" href=\"./loginAdmin.php\">Sign in as Admin</a>
                <a class=\"dropdown-item\" href=\"./login.php\">Sign in as Customer</a>
                <a class=\"dropdown-item\" href=\"#\">Sign in as VIP</a>
            </div>
            <a class=\"py-2 d-none d-md-inline-block\" href=\"./registration.php\">Sign up</a>
            ";
            $index = "index.php";
            $contacts = "contacts.php";
            $homepage = "homepage.php";
        }
    } else {
        $head = "<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sign in</a>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
            <a class=\"dropdown-item\" href=\"#\">Sign in as Admin</a>
            <a class=\"dropdown-item\" href=\"./login.php\">Sign in as Customer</a>
            <a class=\"dropdown-item\" href=\"#\">Sign in as VIP</a>
        </div>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"./registration.php\">Sign up</a>
        ";
        $index = "index.php";
        $contacts = "contacts.php";
        $homepage = "homepage.php";
    }
    ?>
</head>
<body>

<nav class="sticky-top py-1 site-header f-handstyle">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="<?php echo $homepage;?>">
            <img src="./img/GPLOGO_NW.png" width="28px" onmouseover="this.src='./img/GPLOGO_NWH.png'"
                 onmouseout="this.src='./img/GPLOGO_NW.png'"/>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="<?php echo $homepage; ?>">About us</a>
        <a class="py-2 d-none d-md-inline-block" href="<?php echo $index; ?>">Product</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
        <?php echo $head; ?>


    </div>
</nav>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div><img src="./img/GPLOGO_WRH.png" style="width:18%;"></div>
    <div class="box-shadow d-none d-md-block"></div>
</div>

<!-- ROW ONE -->
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="bg-dark mr-md-3 pt-3 pt-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">- mini-FERRERO -</h2>
            <p class="lead">And an even wittier subheading.</p>
            <br/>
            <button class="btn btn-outline-light">Small (x1)</button>
            <button class="btn btn-outline-light">Medium (x2)</button>
            <button class="btn btn-outline-light">Large (x3)</button>
        </div>
        <div class="box-shadow" style="width: auto; height: auto; border-radius: 21px 21px 0 0;">
            <img src="./img/cake1.jpg" class="indeximg"/>
        </div>
    </div>

    <div class="bg-light mr-md-3 pt-3 pt-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">- Lavender Queen -</h2>
            <p class="lead">And an even wittier subheading.</p>
            <br/>
            <button class="btn btn-outline-dark">Small (x1)</button>
            <button class="btn btn-outline-dark">Medium (x2)</button>
            <button class="btn btn-outline-dark">Large (x3)</button>
        </div>
        <div class="box-shadow" style="width: auto; height: auto; border-radius: 21px 21px 0 0;">
            <img src="./img/cake2.jpg" class="indeximg"/>
        </div>
    </div>

    <div class="bg-dark mr-md-3 pt-3 pt-md-5 text-center text-white overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">- La Framboise -</h2>
            <p class="lead">And an even wittier subheading.</p>
            <br/>
            <button class="btn btn-outline-light">Small (x1)</button>
            <button class="btn btn-outline-light">Medium (x2)</button>
            <button class="btn btn-outline-light">Large (x3)</button>
        </div>
        <div class="box-shadow" style="width: auto; height: auto; border-radius: 21px 21px 0 0;">
            <img src="./img/cake3.jpg" class="indeximg"/>
        </div>
    </div>
</div>

<!-- ROW TWO -->
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="bg-light mr-md-3 pt-3 pt-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">- Sombrero de bruja -</h2>
            <p class="lead">And an even wittier subheading.</p>
            <br/>
            <button class="btn btn-outline-dark">Small (x1)</button>
            <button class="btn btn-outline-dark">Medium (x2)</button>
            <button class="btn btn-outline-dark">Large (x3)</button>
        </div>
        <div class="box-shadow" style="width: auto; height: auto; border-radius: 21px 21px 0 0;">
            <img src="./img/cake9.jpg" class="indeximg"/>
        </div>
    </div>
    <div class="bg-dark mr-md-3 pt-3 pt-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">- 北海道の深い冬。 -</h2>
            <p class="lead">And an even wittier subheading.</p>
            <br/>
            <button class="btn btn-outline-light">Small (x1)</button>
            <button class="btn btn-outline-light">Medium (x2)</button>
            <button class="btn btn-outline-light">Large (x3)</button>
        </div>
        <div class="box-shadow" style="width: auto; height: auto; border-radius: 21px 21px 0 0;">
            <img src="./img/cake6.jpg" class="indeximg"/>
        </div>
    </div>
    <div class="bg-light mr-md-3 pt-3 pt-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">- Dreaming Cream -</h2>
            <p class="lead">And an even wittier subheading.</p>
            <br/>
            <button class="btn btn-outline-dark">Small (x1)</button>
            <button class="btn btn-outline-dark">Medium (x2)</button>
            <button class="btn btn-outline-dark">Large (x3)</button>
        </div>
        <div class="box-shadow" style="width: auto; height: auto; border-radius: 21px 21px 0 0;">
            <img src="./img/cake5.jpg" class="indeximg"/>
        </div>
    </div>
</div>

<!-- ROW THREE -->
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">

    <div class="bg-dark mr-md-3 pt-3 pt-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">- Soul of Chocolate -</h2>
            <p class="lead">And an even wittier subheading.</p>
            <br/>
            <button class="btn btn-outline-light">Small (x1)</button>
            <button class="btn btn-outline-light">Medium (x2)</button>
            <button class="btn btn-outline-light">Large (x3)</button>
        </div>
        <div class="box-shadow" style="width: auto; height: auto; border-radius: 21px 21px 0 0;">
            <img src="./img/cake4.jpg" class="indeximg"/>
        </div>
    </div>
    <div class="bg-light mr-md-3 pt-3 pt-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">- 雪のお姫様 -</h2>
            <p class="lead">And an even wittier subheading.</p>
            <br/>
            <button class="btn btn-outline-dark">Small (x1)</button>
            <button class="btn btn-outline-dark">Medium (x2)</button>
            <button class="btn btn-outline-dark">Large (x3)</button>
        </div>
        <div class="box-shadow" style="width: auto; height: auto; border-radius: 21px 21px 0 0;">
            <img src="./img/cake7.jpg" class="indeximg"/>
        </div>
    </div>
    <div class="bg-dark mr-md-3 pt-3 pt-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">- Merry Christmas! -</h2>
            <p class="lead">And an even wittier subheading.</p>
            <br/>
            <button class="btn btn-outline-light">Small (x1)</button>
            <button class="btn btn-outline-light">Medium (x2)</button>
            <button class="btn btn-outline-light">Large (x3)</button>
        </div>
        <div class="box-shadow" style="width: auto; height: auto; border-radius: 21px 21px 0 0;">
            <img src="./img/cake8.jpg" class="indeximg"/>
        </div>
    </div>
</div>

<!--- FOOTER --->
<footer class="container py-5">
    <div class="row">
        <div class="col-12 col-md">
            <a class="py-2" href="#">
                <img src="./img/GPLOGO_NW.png" width="80px" onmouseover="this.src='./img/GPLOGO_NWH.png'"
                     onmouseout="this.src='./img/GPLOGO_NW.png'"/>
            </a>
            <small class="d-block mb-3 text-muted" style="font-size:7.5px"><b>&copy; 2018 SDWI Group 15 All Rights
                    Reserved</b></small>
        </div>
        <div class="col-6 col-md">
            <h5>Quick Portal</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="<?php echo $homepage?>">About us</a></li>
                <li><a class="text-muted" href="<?php echo $index?>">Product</a></li>
                <li><a class="text-muted" href="#">Cart</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Friendly Links</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="http://www.21cake.com/" target="_blank">21 Cakes</a></li>
                <li><a class="text-muted" href="http://www.xfxb.net/" target="_blank">Bliss Cake</a></li>
                <li><a class="text-muted" href="http://www.cakeking.cn/" target="_blank">Cake King</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Contact us</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="<?php echo $contacts;?>">Co-founders</a></li>
            </ul>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="./bootstrap-4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="./bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
<script src="./bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
<script src="./bootstrap-4.0.0/assets/js/vendor/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>
</body>
</html>
