<?php
require_once 'config/connection.php';
$student_id = $_GET['student_id'];

if(isset($_POST['submit']))
{
    $name = $_POST['student_name'];
    $class = $_POST['student_class'];
    $address = $_POST['student_address'];
    $phoneno = $_POST['student_phoneno'];

    $update_sql = "UPDATE details set student_name = '$name', student_class = '$class', student_address = '$address', student_phoneno = '$phoneno' where student_id = '$student_id'";
    $update_result = mysqli_query($connection, $update_sql); //connecting two pages

    if($update_result == true)
    {
        echo "<script>alert('Eddited Successfully');location.href='manage_student_details.php';</script>";
    }
    else  
    {
        echo "<script>alert('unable to edit')</script>";
    }
}

$sql = "SELECT * from details where student_id = '$student_id'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
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


    <?php require_once 'include/header.php'; ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Edit Category</h1>
           
        </div>
    </div>
    <!-- Page Header End -->

    

            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <form action="" method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="student_name" value="<?php echo $row['student_name']; ?>">
                                    <label for="name">Student Name</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="student_class" value="<?php echo $row['student_class']; ?>">
                                    <label for="name">Student Class</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="student_address" value="<?php echo $row['student_address']; ?>">
                                    <label for="name">Student Address</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="student_phoneno" value="<?php echo $row['student_phoneno']; ?>">
                                    <label for="name">Student Phone Number</label>
                                </div>
                            </div>
                            
                            </div>
                           
                            
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5"name="submit" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <!-- Contact End -->



    <?php require_once 'include/footer.php'; ?>
</body>

</html>