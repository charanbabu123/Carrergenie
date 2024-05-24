<?php
include("../includes/connect.php");
include("../includes/data.php");
session_start();
if (!isset($_SESSION["student_id"])) {
    header("Location: ./authentication.php");
    die();
}
$valid=true;

$student = getById("students", $_SESSION["student_id"]);

if (isset($_POST["add_education"])) {
    $args["student_id"] = $_SESSION["student_id"];
    $args["college_name"] = $_POST["college_name"];
    $args["course"] = $_POST["course"];
    $args["duration"] = $_POST["duration"];
    $args["score"] = $_POST["score"];
    $args["status"] = 1;
    $args["created_at"] = null;
    education("add", "", $args);
}

if (isset($_POST["add_experience"])) {
    $args["student_id"] = $_SESSION["student_id"];
    $args["company_name"] = $_POST["company_name"];
    $args["role"] = $_POST["role"];
    $args["duration"] = $_POST["duration"];
    $args["description"] = $_POST["description"];
    $args["status"] = 1;
    $args["created_at"] = null;
    experience("add", "", $args);
}

if (isset($_POST["add_accomplishment"])) {
    $args["student_id"] = $_SESSION["student_id"];
    $args["title"] = $_POST["title"];
    $args["description"] = $_POST["description"];
    $args["date"] = $_POST["date"];
    $args["status"] = 1;
    $args["created_at"] = null;
    accomplishment("add", "", $args);
}

if (isset($_POST["add_project"])) {
    $args["student_id"] = $_SESSION["student_id"];
    $args["title"] = $_POST["title"];
    $args["description"] = $_POST["description"];
    $args["url"] = $_POST["url"];
    $args["status"] = 1;
    $args["created_at"] = null;
    project("add", "", $args);
}

if (isset($_POST["save_profile"])) {
    $args["name"] = isset($_POST["name"]) ? $_POST["name"] : $student["name"];
    $args["profile_photo"] = isset($_POST["profile_photo"]) ? $_POST["profile_photo"] : $student["profile_photo"];
    $args["email_id"] = isset($_POST["email_id"]) ? $_POST["email_id"] : $student["email_id"];
    $args["contact_number"] = isset($_POST["contact_number"]) ? $_POST["contact_number"] : $student["contact_number"];
    $args["password"] = isset($_POST["password"]) ? $_POST["password"] : $student["password"];
    $args["college_id"] = isset($_POST["college_id"]) ? $_POST["college_id"] : $student["college_id"];
    $args["dob"] = isset($_POST["dob"]) ? $_POST["dob"] : $student["dob"];
    $args["bio"] = isset($_POST["bio"]) ? $_POST["bio"] : $student["bio"];
    $args["address"] = isset($_POST["address"]) ? $_POST["address"] : $student["address"];
    $args["website"] = isset($_POST["website"]) ? $_POST["website"] : $student["website"];
    $args["skills"] = isset($_POST["skills"]) ? $_POST["skills"] : $student["skills"];
    $args["languages"] = isset($_POST["languages"]) ? $_POST["languages"] : $student["languages"];
    $args["status"] = isset($_POST["status"]) ? $_POST["status"] : $student["status"];
    $args["created_at"] = isset($_POST["created_at"]) ? $_POST["created_at"] : $student["created_at"];
    
        if($valid){

            student("edit", $student["id"], $args);
        }
    
}

if (isset($_FILES["new_profile_photo"])) {
    $img = $_FILES["new_profile_photo"];
    $ext = pathinfo($img["name"]);
    $filename = $student["id"] . '.' . $ext['extension'];
    if (uploadImage($img["tmp_name"], $filename)) {
        $student["profile_photo"] = "/uploads/${filename}";
        if($valid){

            student("edit", $student["id"], $student);
        }
    }
}

if (isset($_POST["reset_pass"])) {
    if ($student["password"] == md5($_POST["current"])) {
        resetPassword("students", $student["id"], md5($_POST["new"]));
    } else {
        echo '<script>alert("Sorry! Current Password Is Invalid.");</script>';
    }
}
if (isset($_POST["save_exit"])) {
    header("location: index.php");
}

