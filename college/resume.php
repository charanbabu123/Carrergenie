<?php
include("../includes/connect.php");
include("../includes/data.php");

$student = getById("students", $_GET["id"]);
$education = getWhere("educations", 'student_id=' . $_GET["id"]);
$experience = getWhere("experiences", 'student_id=' . $_GET["id"]);
$accomplishment = getWhere("accomplishments", 'student_id=' . $_GET["id"]);
$project = getWhere("projects", 'student_id=' . $_GET["id"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $student["name"]; ?>-Resume-By-Cosmos</title>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/resume-style.css">
  <style>
    @media print {
      body * {
        visibility: hidden;
      }

      #section-to-print,
      #section-to-print * {
        visibility: visible;
      }

      #section-to-print {
        position: absolute;
        left: 0;
        top: 0;
      }
    }
  </style>
</head>

<div class="container">
  <div id="section-to-print">
    <div class="header">
      <div class="full-name">
        <span class="first-name" style="line-height: 1;"><?php echo $student["name"]; ?></span>
      </div>
      <div class="contact-info">
        <span class="email">Email: </span>
        <span class="email-val"><?php echo $student["email_id"]; ?></span>
        <span class="separator"></span>
        <span class="phone">Phone: </span>
        <span class="phone-val"><?php echo $student["contact_number"]; ?></span>
        <span class="separator"></span>
        <span class="phone">Website: </span>
        <span class="phone-val"><?php echo $student["website"]; ?></span>
        <address> <?php echo $student["address"]; ?></address>
        <span class="email">Dob: </span>
        <span class="email-val"><?php echo $student["dob"]; ?></span>
      </div>

      <div class="about">
        <!-- <span class="position" style="text-decoration: none;">Bio: </span> -->
        <span class="desc">
          <?php echo $student["bio"]; ?> </span>
      </div>
    </div>
    <div class="details">
      <div class="section">
        <div class="section__title">Experience</div>
        <div class="section__list">
          <?php
          for ($i = 0; $i < sizeof($experience); $i++) {
            $item = $experience[$i];
            echo '<div class="section__list-item">
                    <div class="left">
                      <div class="name">' . $item["company_name"] . '</div>
                      <div class="addr">' . $item["description"] . '</div>
                      </div>
                      <div class="right">
                      <div class="name">' . $item["role"] . '</div>
                      <div class="duration">' . $item["duration"] . '</div>
                    </div>
                  </div>';
          }
          ?>
        </div>
      </div>
      <div class="section">
        <div class="section__title">Education</div>
        <div class="section__list">
        <?php
          for ($i = 0; $i < sizeof($education); $i++) {
            $item = $education[$i];
            echo '<div class="section__list-item">
                    <div class="left">
                      <div class="name">' . $item["college_name"] . '</div>
                      <div class="addr">' . $item["course"] . '</div>
                      </div>
                      <div class="right">
                      <div class="name">' . $item["score"] . '</div>
                      <div class="duration">' . $item["duration"] . '</div>
                    </div>
                  </div>';
          }
          ?>
        </div>
      </div>
      <div class="section">
        <div class="section__title">Projects</div>
        <div class="section__list">
          <?php
          for ($i=0; $i < sizeof($project); $i++) { 
            $item = $project[$i];
            echo '<div class="section__list-item">
            <div class="name">' . $item["title"] . '</div>
            <div class="text">'.$item["description"].'</div>
            <p> <span class="email">Link : </span>
            <span class="email-val"><a href="'.$item["url"].'" target="_blank">'.$item["url"].'</a></span>
            </p>
            </div>';
          }
          ?>
        </div>
      </div>
      <div class="section">
        <div class="section__title">Accomplishments</div>
        <div class="section__list">
        <?php
          for ($i=0; $i < sizeof($accomplishment); $i++) { 
            $item = $accomplishment[$i];
            echo '<div class="section__list-item">
            <div class="name">' . $item["title"] . '</div>
            <div class="text">'.$item["description"].'</div>
            <div class="duration">' . $item["date"] . '</div>
            </div>';
          }
          ?>
        </div>
      </div>
      <div class="section">
        <div class="section__title">Skills</div>
        <div class="skills">
          <div class="skills__item">
            <div class="left">
              <div class="name">
                <?php echo $student["skills"]; ?>
              </div>
            </div>

          </div>

        </div>
        <div class="skills__item">
          <div class="left">
            <div class="name">
            </div>
          </div>

        </div>

      </div>

    </div>
    <div class="section">
      <div class="section__title">Langauges Known</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="name"><?php echo $student["languages"]; ?></div>
        </div>
      </div>
    </div>
  </div>
</div>

</html>