
<?php
include("../includes/connect.php");
include("../includes/data.php");
session_start();
if (!isset($_SESSION["recruiter_id"])) {
    header("Location: ./authentication.php");
    die();
}

$recruiter = getById("recruiters", $_SESSION["recruiter_id"]);



if (isset($_POST["add_vacancy"])) {
    $args["recruiter_id"] = $_SESSION["recruiter_id"];
    $args["title"] = $_POST["title"];
    $args["role"] = $_POST["role"];
    $args["description"] = $_POST["description"];
    $args["ctc"] = $_POST["ctc"];
    $args["elegibility"] = $_POST["elegibility"];
    $args["skills_required"] = $_POST["skills_required"];
    $args["experience"] = $_POST["experience"];
    $args["course"] = $_POST["course"];
    $args["status"] = 1;
    $args["created_at"] = null;
    job("add", "", $args);
    header("Location: ./");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Job</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="../css/add-vacancy.css">
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
        <form action="" method="post">
            <div class="row">
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Basic Informations</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Title</label><input type="text"
                                class="form-control" name="title" placeholder="enter Title"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 mt-2"><label class="labels">Role</label><input type="text"
                                class="form-control" name="role" placeholder="enter Role" ></div>

                        <div class="col-md-12 mt-2" ><label class="labels">Description</label><textarea name="description" 
                                placeholder="enter Description" class="form-control" cols="30" rows="5" ></textarea>
                        </div>
                        <div class="col-md-12 mt-2"><label class="labels">Salary/CTC</label><input type="text"
                                class="form-control" name="ctc" placeholder="enter Salary/CTC"></div>

                    </div>


                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 pt-5">
                    <div class="col-md-12 ">
                        <h4>Requirements</h4>
                    </div>
                    <div class="col-md-12 mt-4"><label class="labels">Eligibility Criteria</label><input type="text"
                            class="form-control" name="elegibility" placeholder="enter Eligibility Criteria" value=""></div>
                    <div class="col-md-12 mt-4"><label class="labels">Skills Required</label><input type="text"
                            class="form-control" name="skills_required" placeholder="enter Skills Required" value=""></div>
                    <div class="col-md-12 mt-4"><label class="labels">Experience</label><input type="text"
                            class="form-control" name="experience" placeholder="enter Experience" value=""></div>
                    <div class="col-md-12 mt-4"><label class="labels">Preferred  Course</label><input type="text"
                            class="form-control" name="course" placeholder="enter Preferred  Course" value=""></div>
                    <div class="mt-4 text-center"><button name="add_vacancy" value="add_vacancy" class="btn btn-primary profile-button" type="submit" >Post Job
                            </button></div>


                </div>



            </div>
            </div>
        </form>
        </div>
    </div>
    </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>