$student = getById("students", $_SESSION["student_id"]);
$education = getWhere("educations", 'student_id=' . $_SESSION["student_id"]);
$experience = getWhere("experiences", 'student_id=' . $_SESSION["student_id"]);
$accomplishment = getWhere("accomplishments", 'student_id=' . $_SESSION["student_id"]);
$project = getWhere("projects", 'student_id=' . $_SESSION["student_id"]);
$colleges = getAll("colleges");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit | <?php echo $student["name"]; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="../css/edit-profile.css">
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5" style="padding-bottom: 10px !important;">
                    <img class="rounded-circle  mt-5" src="..<?php echo $student["profile_photo"]; ?>" style="max-height: 200px; max-width: 200px; margin-bottom: 10px;">
                    <span class="font-weight-bold"><?php echo $student["name"]; ?></span>
                    <span class="text-black-50  text-muted"><?php echo $student["email_id"]; ?></span>
                </div>
                <div class="mt-2 text-center">
                    <form action="" method="post" enctype="multipart/form-data" name="pp">
                        <label class="btn btn-primary profile-button">
                            Change Avatar
                            <input type="file" name="new_profile_photo" style="display: none;" onchange="pp.submit()">
                        </label>
                    </form>
                </div>

            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>

                    <div class="row mt-3">
                        <form action="" method="post">
                            <div class="col-md-12"><label class="labels">Full Name</label><input name="name" type="text" class="form-control" placeholder="Enter Full Name" value="<?php echo $student["name"]; ?>"></div>
                            <div class="col-md-12 mt-2"><label class="labels">Email ID</label><input name="email_id" type="email" class="form-control" placeholder="Enter Email Id" value="<?php echo $student["email_id"]; ?>" disabled></div>
                            <div class="col-md-12 mt-2"><label class="labels">Contact Number</label><input name="contact_number" type="tel" class="form-control" placeholder="Enter Contact Number" value="<?php echo $student["contact_number"]; ?>"></div>
                            <div class="col-md-12 mt-2">
                                <label class="labels">College: </label>
                                <Select name="college_id" style="width: 100%; height: 37px;">
                                    <option disabled selected>Select College</option>
                                    <?php
                                    for ($i = 0; $i < sizeof($colleges); $i++) {
                                        $item = $colleges[$i];
                                        if ($item["id"] == $student["college_id"]) {
                                            echo '<option value="' . $item["id"] . '" selected>' . $item["name"] . '</option>';
                                        } else {
                                            echo '<option value="' . $item["id"] . '">' . $item["name"] . '</option>';
                                        }
                                    }
                                    ?>
                                </Select>
                            </div>
                            <div class="col-md-12 mt-2"><label class="labels">DOB</label><input name="dob" type="date" class="form-control" value="<?php echo $student["dob"]; ?>"></div>
                            <div class="col-md-12 mt-2"><label class="labels">Bio</label><textarea name="bio" id="" placeholder="Enter Your Bio" class="form-control" cols="30" rows="5"><?php echo $student["bio"]; ?></textarea></div>
                            <div class="col-md-12 mt-2"><label class="labels">Address</label><input name="address" type="address" class="form-control" placeholder="Enter Address" value="<?php echo $student["address"]; ?>"></div>
                            <div class="col-md-12 mt-2"><label class="labels">website</label><input name="website" type="website" class="form-control" placeholder="Enter Website" value="<?php echo $student["website"]; ?>"></div>
                            <div class="col-md-12 mt-2"><label class="labels">Skills</label><input name="skills" type="text" class="form-control" placeholder="Enter Your Skills" value="<?php echo $student["skills"]; ?>"></div>
                            <div class="col-md-12 mt-2"><label class="labels">Languages know</label><input name="languages" type="text" class="form-control" placeholder="Enter Languages Known" value="<?php echo $student["languages"]; ?>"></div>
                            <div class="mt-4 text-center" style="margin: auto;"><button class="btn btn-primary profile-button" type="submit" name="save_profile" value="save_profile">SAVE PROFILE</button>                        <button class="btn btn-success" name="save_exit" value="save_exit" type="submit"  >SAVE & EXIT</button>
