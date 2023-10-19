<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- main css file -->
    <link rel="stylesheet" href="/app/resources/css/main.css">
    <link rel="stylesheet" href="/app/resources/css/login.css">
    <!-- other css files -->
    <link rel="stylesheet" href="/app/resources/css/all.min.css">
    <link rel="stylesheet" href="/app/resources/css/brands.min.css">
    <link rel="stylesheet" href="/app/resources/css/normal.css">
    <title>Login</title>
</head>

<body>
    <!-- start header -->
    <nav>
        <div class="container">
            <a href="/"><img src="/app/resources/img/logo-removebg-preview.png" width="90px" alt="..."></a>

            <div class="normal-bar">
                <a href="/signup">SignUp</a>
            </div>

            <div class="drop-down">
                <div class="links">
                    <span class="icon">
                        <input type="image" src="/app/resources/img/bars-solid.svg" id="nav_button">
                    </span>

                    <ul id="nav_ul">

                        <li>
                            <a href="/signup">SignUp</a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>


    </nav>
    <!-- end header -->

    <!-- start scrollup button -->
    <button class="up" id="up"><i class="fa-solid fa-arrow-up"></i></button>
    <!-- end scrollup button -->

    <!-- start login -->
    <section>
        <div class="container">
            <div class="square">
                <div class="half1">
                    <h2 class="quote">
                        Be somebody who makes everybody feel like a somebody.
                    </h2>
                </div>
                <div class="half2">
                    <center>
                        <form action="<?php
                                        if (isset($_SERVER["QUERY_STRING"])) echo "/login/?" . $_SERVER['QUERY_STRING'];
                                        else {
                                            echo "/login";
                                        } ?>" method="post" id="form1">

                            <div style="margin-bottom:20px;">
                                <label for="email"></label>
                                <input type="email" id="email" name="email" required placeholder="Email">
                                <br><br>

                                <label for="password"></label>
                                <input type="password" id="password" name="password" required placeholder="Password">
                                <br><br>
                            </div>

                            <span>Doesn't have an account <a href="/signup">Signup</a></span><br>

                            <button class="btnn" type="submit" name="submit">Login</button>
                        </form>
                        <?php include("./app/resources/components/error.php") ?>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <!-- end login -->
    <?php include("./app/resources/components/footer.php") ?>
    <!-- JS -->
    <script src="app/resources/js/main.js"></script>
</body>

</html>