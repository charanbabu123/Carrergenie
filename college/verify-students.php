<?php
include("../includes/connect.php");
include("../includes/data.php");

if (isset($_GET["verify"])) {
    $student = getById("students", $_GET["verify"]);
    $student["status"] = 1;
    student("edit", $student["id"], $student);
}
if (isset($_GET["block"])) {
    $student = getById("students", $_GET["block"]);
    $student["status"] = 0;
    student("edit", $student["id"], $student);
}

$students = getWhere("students", 'college_id=' . $_GET["id"]);


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
        <!-- <div class="row">
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
        </div> -->
        <div class="row pt-4">
            <?php
            for ($i = 0; $i < sizeof($students); $i++) {
                $student = $students[$i];
                echo '
                  <div class="col-12 mb-4">
                  <div class="panel ">
                      <div class="panel-body  card p-4">
                          <div class="media-main">
                              <a class="pull-left" href="#">
                                  <img class="thumb-lg img-circle bx-s" src="../' . $student["profile_photo"] . '" alt="">
                              </a>
                              <div class="pull-right btn-group-sm">
                                  <a href="./resume.php?id=' . $student["id"] . ' "  target="_blank" class="btn btn-success tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                                      <i class="fas fa-file-invoice"></i>
                                  </a>';
                if ($student["status"] == 0) {
                    echo '<a style="margin-left:10px;" href="./verify-students.php?verify=' . $student["id"] . '&id=' . $_GET["id"] . '" class="btn btn-success tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                                      <i class="fa-solid fa-check"></i>
                                  </a>';
                } else {
                    echo '<a style="margin-left:10px;" href="./verify-students.php?block=' . $student["id"] . '&id=' . $_GET["id"] . '" class="btn btn-danger tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                                                      <i class="fa-solid fa-ban"></i>
                                                  </a>';
                }
                echo '</div>
                              <div class="info">
                                  <h4>' . $student["name"] . '</h4>
                                  <p class="text-muted">' . $student["email_id"] . ' | ' . $student["contact_number"] . '</p>
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