<?php

include("../includes/connect.php");
include("../includes/data.php");
if (isset($_GET['delete'])) {
    $args["recruiter_id"] = "";
    $args["title"] ="";
    $args["role"] ="";
    $args["description"] ="";
    $args["ctc"] ="";
    $args["elegibility"] = "";
    $args["skills_required"] = "";
    $args["experience"] ="";
    $args["course"] ="";
    $args["status"] = "";
    $args["created_at"] = "";
    job("delete", $_GET['job_id'],$args);
    

}

$jobPosts = getWhere("jobs", 'recruiter_id=' . $_GET["id"]);
$recruiter = getById("recruiters", $_GET["id"]);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacancy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/verify-students.css">
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container-fluid bootstrap snippets bootdey">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body p-t-0">
                        <div class="input-group">
                            <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                            <span style="width: 10px;"></span>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-effect-ripple btn-primary"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <?php
            for ($i = 0; $i < sizeof($jobPosts); $i++) {
                $jobPost = $jobPosts[$i];
                echo '
                  <div class="col-12 mb-4">
                  <div class="panel ">
                      <div class="panel-body  card p-4">
                          <div class="media-main">
                              <a class="pull-left" href="#">
                                  <img class="thumb-lg img-circle bx-s" src="../'.$recruiter["profilephoto"].'" alt="">
                              </a>
                              <div class="pull-right btn-group-sm">
                                  <a href="./job-post.php?id='.$_GET["id"].'&delete=1&job_id='.$jobPost["id"].'" class="btn btn-danger tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                                      <i class="fas fa-trash-alt"></i>
                                  </a>
                              </div>
                              <div class="info">
                                  <h4 style="padding-top: 0px;">'.$jobPost["title"].'</h4>
                                  <p class="text-muted" style="margin-bottom: 0;">'.$jobPost["description"].'</p>
                                  <p class="text-muted" style="margin-bottom: 0;">Role: '.$jobPost["role"].'</p>
                                  <p class="text-muted" style="margin-bottom: 0;">Remuneration: ₹'.$jobPost["ctc"].'</p>
                                  <p class="text-muted" style="margin-bottom: 0;">Elegibility: '.$jobPost["elegibility"].'</p>
                                  <p class="text-muted" style="margin-bottom: 0;">Skills Required: '.$jobPost["skills_required"].'</p>
                                  <p class="text-muted" style="margin-bottom: 0;">Experience: '.$jobPost["experience"].'</p>
                              </div>
                          </div>
                          <div class="clearfix"></div>
  
  
                      </div>
                  </div>
              </div>
              ';
            }
            ?>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="../js/verify-students.js"></script>
</body>

</html>