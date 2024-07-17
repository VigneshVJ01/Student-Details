<?php  
require_once 'config/connection.php';
if(isset($_GET['student_id']))
{
    $student_id = $_GET['student_id'];
    $delete_sql = "DELETE FROM details WHERE student_id = '$student_id'";
    $result = mysqli_query($connection, $delete_sql);
    if($result == true)
    {   
            echo "<script>alert('Deleted successfully')</script>";
    }    
    else
       {
                echo "<script>alert('Unable to Delete')</script>";
        }
    }
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


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown"> Manage Student details</h1>

                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <style>
       h1{
            text-align: center;
       }

        .table-container {
            display: flex;
            justify-content: center;
        }

        table {
            border-collapse: collapse;
            text-align: center;
            margin: 0 auto;
        }

        th {
            width: 250px;
        }

        th, td {
            padding: 8px;
        }
    </style>

    <div class="table-container">
        <table border="1">
            <thead>
                <tr>
                    <th>Sl.no</th>
                    <th>Student Name</th>
                    <th>Student Class</th>
                    <th>Student Address</th>
                    <th>Student Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql="select * from details";
                $result = mysqli_query($connection, $sql);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>$row[student_id]</td>";
                        echo "<td>$row[student_name]</td>";
                        echo "<td>$row[student_class]</td>";
                        echo "<td>$row[student_address]</td>";
                        echo "<td>$row[student_phoneno]</td>";
                        echo "<td>
                                <a class='btn btn-primary' href='edit_student_details.php?student_id=$row[student_id]'>Edit</a>
                                <a class='btn btn-danger' href='manage_student_details.php?student_id=$row[student_id]'>Delete</a>
                              </td>";
                        echo "</tr>";
                    }
                }
                ?>   
            </tbody>
        </table>
    </div>

    <?php require_once 'include/footer.php'; ?>
</body>

</html>
