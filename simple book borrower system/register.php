<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon_library.png" />
    <link rel="stylesheet" href="./assets/css/styles.min.css" />
    <style>
    /* Add the following CSS styles */

    /* Center the content vertically and horizontally */
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        margin-top: 40px;
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
    <!--  Body Wrapper -->

    <div class="card-body">
        <a href="./index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
            <img src="./assets/images/logos/favicon_library.png" width="180" alt="">
        </a>
        <p class="text-center">Sign Up For Your New Account</p>
        <?php
        if (isset($_SESSION['suc'])) {
            # code...
        ?>
        <div class="alert alert-success">
            <span><?php echo  $_SESSION['suc'] ?></span>
        </div>
        <?php
            unset($_SESSION['suc']);
        }
        ?>
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputtext1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control form-control-lg" id="exampleInputtext1"
                    aria-describedby="textHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required>
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1"
                    required>
            </div>
            <button type="submit" name="signup" class="btn btn-primary btn-lg w-100 py-8 fs-4 mb-4 rounded-2">Sign
                Up</button>
            <div class="d-flex align-items-center justify-content-center">
                <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                <a class="text-primary fw-bold ms-2" href="./login.php">Sign
                    In</a>
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['signup'])) {
        # code...
        // Assuming you have a table named 'users' with columns 'username', 'email', and 'password'
        include "./db/connection_db.php";

        // Prepare the SQL statement
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO user (username, email, password) VALUES (?, ?, ?)";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind parameters to the statement
        $stmt->bind_param("sss", $username, $email, $password);

        // Execute the statement
        $stmt->execute();

        // Check if the insertion was successful
        if ($stmt->affected_rows > 0) {
            echo "Data inserted successfully.";
            session_start();
            $_SESSION['suc'] = 'Your account successfully created.';
            header("location:./register.php");
        } else {
            echo "Error inserting data: " . $conn->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
    ?>
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<div>
    <div>

        <!-- </div> -->
    </div>