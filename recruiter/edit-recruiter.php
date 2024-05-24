<?php
include("../includes/connect.php");
include("../includes/data.php");
session_start();
if (!isset($_SESSION["recruiter_id"])) {
    header("Location: ./authentication.php");
    die();
}

$recruiter = getById("recruiters", $_SESSION["recruiter_id"]);

if (isset($_POST["edit_recruiter"])) {
    $args["name"] = $_POST["name"];
    $name = $_POST['name'];
    $valid = true;
    $args["profilephoto"] = $recruiter["profilephoto"];
    $args["email_id"] = $_POST["email_id"];
    $args["contact_number"] = $_POST["contact_number"];
    $contact = $_POST["contact_number"];
    $args["password"] = "";
    $args["website"] = $_POST["website"];
    $args["address"] = $_POST["address"];
    $args["description"] = $_POST["description"];
    $args["status"] = 1;
    $args["created_at"] = null;
    if ($valid) {

        recruiter("edit", $_SESSION["recruiter_id"], $args);
    }
}

if (isset($_POST["save_exit"])) {
    header("location: index.php");
}


if (isset($_FILES["new_profile_photo"])) {
    $img = $_FILES["new_profile_photo"];
    $ext = pathinfo($img["name"]);
    $filename = $recruiter["id"] . '.' . $ext['extension'];
    if (uploadImage($img["tmp_name"], $filename)) {
        $recruiter["profilephoto"] = "/uploads/${filename}";
        recruiter("edit", $recruiter["id"], $recruiter);
    }
}

if (isset($_POST["reset_pass"])) {
    if ($recruiter["password"] == md5($_POST["current"])) {
        resetPassword("recruiters", $recruiter["id"], md5($_POST["new"]));
    } else {
        echo '<script>alert("Sorry! Current Password Is Invalid.");</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $recruiter["name"] ?> | Profile-edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/edit-recruiter.css">
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5" style="padding-bottom: 10px !important;">
                    <img class="rounded-circle  mt-5" src="..<?php echo $recruiter["profilephoto"]; ?>" style="max-height: 200px; max-width: 200px; margin-bottom: 10px;">
                    <span class="font-weight-bold"><?php echo $recruiter["name"]; ?></span>
                    <span class="text-black-50  text-muted"><?php echo $recruiter["email_id"]; ?></span>
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
                            <div class="col-md-12"><label class="labels">Company Name</label><input name="name" id="fname" type="text" class="form-control" placeholder="enter fullname" value="<?php echo $recruiter["name"] ?>"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 mt-2"><label class="labels">Email ID</label><input name="email_id" type="email" class="form-control" placeholder="enter email id" value="<?php echo $recruiter["email_id"] ?>"></div>
                            <div class="col-md-12 mt-2"><label class="labels">Contact Number</label><input name="contact_number" id="contact_number" type="text" class="form-control" placeholder="enter contact number" value="<?php echo $recruiter["contact_number"] ?>"></div>
                            <div class="col-md-12 mt-2"><label class="labels">website</label><input name="website" type="text" class="form-control" placeholder="enter website" value="<?php echo $recruiter["website"] ?>"></div>
                            <div class="col-md-12 mt-2"><label class="labels">Address</label><input type="text" name="address" id="" placeholder="Address" class="form-control" cols="30" rows="5" value="<?php echo $recruiter["address"] ?>"></div>
                            <div class="col-md-12 mt-2"><label class="labels">About us</label><textarea name="description" id="" placeholder="Description" class="form-control" cols="30" rows="5"><?php echo $recruiter["description"] ?></textarea></div>
                        </div>
                        <div class="mt-4 text-center"><button class="btn btn-primary profile-button" name="edit_recruiter" value="edit_recruiter" type="submit">Save Profile</button>
                            <button class="btn btn-success" name="save_exit" value="save_exit" type="submit">SAVE & EXIT</button>
                        </div>
                    </form>
                </div>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>