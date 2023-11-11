<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon_library.png" />
    <link rel="stylesheet" href="./assets/css/styles.min.css" />
    <link rel="stylesheet" href="./assets/css/bar.css">

    <style>
        /* Add the following CSS styles */

        /* Center the content vertically and horizontally */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            margin-top: 30px;
            padding: 0;
        }

        /* Adjust the card width for mobile devices */
        .card-body {
            max-width: 90%;
            width: 300px;
        }
    </style>
</head>

<body>
    <div class="progress-bar">
        <div class="bar"></div>
    </div>

    <!--  Body Wrapper -->

    <div class="card-body">
        <a href="./index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
            <img src="./assets/images/logos/favicon_library.png" width="180" alt="">
        </a>
        <p class="text-center">Login Youur Account</p>


        <?php
        if (isset($_SESSION['user_error'])) {
            # code...
            echo '<div class="alert alert-warning">
              <span>' . $_SESSION['user_error'] . '</span>
          </div>';
            unset($_SESSION['user_error']);
        } else {
            # code...
        }


        ?>
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="username" name="username" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
                <?php

                if (isset($_SESSION['username_empty'])) {
                    echo '<div id="emailHelp" class="form-text text-danger">' . $_SESSION['username_empty'] . '</div>';
                    unset($_SESSION['username_empty']);
                }
                ?>
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1">
                <?php
                if (isset($_SESSION['password_empty'])) {
                    echo '<div id="emailHelp" class="form-text text-danger">' . $_SESSION['password_empty'] . '</div>';
                    unset($_SESSION['password_empty']);
                }
                ?>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="form-check">
                    <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                    </label>
                </div>
                <a class="text-primary fw-bold" href="./index.php">Forgot Password ?</a>
            </div>
            <button type="submit" name="login_user" class="btn btn-primary btn-lg w-100 py-8 fs-4 mb-4 rounded-2" onclick="showProgressBar()">Sign
                In</button>
            <div class="d-flex align-items-center justify-content-center">
                <p class="fs-4 mb-0 fw-bold">Dont have account?</p>
                <a class="text-primary fw-bold ms-2" href="./register.php">Create an account</a>
            </div>
        </form>
        <!-- <a href="./index.php">dd</a> -->
        <?php
        if (isset($_POST['login_user'])) {
            # code...
            session_start();
            include "./db/connection_db.php";
            // Retrieve username and password from form
            echo      $username = $_POST['username'];
            echo     $password = $_POST['password'];

            if (empty($_POST['username'])) {
                # code...
                $_SESSION['username_empty'] = "This field cant be empty.";
            }

            if (empty($_POST['password'])) {
                # code...
                $_SESSION['password_empty'] = "This field cant be empty.";
            }


            // Query the database to check if the username and password match
            $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Authentication successful, set session variable
                sleep(2);
                $_SESSION['user_auth'] = $username;
                // Redirect to dashboard or protected page
                header("location:./index.php");
            } else {
                // Authentication failed, display error message
                $_SESSION['user_error'] = "invalid username or password.";
                header("location:./login.php");
            }

            $conn->close();
        } ?>
        <!-- <a href="#" class="btn btn-primary" onclick="showProgressBar()">Press Me</a> -->

    </div>
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/js/bar.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>