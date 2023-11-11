<?php
session_start();
ob_start();
$user_auth = $_SESSION['user_auth'];
if (!isset($_SESSION['user_auth'])) {
  header("Location: ./login.php");
  exit();
} else {
  // continue with the rest of your code
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>library home</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon_library.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
  <link rel="stylesheet" href="./assets/css/bar.css">
</head>

<body>
  <div class="progress-bar">
    <div class="bar"></div>
  </div>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.php" class="text-nowrap logo-img" onclick="showProgressBar()">
            <img src="./assets/images/logos/logo.png" width="200" alt="" />
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
            <li class="sidebar-item bg-primary rounded-2 ">
              <a class="sidebar-link text-light" href="./index.php" onclick="showProgressBar()" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu ">BOOKS</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./barrowed.php" onclick="showProgressBar()" aria-expanded="false">
                <span>
                  <i class="ti ti-hand-grab"></i>
                </span>
                <span class="hide-menu">BARROWED</span>
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
                      <strong class="text-uppercase"><?php echo $_SESSION['user_auth']; ?></strong>
                    </div>
                    <a href="./auth/user_logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block" onclick="showProgressBar()">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class=" container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Books Lists</h5>

            <?php if (isset($_GET['success'])) {
              echo ' <div class="alert alert-success">
<span>Book has successfully borrowed.</span>
</div>';
              unset($_GET['success']);
              # code...
            } ?> <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle ">
                <thead class="text-dark fs-4">
                  <tr>
                    <!-- <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Id</h6>
                    </th> -->
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Book Name &amp;
                        Descriptions</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Writer</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Date Listed</h6>
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
                        <!-- <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0"><?php echo $id ?></h6>
                        </td> -->
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center">
                            <img src="<?php echo $cover ?>" width="180" alt="">
                            <div class="ms-3">
                              <h6 class="fw-semibold mb-1 text-uppercase">
                                <?php
                                $chunks = str_split($title, 30);
                                foreach ($chunks as $chunk) {
                                  echo '<span class="fw-normal">' . $chunk . '</span><br>';
                                }
                                ?></h6>
                              <?php
                              $chunks = str_split($disc, 30);
                              foreach ($chunks as $chunk) {
                                echo '<span class="fw-normal">' . $chunk . '</span><br>';
                              }
                              ?><br>
                              <a href="./index.php?id=<?php echo $id ?>&cover=<?php echo $cover ?>&title=<?php echo $title ?>&disc=<?php echo $disc ?>&writer=<?php echo $writer ?>" type="submit" class="btn btn-sm btn-primary" onclick="showProgressBar()"><i class=" ti ti-hand-grab"></i>
                                Borrow</a>
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


                  if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $cover = $_GET['cover'];
                    $title = $_GET['title'];
                    $disc = $_GET['disc'];
                    $writer = isset($_GET['writer']) ? $_GET['writer'] : ''; // Set a default value if 'writer' is not present in the URL
                    include "./db/connection_db.php";
                    $status = 1;

                    // Validate the required parameters
                    if (empty($title) || empty($disc) || empty($writer)) {
                      echo "Error: Missing required parameters!";
                      exit();
                    }

                    // Prepare the SQL statement
                    $sql = "INSERT INTO borrow (borrower, tittle, writter, disc, cover, status) VALUES (?, ?, ?, ?, ?, ?)";

                    // Use prepared statements to prevent SQL injection
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ssssss", $user_auth, $title, $writer, $disc, $cover, $status);

                    // Execute the statement
                    if ($stmt->execute()) {
                      echo "Data inserted successfully!";
                      sleep(2);
                      header("Location:./index.php?success=Borrowed successfully.");
                      exit();
                    } else {
                      echo "Error: " . $stmt->error;
                    }

                    // Close the statement and connection
                    $stmt->close();
                    $conn->close();
                  } else {
                    // echo "Error: Missing 'id' parameter!";
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
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebarmenu.js"></script>
  <script src="./assets/js/bar.js"></script>
  <script src="./assets/js/app.min.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>