</div>
                        </form>
                    </div>
                    <div class=" pt-5">
                        <div class="col-md-12 ">
                            <h4>Education</h4>
                        </div>
                        <?php
                        for ($i = 0; $i < sizeof($education); $i++) {
                            $ed = $education[$i];
                            echo '<div style="padding: 10px 15px;">
                                        <h5 style="margin: 0; font-weight: bold;">' . $ed["college_name"] . '</h5>
                                        <h6 style="margin: 0;">' . $ed["course"] . ' - ' . $ed["duration"] . '</h6>
                                        <p style="margin: 0; font-size: 12px">Score: ' . $ed["score"] . '</p>
                                      </div>';
                        }
                        ?>

                        <form action="" method="post">
                            <div class="col-md-12 mt-4"><label class="labels">College Name</label><input name="college_name" type="text" class="form-control" placeholder="Enter College Name" value=""></div>
                            <div class="col-md-12 mt-2"><label class="labels">Course</label><input name="course" type="text" class="form-control" placeholder="Enter Course" value=""></div>
                            <div class="col-md-12 mt-2"><label class="labels">Duration</label><input name="duration" type="text" class="form-control" placeholder="Enter Duration" value=""></div>
                            <div class="col-md-12 mt-2"><label class="labels">Score</label><input name="score" type="text" class="form-control" placeholder="Enter Score" value=""></div>
                            <div class="mt-4 text-center"><button class="btn btn-primary profile-button" type="submit" name="add_education" value="add_education">ADD</button></div>
                        </form>
                    </div>
                    <div class="pt-5 ">
                        <div class="col-md-12 ">
                            <h4>Experience</h4>
                        </div>
                        <?php
                        for ($i = 0; $i < sizeof($experience); $i++) {
                            $ex = $experience[$i];
                            echo '<div style="padding: 10px 15px;">
                                        <h5 style="margin: 0; font-weight: bold;">' . $ex["company_name"] . '</h5>
                                        <h6 style="margin: 0;">' . $ex["role"] . ' - ' . $ex["duration"] . '</h6>
                                        <p style="margin: 0; font-size: 12px">' . $ex["description"] . '</p>
                                      </div>';
                        }
                        ?>
                        <form action="" method="post">
                            <div class="col-md-12 mt-4"><label class="labels">Company Name</label><input type="text" class="form-control" name="company_name" placeholder="Enter companyname" value=""></div>
                            <div class="col-md-12 mt-2"><label class="labels">Role</label><input type="text" class="form-control" name="role" placeholder="Enter Role" value=""></div>
                            <div class="col-md-12 mt-2"><label class="labels">Duration</label><input type="text" class="form-control" name="duration" placeholder="Enter Duration" value=""></div>
                            <div class="col-md-12 mt-2"><label class="labels">Description</label><input type="text" class="form-control" name="description" placeholder="Enter Description" value=""></div>
                            <div class="mt-4 text-center "><button class="btn btn-primary profile-button" type="submit" name="add_experience" value="add_experience">ADD</button></div>
                        </form>
                    </div>
                    <div class="pt-5 ">
                        <div class="col-md-12 ">
                            <h4>Accomplishments</h4>
                        </div>
                        <?php
                        for ($i = 0; $i < sizeof($accomplishment); $i++) {
                            $ac = $accomplishment[$i];
                            echo '<div style="padding: 10px 15px;">
                                        <h5 style="margin: 0; font-weight: bold;">' . $ac["title"] . '</h5>
                                        <h6 style="margin: 0; font-size: 12px">' . $ac["date"] . '</h6>
                                        <p style="margin: 0; font-size: 12px">' . $ac["description"] . '</p>
                                      </div>';
                        }
                        ?>
                        <form action="" method="post">
                            <div class="col-md-12 mt-4"><label class="labels">Title</label><input type="text" class="form-control" name="title" placeholder="Enter title" value=""></div>
                            <div class="col-md-12 mt-2"><label class="labels">Description</label><input type="text" class="form-control" name="description" placeholder="Enter Description" value=""></div>
                            <div class="col-md-12 mt-2"><label class="labels">Date</label><input type="date" class="form-control" name="date" value=""></div>
                            <div class="mt-4 text-center "><button class="btn btn-primary profile-button" type="submit" name="add_accomplishment" value="add_accomplishment">ADD</button></div>
                        </form>
                    </div>
                    <div class="pt-5 ">
                        <div class="col-md-12 ">
                            <h4>Projects</h4>
                        </div>
                        <?php
                        for ($i = 0; $i < sizeof($project); $i++) {
                            $po = $project[$i];
                            echo '<div style="padding: 10px 15px;">
                                        <h5 style="margin: 0; font-weight: bold;">' . $po["title"] . '</h5>
                                        <p style="margin: 0; font-size: 12px">' . $po["description"] . '</p>
                                        <a href="' . $po["url"] . '" target="_blank" rel="noopener noreferrer">' . $po["url"] . '</a>
                                      </div>';
                        }
                        ?>
                        <form action="" method="post">
                            <div class="col-md-12 mt-4"><label class="labels">Title</label><input type="text" class="form-control" name="title" placeholder="Enter title" value=""></div>
                            <div class="col-md-12 mt-2"><label class="labels">Description</label><input type="text" class="form-control" name="description" placeholder="Enter Description" value=""></div>
                            <div class="col-md-12 mt-2"><label class="labels">Link</label><input type="text" class="form-control" name="url" placeholder="Enter Link" value=""></div>
                            <div class="mt-4 text-center "><button class="btn btn-primary profile-button" type="submit" name="add_project" value="add_project">ADD</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="p-3 pt-5">
                    <div class="col-md-12 ">
                        <h4>Change Password</h4>
                    </div>
                    <form action="" method="post">
                        <div class="col-md-12 mt-4"><label class="labels">Current Paassword</label><input name="current" type="password" class="form-control" placeholder="Enter Current Paassword" value=""></div>
                        <div class="col-md-12 mt-4"><label class="labels">New Paassword</label><input name="new" type="password" class="form-control" placeholder="Enter New Paassword" value=""></div>
                        <div class="mt-4 text-center"><button class="btn btn-primary profile-button" type="submit" name="reset_pass" value="reset_pass">Reset Paassword</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>