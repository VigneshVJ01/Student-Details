<?php
require_once 'config/connection.php';
if(isset($_POST['submit']))
{
    $name = $_POST['user_name'];
    $password = $_POST['password'];
    $sql = "SELECT * from registration where user_name = '$name' and password = '$password'";
    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['islogin'] = true;
        $_SESSION['user_name'] = $name;
        echo "<script>alert('Login Successful');location.href='home.php'</script>";
    }

    else
    {
        echo "<script>alert('Login Unsuccessful')</script>";
    }
}
?><!DOCTYPE html>

<html lang="en">

<?php require_once 'include/header-link.php'; ?>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->



    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Log in</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="col-lg-6">
            <form action="" method="POST">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="user_name" id="username" placeholder="username" style="max-width: 300px; margin: auto;">
                            <label for="username">Username</label>
                        </div>
                    </div>



                    <div class="col-12">
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="password" placeholder="password" style="max-width: 300px; margin: auto;">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    
                    <div class="col-12 text-center">
                        <button class="btn btn-primary rounded-pill py-3 px-5" name="submit" type="submit" href = "">Submit</button>
                    </div>

                    <div class="col-12 text-center">
                        <a href="register.php">Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php require_once 'include/footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min
