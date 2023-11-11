<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon_library.png" />
    <link rel="stylesheet" href="./assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.php" class="text-nowrap logo-img">
                        <img src="./assets/images/logos/logo.png" width="230" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <!-- <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./index.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">LIST</span>
                        </li> -->
                        <hr>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./admin.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-dashboard"></i>
                                </span>
                                <span class="hide-menu">DASHBOARD</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./books_list.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="hide-menu">BOOKS</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./barrowed_list.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-hand-grab"></i>
                                </span>
                                <span class="hide-menu">BARROWED</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./returned_list.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-repeat"></i>
                                </span>
                                <span class="hide-menu">RETURNED</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Buttons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Alerts</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Card</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Forms</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">Typography</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXTRA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Icons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Sample Page</span>
              </a>
            </li>
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank"
                  class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
              </div>
              <div class="unlimited-access-img">
                <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
              </div>
            </div>
          </div> -->
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li> -->
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="./assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <!-- <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a> -->
                                        <div class="text-center">
                                            <strong>LIBRARIAN</strong>
                                        </div>
                                        <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="row">

                    <div class="col-4 col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold mb-4">Add Books</h5>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="bookname" class="form-label">Book Tittle</label>
                                        <input type="text" class="form-control" name="tittle" id="bookname" aria-describedby="emailHelp" required>
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                            else.</div> -->
                                    </div>

                                    <div class="mb-3">
                                        <label for="Writter" class="form-label"> Writter</label>
                                        <input type="text" class="form-control" name="writter" id="Writter" aria-describedby="emailHelp" required>
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                            else.</div> -->
                                    </div>
                                    <div class="mb-3">
                                        <label for="Writter" class="form-label"> Discription</label>
                                        <textarea class="form-control" name="disc" id="" cols="30" rows="5" required></textarea>
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                            else.</div> -->
                                    </div>
                                    <div class="mb-3">
                                        <label for="Writter" class="form-label"> Upload Thumbnail</label>
                                        <input class="form-control" type="file" name="cover" id="" required>
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                            else.</div> -->
                                    </div>
                                    <!-- <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div> -->
                                    <button type="submit" name="add_book" class="btn btn-primary">Add</button>
                                </form>
                                <?php

                                // Input datetime string


                                // Output the result
                                // echo $formattedDateTime;


                                if (isset($_POST['add_book'])) {
                                    include "./db/connection_db.php";

                                    // Get form data
                                    $title = $_POST['tittle'];
                                    $writer = $_POST['writter'];
                                    $disc = $_POST['disc'];
                                    // $cover = $_FILES['cover'];

                                    // Upload image
                                    $targetDir = "uploads/"; // Directory to store uploaded images
                                    $targetFile = $targetDir . basename($_FILES["cover"]["name"]);
                                    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                                    // Check if image file is a valid image
                                    $check = getimagesize($_FILES["cover"]["tmp_name"]);
                                    if ($check !== false) {
                                        // Move the uploaded file to the target directory
                                        if (move_uploaded_file($_FILES["cover"]["tmp_name"], $targetFile)) {
                                            // Prepare the SQL statement
                                            $sql = "INSERT INTO books (cover, tittle, disc, writter) VALUES (?, ?, ?, ?)";

                                            // Use prepared statements to prevent SQL injection
                                            $stmt = $conn->prepare($sql);
                                            $stmt->bind_param("ssss", $targetFile, $title, $disc, $writer);

                                            // Execute the statement
                                            if ($stmt->execute()) {
                                                echo "Data inserted successfully!";
                                            } else {
                                                echo "Error: " . $stmt->error;
                                            }

                                            // Close the statement and connection
                                            $stmt->close();
                                        } else {
                                            echo "Error uploading image.";
                                        }
                                    } else {
                                        echo "Invalid image file.";
                                    }

                                    $conn->close();
                                }

                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-8 col-md-8 col-sm-12">
                        <!-- Monthly Earnings -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold mb-4">Books Lists</h5>
                                <div class="table-responsive">
                                    <table class="table text-nowrap mb-0 align-middle ">
                                        <thead class="text-dark fs-4">
                                            <tr>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Id</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Book Name &amp; Descriptions</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Writer</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Date Barrowed</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Action</h6>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include "./db/connection_db.php";

                                            // Prepare the SQL statement
                                            $sql = "SELECT * FROM books";

                                            // Execute the query
                                            $result = $conn->query($sql);

                                            // Check if the query was successful
                                            if ($result) {
                                                // Fetch the data from the result set row by row
                                                while ($row = $result->fetch_assoc()) {
                                                    // Access the data from each row
                                                    $title = $row['tittle'];
                                                    $writer = $row['writter'];
                                                    $disc = $row['disc'];
                                                    $cover = $row['cover'];
                                                    $id = $row['id'];
                                                    $date_listed = $row['date listed'];
                                                    $datetimeString = $date_listed;

                                                    // Create a DateTime object from the input string
                                                    $dateTime = new DateTime($datetimeString);

                                                    // Format the DateTime object as a readable string with a 12-hour time format
                                                    $date = $dateTime->format('F j, Y - g: i A');
                                            ?>

                                                    <tr>
                                                        <td class="border-bottom-0">
                                                            <h6 class="fw-semibold mb-0"><?php echo $id ?></h6>
                                                        </td>
                                                        <td class="border-bottom-0">
                                                            <div class="d-flex align-items-center">
                                                                <img src="<?php echo $cover ?>" width="130" alt="">
                                                                <div class="ms-3">
                                                                    <h6 class="fw-semibold mb-1 text-uppercase">
                                                                        <?php echo $title ?></h6>
                                                                    <?php
                                                                    $chunks = str_split($disc, 30);
                                                                    foreach ($chunks as $chunk) {
                                                                        echo '<span class="fw-normal">' . $chunk . '</span><br>';
                                                                    }
                                                                    ?>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="border-bottom-0">
                                                            <p class="mb-0 fw-normal">By: <?php echo $writer ?></p>
                                                        </td>
                                                        <td class="border-bottom-0">
                                                            <div class="d-flex align-items-center">
                                                                <span class=" fw-semibold"><?php echo $date ?></span>
                                                            </div>
                                                        </td>
                                                        <td class="border-bottom-0">
                                                            <a href="./books_list.php?id=<?php echo $id ?>" type="submit" class="btn btn-sm btn-danger"><i class="ti ti-trash"></i>
                                                                Delete</a href="./books_list.php?id=<?php echo $id ?>">
                                                        </td>
                                                    </tr>

                                            <?php
                                                    // // Do something with the retrieved data
                                                    // echo "Title: " . $title . "<br>";
                                                    // echo "Title: " . $title . "<br>";
                                                    // echo "Writer: " . $writer . "<br>";
                                                    // echo "Description: " . $cover . "<br>";
                                                    // echo "<br>";
                                                }
                                            } else {
                                                // Handle the case when the query fails
                                                echo "Error: " . $conn->error;
                                            }

                                            // Close the database connection
                                            $conn->close();

                                            // Delete

                                            if (isset($_GET['id'])) {
                                                # code...
                                                $id = $_GET['id'];
                                                include "./db/connection_db.php";

                                                // Get the ID from the request or form submission


                                                // Prepare the SQL statement
                                                $sql = "DELETE FROM books WHERE id = $id";

                                                // Execute the query
                                                if ($conn->query($sql) === TRUE) {
                                                    echo "Record deleted successfully";
                                                } else {
                                                    echo "Error deleting record: " . $conn->error;
                                                }

                                                // Close the database connection
                                                $conn->close();
                                            }

                                            ?>



                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/sidebarmenu.js"></script>
    <script src="./assets/js/app.min.js"></script>
    <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>