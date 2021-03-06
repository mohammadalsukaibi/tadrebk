<?php
//to check if the file that includes this code is two level far from the required page or one level.
if(file_exists("../general_backend/sessionStart.php")){
    require "../general_backend/sessionStart.php";
}
elseif (file_exists("../../general_backend/sessionStart.php")){
    require "../../general_backend/sessionStart.php";
}
else{
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
    <link rel="stylesheet" href="company.css">

    <script>
        function getAppID(){
            return <?php echo $_GET['appID']; ?>
        }
    </script>
    <script src="resources/filterStudents.js"></script>

    <link rel="icon" type="image/png" href="../general_resources/Tadreabk favicon.png" />
    <title>Request Status</title>
    <script src="resources/to/jquery.js"></script>
<script src="resources/to/popper.js"></script>
<script src="resources/to/bootstrap.js"></script>
<script src="resources/to/bootstrap-confirmation.js"></script>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
        <div class="container">
            <a class="navbar-brand" href="companyHome.php">
                <img src="../general_resources/Tadreabk logo.png" alt="" width="270" height="50">
            </a>
            <div class="container d-flex mx-auto flex-column">
                <nav class="nav nav-masthead justify-content-center float-md">
                    <a class="nav-link btn btn-outline-primary nav-btn" aria-current="page" href="studentsList.php">Students</a>
                    <a class="nav-link btn btn-outline-primary nav-btn" aria-current="page" href="trainingApplications.php">Applications</a>
                    <a class="nav-link btn btn-outline-primary nav-btn" aria-current="page" href="announcements.php">Announcements</a>
                    <a class="nav-link btn btn-outline-primary nav-btn" aria-current="page" href="events.php">Events</a>
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

    <div style="float:left; width: 25%; height: 100%; color: #ffffff; background-color: #172457;">
        <div class="Container mx-auto my-5">
            <div class="d-flex justify-content-center">
                <span class="text">Filters <i class="bi bi-funnel-fill"></i></span>
            </div>
            <div class="my-5">
                <div class="Container mx-3 my-3 d-flex justify-content-between">
                    <span class="align-middle">Major</span>
                    <select id="majorSelect" class="form-select" aria-label="Default select example" style="width: 10rem;">
                        <option selected value="">All majors</option>
                        <?php include "backend/getMajors.php"; ?>
                    </select>
                </div>
                <div class="Container mx-3 my-3 d-flex justify-content-between">
                    <span class="align-middle">GPA out of 4</span>
                    <select id="gpaSelect" class="form-select" aria-label="Default select example" style="width: 10rem;">
                        <option selected value="0">Any GPA</option>
                        <option value="1">1 or more</option>
                        <option value="2">2 or more</option>
                        <option value="3">3 or more</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div style="float:left; width: 75%; height: 100%;">
        <div class="Container mx-5 my-5">
            <div class="Container d-flex justify-content-between">
                <div>
                    <p class="text">Pending Students Requests</p>
                </div>
                <div class="d-flex align-items-center">
                    <div class="input-group invisible">
                        <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                            <i class="bi bi-search d-flex justify-content-center align-items-center"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="card my-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                Name
                            </div>
                            <div class="col">
                                Major
                            </div>
                            <div class="col">
                                GPA
                            </div>
                            <div class="col">
                                CV
                            </div>
                            <div class="col">
                                Request
                            </div>
                            <div class="col">

                            </div>
                        </div>
                            <div class="col" id="requestsList">
                                <?php include "backend/getRequests.php"; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>
