<?php
//to check if the file that includes this code is two level far from the required page or one level. 
if (file_exists("../general_backend/sessionStart.php")) {
    require "../general_backend/sessionStart.php";
} elseif (file_exists("../../general_backend/sessionStart.php")) {
    require "../../general_backend/sessionStart.php";
} else {
    require "general_backend/sessionStart.php";
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js" integrity="sha512-2xXe2z/uA+2SyT/sTSt9Uq4jDKsT0lV4evd3eoE/oxKih8DSAsOF6LUb+ncafMJPAimWAXdu9W+yMXGrCVOzQA==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css" integrity="sha512-/Ae8qSd9X8ajHk6Zty0m8yfnKJPlelk42HTJjOHDWs1Tjr41RfsSkceZ/8yyJGLkxALGMIYd5L2oGemy/x1PLg==" crossorigin="anonymous" />

    <link rel="stylesheet" href="instructor.css">

    <link rel="icon" type="image/png" href="../general_resources/Tadreabk favicon.png" />
    <title>Students List</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
        <div class="container">
            <a class="navbar-brand" href="instructorHome.php">
                <img src="../general_resources/Tadreabk logo.png" alt="" width="270" height="50">
            </a>
            <div class="container d-flex mx-auto flex-column">
                <nav class="nav nav-masthead justify-content-center float-md">
                    <a class="nav-link btn btn-outline-primary nav-btn active" aria-current="page" href="studentsList.php">Students</a>
                </nav>
            </div>
            <nav class="d-flex mx-auto">
                <div class="container d-flex justify-content-center" style="width: 270px; margin-left: 0.5rem; margin-right: 0.5rem;">
                    <a class="btn btn-outline-primary mx-2 nav-btn" href="../general_backend/logout.php">
                        <i class="bi bi-box-arrow-right d-flex justify-content-center align-items-center"></i>
                    </a>
                </div>
            </nav>
        </div>
    </nav>

    <div class="container mx-auto my-4">
        <div class="card card-body mb-3">
            <p class="fs-5 fw-bold mb-0">Students</p>
        </div>
        <div class="card card-body py-2 my-2">
            <div class="row">
                <div class="col text-muted">
                    Name
                </div>
                <div class="col text-center text-muted">
                    Major
                </div>
                <div class="col text-center text-muted">
                    Progress report
                </div>
                <div class="col text-center text-muted">
                    Company feedback
                </div>
            </div>
        </div>

        <div class='card card-body my-1'>
            <div class='row'>
                <div class='col'>
                    Name
                </div>
                <div class='col text-center'>
                    Major
                </div>
                <div class='col text-center'>
                    <a class='my-0' href='#' target='_blank'>Download</a>
                </div>
                <div class='col text-center'>
                    <a class='my-0' data-bs-toggle='collapse' href='#collapse' role='button'>View</a>
                </div>
            </div>
            <div class='collapse' id='collapse'>
                <div class='card card-body mt-3'>
                    Company performance feedback details.
                    <br>
                    <div class='d-flex justify-content-end'>-
                        Company name
                    </div>
                </div>
            </div>
        </div>

        <div class='card card-body my-1'>
            <div class='row'>
                <div class='col'>
                    ".$row['name']."
                </div>
                <div class='col text-center'>
                    ".$row['major']."
                </div>
                <div class='col text-center'>
                    <!--<a class='my-0' href='../progressReports/".$row['fileRef']."' target='_blank'>Download</a>-->
                    <a class='my-0' href='#' target='_blank'>Download</a>
                </div>
                <div class='col text-center'>
                    <!--<a class='my-0' data-bs-toggle='collapse' href='#collapse".$row['studentID']."' role='button'>View</a>-->
                    <a class='my-0' data-bs-toggle='collapse' href='#collapseID' role='button'>View</a>
                </div>
            </div>
            <!--<div class='collapse' id='collapse".$row['studentID']."'>-->
            <div class='collapse' id='collapseID'>
                <div class='card card-body mt-3'>
                    ".$row['details']."
                    <br>
                    <div class='d-flex justify-content-end'>-
                        ".$row['name']."
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body my-1">
            <div class="row">
                <div class="col">
                    Name
                </div>
                <div class="col text-center">
                    Major
                </div>
                <div class="col text-center">
                    No progress report
                </div>
                <div class="col text-center">
                    No company feedback
                </div>
            </div>
        </div>

        <div class="card card-body my-1">
            No students
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>