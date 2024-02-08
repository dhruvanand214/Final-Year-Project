<?php

session_start();

include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>CS Branch</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css" />
    <link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="assets/css/material_style.css">
    <!-- inbox style -->
    <link href="assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <!-- <link href="assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" /> -->
    <link href="assets/css/theme/light/theme_style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon/logo-half.png" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <?php include('header.php'); ?>
        <!-- end header -->

        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <?php include('sidebar.php'); ?>
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Result</div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- start widget -->

                    <!-- end widget -->


                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="card">
                                
                                <div class="card-body">
                                    <?php
                                    // Assuming you have established a database connection

                                    $loggedInRollNo = $_SESSION['username']; // Replace with your specific session variable or login mechanism


                                    // Query to retrieve the logged-in student's results for each subject
                                    $query = "SELECT students.Name, subjects.subject_name, marks.marks_obtained
                                                FROM students
                                                JOIN marks ON students.Roll_No = marks.Roll_No
                                                JOIN subjects ON marks.subject_id = subjects.subject_id
                                                WHERE students.Roll_No = '$loggedInRollNo'";

                                    $result = mysqli_query($con, $query);

                                    // Check if the query was successful
                                    if ($result) {
                                        // Check if any results are found
                                        if (mysqli_num_rows($result) > 0) {
                                            // Display the results
                                            echo "<h3>Student: $loggedInRollNo</h3>";
                                            echo "<table class='table table-striped custom-table table-hover'>
                                            <thead>
                                            <tr>
                                                <th style='font-weight: bolder; font-size: 1.5rem;'>Subject</th>
                                                <th style='font-weight: bolder; font-size: 1.5rem;'>Marks Obtained</th>
                                            </tr>
                                            </thead>";
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $subjectName = $row['subject_name'];
                                                $marksObtained = $row['marks_obtained'];
                                                echo "<tbody><tr>
                                                            <td>$subjectName</td>
                                                            <td>$marksObtained</td>
                                                        </tr>
                                                        </tbody>";
                                            }
                                            echo "</table>";
                                        } else {
                                            echo "No results found.";
                                        }
                                    } else {
                                        // Query failed, display an error message
                                        echo "Error: " . mysqli_error($con);
                                    }

                                    // Close the database connection
                                    mysqli_close($con);
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- ---------------------------------- -->




                </div>
            </div>


        </div>


    </div>

    <!-- start js include path -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/popper/popper.js"></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/plugins/feather/feather.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.js"></script>
    <script src="assets/js/pages/sparkline/sparkline-data.js"></script>
    <!-- Common js-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/theme-color.js"></script>
    <!--apex chart-->
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/chart/apex/home-data.js"></script>
    <!-- summernote -->
    <script src="assets/plugins/summernote/summernote.js"></script>
    <script src="assets/js/pages/summernote/summernote-data.js"></script>
    <!-- Material -->
    <script src="assets/plugins/material/material.min.js"></script>
    <script src="assets/plugins/sweet-alert/sweetalert2.all.min.js"></script>
    <script src="assets/plugins/sweet-alert/sweetalert2.min.js"></script>
    <script src="assets/js/pages/sweet-alert/sweet-alert-data.js"></script>
    <!-- end js include path -->

</body>


</html>