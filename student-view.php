<?php
require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Student Details
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <?php
                        if(isset($_GET['id']))
                        {
                            // echo $student_id = $_GET['id'];
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM students where id='$student_id' ";
                            $query_run =mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                        <div class="mb-3">
                                            <label >Student Name</label>
                                            <p  class="form-control">
                                                <?= $student['name']; ?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label >Email Address</label>
                                            <p  class="form-control">
                                                <?= $student['email']; ?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label >Phone no.</label>
                                            <p  class="form-control">
                                                <?= $student['phone']; ?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label >Course</label>
                                            <p  class="form-control">
                                                <?= $student['course']; ?>
                                            </p>
                                        </div>    
                                <?php
                            }
                            else
                            {
                                echo "<h4> No Record found! </h4>";
                            }
                        }
                    ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?php include('includes/footer.php'); ?>