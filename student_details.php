<?php
require_once 'config/connection.php';
if(isset($_POST['submit']))
{
    $name = $_POST['student_name'];
    $class = $_POST['student_class'];
    $address = $_POST['student_address'];
    $phoneno = $_POST['student_phoneno'];
    $sql = "INSERT INTO details (student_name, student_class, student_address, student_phoneno)
    VALUES ('$name', '$class', '$address', '$phoneno')";
    $result = mysqli_query($connection, $sql);

    if($result == true)
    { 
        echo "<script>alert('Successfully Submitted');</script>";
    }
    else
    {
        echo "<script>alert('Unable to Submit')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'include/header-link.php'; ?>
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php require_once 'include/header.php'; ?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Student Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#"></a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#"></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <form action="" method="POST">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                                <h5 class="mb-3">Student Name</h5>
                                <input type="text" class="form-control" name="student_name" id="student_name" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                <h5 class="mb-3">Student Class</h5>
                                <input type="text" class="form-control" name="student_class" id="student_class" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-home text-primary mb-4"></i>
                                <h5 class="mb-3">Student Address</h5>
                                <input type="text" class="form-control" name="student_address" id="student_address" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                                <h5 class="mb3">Phone Number</h5>
                                <input type="text" class="form-control" name="student_phoneno" id="student_phoneno" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button class="btn btn-primary rounded-pill py-3 px-5" name="submit" type="submit">Submit</button>
                    </div>
                </div>
            </form>
            <div class="row g-4 mt-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="mb-4">
                        <h6>Student Name:</h6>Please enter the full name of the student in the provided field.
                        Ensure that the name entered matches the official records.
                    </p>
                    <p class="mb-4">
                        <h6>Student Class:</h6>Enter the class or grade level of the student.
                        Use standard notation (e.g., "10th Grade," "Freshman," etc.).
                    </p>
                    <p class="mb-4">
                        <h6>Student Address:</h6>Provide the complete residential address of the student.
                        Include details such as house number, street name, city, state, and postal code.
                    </p>
                    <p class="mb-4">
                        <h6>Phone Number:</h6>Enter a valid phone number where the student or their guardian can be reached.
                        Include the country code if the number is outside the local area.
                    </p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <?php require_once 'include/footer.php'; ?>
</body>
</html>
