<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header('location: Login.html');
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
    <link rel="stylesheet" href="project.css">

    <link rel="icon" type="image/png" href="resources/Tadreabk favicon.png" />
    <title>Request Status</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
        <div class="container">
            <a class="navbar-brand" href="studentHome.php">
                <img src="resources/Tadreabk logo.png" alt="" width="270" height="50">
            </a>
            <div class="container d-flex mx-auto flex-column">
                <nav class="nav nav-masthead justify-content-center float-md">
                    <a class="nav-link btn btn-outline-primary" href="studentHome.php">Home</a>
                    <a class="nav-link btn btn-outline-primary" href="#">Profile</a>
                    <a class="nav-link btn btn-outline-primary active" href="ViewRequestStatus.php">Requests</a>
                    <a class="nav-link btn btn-outline-primary" aria-current="page" href="#">Companies</a>
                </nav>
            </div>
            <nav class="d-flex mx-auto">
                <div class="container d-flex justify-content-center" style="width: 270px; margin-left: 0.5rem; margin-right: 0.5rem;">
                    <!--
                    <a class="btn btn-outline-primary mx-2" href="#">
                        <i class="bi bi-file-earmark-arrow-up d-flex justify-content-center align-items-center"></i>
                    </a>
                    -->
                    <a class="btn btn-outline-primary mx-2 " href="logout.php">
                        <i class="bi bi-box-arrow-right d-flex justify-content-center align-items-center"></i>
                    </a>
                </div>
            </nav>
        </div>
    </nav>

    <div class="container mx-auto" style=" width: 80%; height: 100%;">
        <div class="Container mx-5 my-5 raw ">
            <div class="Container d-flex justify-content-between">
                <div>
                    <p class="text">Request Status</p>
                </div>
                <div class="d-flex align-items-center">
                    <div class="input-group">
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
                        <div class="row row-cols-5">
                            <div class="col">
                                Company
                            </div>
                            <div class="col">
                                Location
                            </div>
                            <div class="col">
                                Status
                            </div>
                            <div class="col">
                                Request
                            </div>
                        </div>
                            <div class="col">
                                    <div class='card my-1'>
                                        <div class='card-body'>
                                            <div class='row row-cols-5'>
                                                <div class='col'>
                                                    <p class='my-0'>Aramco</p>
                                                </div>
                                                <div class='col'>
                                                    <p class='my-0'>Dhaharan City</p>
                                                </div>
                                                <div class='col'>
                                                    <!-- put if statment here if pending it will be orange if approved it will be green-->
                                                  
                                                      <!-- instead of rand(0,99) put the status here -->
                                                  <?php
                                                    $colour = 'green';
                                                    $status = 'Approved';
                                                    $str = "";
                                                    if($status == 'Pending') {
                                                        $colour = 'orange';
                                                        $str .= "    <div style='color: $colour'>
                                                        $status 
                                                           </div>  </div>";
                                                    }
                                                    elseif($status == 'Approved'){
                                                        $colour = 'green';
                                                        $str .= "    <div style='color: $colour'>
                                                        $status 
                                                    </div>
                                                    </div>
                                                    <div class='col'>
                                                        <button class='btn btn-primary'>Accept</button>
                                                        </div>
                                                        <div class='col'>
                                                        <button class='btn btn-primary'>Reject</button>
                                                        </div>  "; 
                                                    }
                                                    elseif($status == 'Rejected'){
                                                        $colour = 'red';
                                                        $str .= "    <div style='color: $colour'>
                                                        $status 
                                                           </div>  </div>";
                                                    }

                                                    echo $str;
                                                    ?>
                                            </div>
                                            
                                        </div>
                                        
                            </div>
                            <div class="col">
                                    <div class='card my-1'>
                                        <div class='card-body'>
                                            <div class='row row-cols-5'>
                                                <div class='col'>
                                                    <p class='my-0'>Aramco</p>
                                                </div>
                                                <div class='col'>
                                                    <p class='my-0'>Dhaharan City</p>
                                                </div>
                                                <div class='col'>
                                                    <!-- put if statment here if pending it will be orange if approved it will be green-->
                                                  
                                                      <!-- instead of rand(0,99) put the status here -->
                                                  <?php
                                                    $colour = 'green';
                                                    $status = 'Pending';
                                                    $str = "";
                                                    if($status == 'Pending') {
                                                        $colour = 'orange';
                                                        $str .= "    <div style='color: $colour'>
                                                        $status 
                                                           </div>  </div>";
                                                    }
                                                    elseif($status == 'Approved'){
                                                        $colour = 'green';
                                                        $str .= "    <div style='color: $colour'>
                                                        $status 
                                                    </div>
                                                    </div>
                                                    <div class='col'>
                                                        <button class='btn btn-primary'>Accept</button>
                                                        </div>
                                                        <div class='col'>
                                                        <button class='btn btn-primary'>Reject</button>
                                                        </div>  "; 
                                                    }
                                                    elseif($status == 'Rejected'){
                                                        $colour = 'red';
                                                        $str .= "    <div style='color: $colour'>
                                                        $status 
                                                           </div>  </div>";
                                                    }

                                                    echo $str;
                                                    ?>
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





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>