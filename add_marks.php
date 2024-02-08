<?php

session_start();
include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/add_student.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Dec 2022 06:34:34 GMT -->

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
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="assets/css/material_style.css">
    <!-- Theme Styles -->
    <link href="assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- dropzone -->
    <link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
    <!-- Date Time item CSS -->
    <link rel="stylesheet" href="assets/plugins/flatpicker/css/flatpickr.min.css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon/logo-half.png" />
    <link rel="stylesheet" href="assets/css/list_cards.css">
</head>
<!-- END HEAD -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function updateSubjects(year) {
        var subjectSelect = document.getElementById('subjectSelect');

        // Clear existing options
        subjectSelect.innerHTML = '';

        // Make an AJAX request to get the subjects based on the selected year
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Update the subjects dropdown with the response
                    subjectSelect.innerHTML = xhr.responseText;
                } else {
                    console.error('Error: ' + xhr.status);
                }
            }
        };

        xhr.open('POST', 'get_subjects.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('year=' + year);
    }
</script>
<script>
    function populateRollNo() {
        var yearId = document.querySelector('#list2').dataset.val;
        var xhr2 = new XMLHttpRequest();
        xhr2.open('POST', 'get_rollno.php', true);
        xhr2.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr2.onreadystatechange = function() {
            if (xhr2.readyState === 4 && xhr2.status === 200) {
                var rollNos = JSON.parse(xhr2.responseText);
                var rollNoDropdown = document.querySelector('#rollNoDropdown');
                rollNoDropdown.innerHTML = '<option value="">Select Roll No.</option>';
                rollNos.forEach(function(rollNo) {
                    var option = document.createElement('option');
                    option.value = rollNo;
                    option.text = rollNo;
                    rollNoDropdown.appendChild(option);
                });
            }
        };
        xhr2.send('year_id=' + yearId);
    }
