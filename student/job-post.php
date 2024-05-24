<?php
include("../includes/connect.php");
include("../includes/data.php");
session_start();
$applied = false;

if (isset($_GET["apply"])) {
    $job = getById("jobs", $_GET["job_id"]);
    $recruiter = getById("recruiters", $_GET["recruiter_id"]);
    $student = getById("students", $_SESSION["student_id"]);

    echo ' <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script type="text/javascript">
    (function() {
        emailjs.init("user_y9ELf0pktxwVQdPqQuf5g");
    })();
</script>';

    echo '<script>emailjs.send("service_jiw8r72", "template_sq3qj1a", {
        student_name:"' . $student['name'] . '",
        job_name: "' . $job['title'] . '",
        company_name: "' . $recruiter['name'] . '",
        resume_url: "www.google.com",
        company_email: "' . $recruiter['email_id'] . '",
        reply_to: "' . $student['email_id'] . '",
    });</script>';
    $applied = true;
}
$jobPosts = getAll("jobs");

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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bootstrap snippets bootdey">
        <?php
        if ($applied==true) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Applied Successfully!</strong> You Will Be Contacted By '.$recruiter["name"].'.
            </div>';
        }
        ?>
        <div class="row pt-4">
            <?php
            for ($i = 0; $i < sizeof($jobPosts); $i++) {
                $jobPost = $jobPosts[$i];
                $recruiter = getById("recruiters", $jobPost["recruiter_id"]);
                echo '
                  <div class="col-12 mb-4">
                  <div class="panel ">
                      <div class="panel-body  card p-4">
                          <div class="media-main">
                              <a class="pull-left" href="#">
                                  <img class="thumb-lg img-circle bx-s" src="../' . $recruiter["profilephoto"] . '" alt="">
                              </a>
                              <div class="pull-right btn-group-sm">
                                  <a href="./job-post.php?apply=1&job_id=' . $jobPost["id"] . '&recruiter_id=' . $recruiter["id"] . '" class="btn btn-success tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                                      APPLY
                                  </a>
                              </div>
                              <div class="info">
                                  <h4 style="padding-top: 0px;">' . $recruiter["name"] . ' | ' . $jobPost["title"] . '</h4>
                                  <p class="text-muted" style="margin-bottom: 0;">' . $jobPost["description"] . '</p>
                                  <p class="text-muted" style="margin-bottom: 0;">Role: ' . $jobPost["role"] . '</p>
                                  <p class="text-muted" style="margin-bottom: 0;">Remuneration: ₹' . $jobPost["ctc"] . '</p>
                                  <p class="text-muted" style="margin-bottom: 0;">Elegibility: ' . $jobPost["elegibility"] . '</p>
                                  <p class="text-muted" style="margin-bottom: 0;">Skills Required: ' . $jobPost["skills_required"] . '</p>
                                  <p class="text-muted" style="margin-bottom: 0;">Experience: ' . $jobPost["experience"] . '</p>
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