<?php

include("../includes/connect.php");
include("../includes/data.php");
session_start();
if (!isset($_SESSION["college_id"])) {
    header("Location: ./authentication.php");
    die();
}

$college = getById("colleges", $_SESSION["college_id"]);

if (isset($_POST["edit_college"])) {
    $args["name"] = $_POST["name"];
    $valid=true;
    $args["profile_photo"] = $college["profile_photo"];
    $args["email_id"] = $_POST["email_id"];
    $args["contact_number"] = $_POST["contact_number"];
    $args["password"] = "";
    $args["website"] = $_POST["website"];
    $args["address"] = $_POST["address"];
    $args["about_us"] = $_POST["about_us"];
    $args["status"] = 1;
    $args["created_at"] = null;
    if($valid){

        college("edit", $_SESSION["college_id"], $args);
    }
}
if (isset($_FILES["new_profile_photo"])) {
    $img = $_FILES["new_profile_photo"];
    $ext = pathinfo($img["name"]);
    $filename = $college["id"] . '.' . $ext['extension'];
    if (uploadImage($img["tmp_name"], $filename)) {
        $college["profile_photo"] = "/uploads/${filename}";
        college("edit", $college["id"], $college);
    }
}

if (isset($_POST["reset_pass"])) {
    if ($college["password"] == md5($_POST["current"])) {
        resetPassword("colleges", $college["id"], md5($_POST["new"]));
    } else {
        echo '<script>alert("Sorry! Current Password Is Invalid.");</script>';
    }
}

if (isset($_POST["save_exit"])) {
    header("location: index.php");
}
$college = getById("colleges", $_SESSION["college_id"]);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>college</title>
    <link rel="stylesheet" href="    https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="../css/edit-college.css">
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5" style="padding-bottom: 10px !important;">
                    <img class="rounded-circle  mt-5" src="..<?php echo $college["profile_photo"]; ?>" style="max-height: 200px; max-width: 200px; margin-bottom: 10px;">
                    <span class="font-weight-bold"><?php echo $college["name"]; ?></span>
                    <span class="text-black-50  text-muted"><?php echo $college["email_id"]; ?></span>
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
                    <form action="" method="post">
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">College Name</label><input name="name" type="text" class="form-control" placeholder="enter Collegename" value="<?php echo $college['name'] ?>"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 mt-2"><label class="labels">Email ID</label><input name="email_id" type="text" class="form-control" placeholder="enter email id" value="<?php echo $college['email_id'] ?>"></div>
                            <div class="col-md-12 mt-2"><label class="labels">ContactNumber</label><input name="contact_number" type="tel" class="form-control" placeholder="enter contact number" value="<?php echo $college['contact_number'] ?>"></div>
                            <div class="col-md-12 mt-2"><label class="labels">Address</label><input name="address" type="text" class="form-control" placeholder="enter address" value="<?php echo $college['address'] ?>"></div>
                            <div class="col-md-12 mt-2"><label class="labels">About us</label><textarea name="about_us" name="" id="" placeholder="enter About us" class="form-control" cols="30" rows="5"><?php echo $college['about_us'] ?></textarea>
                            </div>
                            <div class="col-md-12 mt-2"><label class="labels">website</label><input name="website" type="text" class="form-control" placeholder="enter website" value="<?php echo $college['website'] ?>"></div>

                        </div>
                        <div class="mt-4 text-center"><button class="btn btn-primary profile-button" value="edit_college" name="edit_college" type="submit">Save Profile</button>
                        <button class="btn btn-success" name="save_exit" value="save_exit" type="submit"  >SAVE & EXIT</button>

                    </div>

                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 pt-5">
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