</script>

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <?php include('header.php'); ?>
        <!-- end header -->

        <!-- end color quick setting -->
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
                                <div class="page-title">Add Subject</div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="card-head">
                                    <header>Basic Information</header>

                                </div>
                                <form action="add_marks.php" method="post">
                                    <div class="card-body row">
                                        <!-- <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" id="txtFirstName" name="rollno">
                                                <label class="mdl-textfield__label">Roll No.</label>
                                            </div>
                                        </div> -->

                                        <!-- <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                <input class="mdl-textfield__input" type="text" id="list3" value="" tabIndex="-1" name="rollno">
                                                <label for="list3" class="pull-right margin-0">
                                                    <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                                </label>
                                                <label for="list3" class="mdl-textfield__label">Roll No.</label>
                                                <ul data-mdl-for="list3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">


                                                    


                                                </ul>
                                            </div>
                                        </div> -->

                                        <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                <input class="mdl-textfield__input" type="text" id="list2" value="" tabIndex="-1" name="year" onchange="updateSubjects(this.value),populateRollNo()">
                                                <label for="list2" class="pull-right margin-0">
                                                    <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                                </label>
                                                <label for="list2" class="mdl-textfield__label">Year</label>
                                                <ul data-mdl-for="list2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">


                                                    <?php
                                                    $s = "select * from years";
                                                    $query = mysqli_query($con, $s);

                                                    ?>

                                                    <?php
                                                    while ($r = mysqli_fetch_array($query)) {

                                                    ?>
                                                        <li class="mdl-menu__item" data-val="<?php echo $r['year_id']; ?>"><?php echo $r['year_name']; ?></li>
                                                    <?php
                                                    }
                                                    ?>


                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <select class="mdl-textfield__input" id="subjectSelect" name="subject">
                                                    <option value="">Select Subject</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <select id="rollNoDropdown" name="roll_no" class="mdl-textfield__input"></select>
                                        </div>
                                        </div>

                                        <!-- <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                <input class="mdl-textfield__input" type="text" id="list1" tabIndex="-1" name="subject">
                                                <label for="list1" class="pull-right margin-0">
                                                    <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                                </label>
                                                <label for="list1" class="mdl-textfield__label">Subject</label>
                                                <ul data-mdl-for="list1" id="subjectSelect" name="subject" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">

                                                    


                                                </ul>
                                            </div>
                                        </div> -->



                                        <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" id="txtRollNo" name="marks">
                                                <label class="mdl-textfield__label">Marks Obtained</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 p-t-20 text-center">
                                            <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary" name="submit" value="Submit">
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab"> <i class="material-icons">chat</i>Chat
                                <span class="badge badge-danger">4</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> <i class="material-icons">settings</i>
                                Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Start User Chat -->
                        <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">
                            <div class="chat-sidebar-list">
                                <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
                                    <div class="chat-header">
                                        <h5 class="list-heading">Online</h5>
                                    </div>
                                    <ul class="media-list list-items">
                                        <li class="media"><img class="media-object" src="assets/img/user/user3.jpg" width="35" height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">John Deo</h5>
                                                <div class="media-heading-sub">Spine Surgeon</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">5</span>
                                            </div> <img class="media-object" src="assets/img/user/user1.jpg" width="35" height="35" alt="...">
                                            <i class="busy dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Rajesh</h5>
                                                <div class="media-heading-sub">Director</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="assets/img/user/user5.jpg" width="35" height="35" alt="...">
                                            <i class="away dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jacob Ryan</h5>
                                                <div class="media-heading-sub">Ortho Surgeon</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-danger">8</span>
                                            </div> <img class="media-object" src="assets/img/user/user4.jpg" width="35" height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Kehn Anderson</h5>
                                                <div class="media-heading-sub">CEO</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="assets/img/user/user2.jpg" width="35" height="35" alt="...">
                                            <i class="busy dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Sarah Smith</h5>
                                                <div class="media-heading-sub">Anaesthetics</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="assets/img/user/user7.jpg" width="35" height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Vlad Cardella</h5>
                                                <div class="media-heading-sub">Cardiologist</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="chat-header">
                                        <h5 class="list-heading">Offline</h5>
                                    </div>
                                    <ul class="media-list list-items">
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-warning">4</span>
                                            </div> <img class="media-object" src="assets/img/user/user6.jpg" width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jennifer Maklen</h5>
                                                <div class="media-heading-sub">Nurse</div>
                                                <div class="media-heading-small">Last seen 01:20 AM</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="assets/img/user/user8.jpg" width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Lina Smith</h5>
                                                <div class="media-heading-sub">Ortho Surgeon</div>
                                                <div class="media-heading-small">Last seen 11:14 PM</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">9</span>
                                            </div> <img class="media-object" src="assets/img/user/user9.jpg" width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jeff Adam</h5>
                                                <div class="media-heading-sub">Compounder</div>
                                                <div class="media-heading-small">Last seen 3:31 PM</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="assets/img/user/user10.jpg" width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Anjelina Cardella</h5>
                                                <div class="media-heading-sub">Physiotherapist</div>
                                                <div class="media-heading-small">Last seen 7:45 PM</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End User Chat -->
                        <!-- Start Setting Panel -->
                        <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                            <div class="chat-sidebar-settings-list slimscroll-style">
                                <div class="chat-header">
                                    <h5 class="list-heading">Layout Settings</h5>
                                </div>
                                <div class="chatpane inner-content ">
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Sidebar Position</div>
                                            <div class="setting-set">
                                                <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                    <option value="left" selected="selected">Left</option>
                                                    <option value="right">Right</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Header</div>
                                            <div class="setting-set">
                                                <select class="page-header-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed" selected="selected">Fixed</option>
                                                    <option value="default">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Footer</div>
                                            <div class="setting-set">
                                                <select class="page-footer-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed">Fixed</option>
                                                    <option value="default" selected="selected">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-header">
                                        <h5 class="list-heading">Account Settings</h5>
                                    </div>
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Notifications</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
                                                        <input type="checkbox" id="switch-1" class="mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Show Online</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-7">
                                                        <input type="checkbox" id="switch-7" class="mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Status</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2">
                                                        <input type="checkbox" id="switch-2" class="mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">2 Steps Verification</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
                                                        <input type="checkbox" id="switch-3" class="mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-header">
                                        <h5 class="list-heading">General Settings</h5>
                                    </div>
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Location</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-4">
                                                        <input type="checkbox" id="switch-4" class="mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Save Histry</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-5">
                                                        <input type="checkbox" id="switch-5" class="mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Auto Updates</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-6">
                                                        <input type="checkbox" id="switch-6" class="mdl-switch__input" checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->

    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/popper/popper.js"></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/plugins/feather/feather.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Common js-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/theme-color.js"></script>
    <!-- Material -->
    <script src="assets/plugins/material/material.min.js"></script>
    <script src="assets/js/pages/material-select/getmdl-select.js"></script>
    <script src="assets/plugins/flatpicker/js/flatpicker.min.js"></script>
    <script src="assets/js/pages/date-time/date-time.init.js"></script>
    <!-- dropzone -->
    <script src="assets/plugins/dropzone/dropzone.js"></script>
    <script src="assets/plugins/dropzone/dropzone-call.js"></script>
    <!-- end js include path -->
    <script>
        document.querySelector("input[type=number]")
            .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
    </script>
</body>

</html>

<?php

include('db.php');

if (isset($_POST['submit'])) {
    $rollno = $_POST['roll_no'];
    $year = $_POST['year'];
    $marks = $_POST['marks'];
    $subject = $_POST['subject'];

    //$sql = "SELECT `year_id` FROM years WHERE `year_name` = '$year'";
    $stmt = $con->prepare("SELECT year_id FROM years WHERE year_name = '$year'");
    //$stmt->bind_param('s', $year);
    $stmt->execute();
    $stmt->bind_result($yearId);
    $stmt->fetch();
    $stmt->close();


    $insertquery = "INSERT INTO `marks`(`Roll_No`, `subject_id`, `marks_obtained`) VALUES ('$rollno','$subject','$marks')";

    $res = mysqli_query($con, $insertquery);

    // $stmt1 = $con->prepare("SELECT * FROM students WHERE Roll_No = '$rollNo' AND year_id = '$yearId'");
    // $stmt1->bind_param("si", $rollNo, $yearid);
    // $stmt1->execute();
    // $result = $stmt1->get_result();

    if ($res) {
?>
        <script>
            alert("Data Inserted");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Data Not Inserted");
        </script>
<?php

    }
}


?>