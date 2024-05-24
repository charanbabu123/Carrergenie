<?php
include("../includes/connect.php");

$cat = $_POST['cat'];
$cat_get = $_GET['cat'];
$act = $_POST['act'];
$act_get = $_GET['act'];
$id = $_POST['id'];
$id_get = $_GET['id'];


if ($cat == "accomplishments" || $cat_get == "accomplishments") {
	$student_id = addslashes(htmlentities($_POST["student_id"], ENT_QUOTES));
	$title = addslashes(htmlentities($_POST["title"], ENT_QUOTES));
	$description = addslashes(htmlentities($_POST["description"], ENT_QUOTES));
	$date = addslashes(htmlentities($_POST["date"], ENT_QUOTES));
	$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($_POST["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `accomplishments` (  `student_id` , `title` , `description` , `date` , `status` , `created_at` ) VALUES ( '" . $student_id . "' , '" . $title . "' , '" . $description . "' , '" . $date . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `accomplishments` SET  `student_id` =  '" . $student_id . "' , `title` =  '" . $title . "' , `description` =  '" . $description . "' , `date` =  '" . $date . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `accomplishments` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "accomplishments.php");
}

if ($cat == "colleges" || $cat_get == "colleges") {
	$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
	$profile_photo = addslashes(htmlentities($_POST["profile_photo"], ENT_QUOTES));
	$email_id = addslashes(htmlentities($_POST["email_id"], ENT_QUOTES));
	$contact_number = addslashes(htmlentities($_POST["contact_number"], ENT_QUOTES));
	$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
	$address = addslashes(htmlentities($_POST["address"], ENT_QUOTES));
	$website = addslashes(htmlentities($_POST["website"], ENT_QUOTES));
	$about_us = addslashes(htmlentities($_POST["about_us"], ENT_QUOTES));
	$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($_POST["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `colleges` (  `name` , `profile_photo` , `email_id` , `contact_number` , `password` , `address` , `website` , `about_us` , `status` , `created_at` ) VALUES ( '" . $name . "' , '" . $profile_photo . "' , '" . $email_id . "' , '" . $contact_number . "' , '" . md5($password) . "', '" . $address . "' , '" . $website . "' , '" . $about_us . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `colleges` SET  `name` =  '" . $name . "' , `profile_photo` =  '" . $profile_photo . "' , `email_id` =  '" . $email_id . "' , `contact_number` =  '" . $contact_number . "' , `address` =  '" . $address . "' , `website` =  '" . $website . "' , `about_us` =  '" . $about_us . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `colleges` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "colleges.php");
}

if ($cat == "educations" || $cat_get == "educations") {
	$student_id = addslashes(htmlentities($_POST["student_id"], ENT_QUOTES));
	$college_name = addslashes(htmlentities($_POST["college_name"], ENT_QUOTES));
	$course = addslashes(htmlentities($_POST["course"], ENT_QUOTES));
	$duration = addslashes(htmlentities($_POST["duration"], ENT_QUOTES));
	$score = addslashes(htmlentities($_POST["score"], ENT_QUOTES));
	$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($_POST["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `educations` (  `student_id` , `college_name` , `course` , `duration` , `score` , `status` , `created_at` ) VALUES ( '" . $student_id . "' , '" . $college_name . "' , '" . $course . "' , '" . $duration . "' , '" . $score . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `educations` SET  `student_id` =  '" . $student_id . "' , `college_name` =  '" . $college_name . "' , `course` =  '" . $course . "' , `duration` =  '" . $duration . "' , `score` =  '" . $score . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `educations` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "educations.php");
}

if ($cat == "experiences" || $cat_get == "experiences") {
	$student_id = addslashes(htmlentities($_POST["student_id"], ENT_QUOTES));
	$company_name = addslashes(htmlentities($_POST["company_name"], ENT_QUOTES));
	$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));
	$duration = addslashes(htmlentities($_POST["duration"], ENT_QUOTES));
	$description = addslashes(htmlentities($_POST["description"], ENT_QUOTES));
	$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($_POST["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `experiences` (  `student_id` , `company_name` , `role` , `duration` , `description` , `status` , `created_at` ) VALUES ( '" . $student_id . "' , '" . $company_name . "' , '" . $role . "' , '" . $duration . "' , '" . $description . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `experiences` SET  `student_id` =  '" . $student_id . "' , `company_name` =  '" . $company_name . "' , `role` =  '" . $role . "' , `duration` =  '" . $duration . "' , `description` =  '" . $description . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `experiences` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "experiences.php");
}

if ($cat == "jobs" || $cat_get == "jobs") {
	$recruiter_id = addslashes(htmlentities($_POST["recruiter_id"], ENT_QUOTES));
	$title = addslashes(htmlentities($_POST["title"], ENT_QUOTES));
	$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));
	$description = addslashes(htmlentities($_POST["description"], ENT_QUOTES));
	$ctc = addslashes(htmlentities($_POST["ctc"], ENT_QUOTES));
	$elegibility = addslashes(htmlentities($_POST["elegibility"], ENT_QUOTES));
	$skills_required = addslashes(htmlentities($_POST["skills_required"], ENT_QUOTES));
	$experience = addslashes(htmlentities($_POST["experience"], ENT_QUOTES));
	$course = addslashes(htmlentities($_POST["course"], ENT_QUOTES));
	$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($_POST["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `jobs` (  `recruiter_id` , `title` , `role` , `description` , `ctc` , `elegibility` , `skills_required` , `experience` , `course` , `status` , `created_at` ) VALUES ( '" . $recruiter_id . "' , '" . $title . "' , '" . $role . "' , '" . $description . "' , '" . $ctc . "' , '" . $elegibility . "' , '" . $skills_required . "' , '" . $experience . "' , '" . $course . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `jobs` SET  `recruiter_id` =  '" . $recruiter_id . "' , `title` =  '" . $title . "' , `role` =  '" . $role . "' , `description` =  '" . $description . "' , `ctc` =  '" . $ctc . "' , `elegibility` =  '" . $elegibility . "' , `skills_required` =  '" . $skills_required . "' , `experience` =  '" . $experience . "' , `course` =  '" . $course . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `jobs` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "jobs.php");
}

if ($cat == "projects" || $cat_get == "projects") {
	$student_id = addslashes(htmlentities($_POST["student_id"], ENT_QUOTES));
	$title = addslashes(htmlentities($_POST["title"], ENT_QUOTES));
	$description = addslashes(htmlentities($_POST["description"], ENT_QUOTES));
	$url = addslashes(htmlentities($_POST["url"], ENT_QUOTES));
	$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($_POST["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `projects` (  `student_id` , `title` , `description` , `url` , `status` , `created_at` ) VALUES ( '" . $student_id . "' , '" . $title . "' , '" . $description . "' , '" . $url . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `projects` SET  `student_id` =  '" . $student_id . "' , `title` =  '" . $title . "' , `description` =  '" . $description . "' , `url` =  '" . $url . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `projects` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "projects.php");
}

if ($cat == "questions" || $cat_get == "questions") {
	$test_id = addslashes(htmlentities($_POST["test_id"], ENT_QUOTES));
	$question_name = addslashes(htmlentities($_POST["question_name"], ENT_QUOTES));
	$option_1 = addslashes(htmlentities($_POST["option_1"], ENT_QUOTES));
	$option_2 = addslashes(htmlentities($_POST["option_2"], ENT_QUOTES));
	$option_3 = addslashes(htmlentities($_POST["option_3"], ENT_QUOTES));
	$option_4 = addslashes(htmlentities($_POST["option_4"], ENT_QUOTES));
	$correct_option = addslashes(htmlentities($_POST["correct_option"], ENT_QUOTES));
	$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($_POST["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `questions` (  `test_id` , `question_name` , `option_1` , `option_2` , `option_3` , `option_4` , `correct_option` , `status` , `created_at` ) VALUES ( '" . $test_id . "' , '" . $question_name . "' , '" . $option_1 . "' , '" . $option_2 . "' , '" . $option_3 . "' , '" . $option_4 . "' , '" . $correct_option . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `questions` SET  `test_id` =  '" . $test_id . "' , `question_name` =  '" . $question_name . "' , `option_1` =  '" . $option_1 . "' , `option_2` =  '" . $option_2 . "' , `option_3` =  '" . $option_3 . "' , `option_4` =  '" . $option_4 . "' , `correct_option` =  '" . $correct_option . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `questions` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "questions.php");
}

if ($cat == "recruiters" || $cat_get == "recruiters") {
	$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
	$profilephoto = addslashes(htmlentities($_POST["profilephoto"], ENT_QUOTES));
	$email_id = addslashes(htmlentities($_POST["email_id"], ENT_QUOTES));
	$contact_number = addslashes(htmlentities($_POST["contact_number"], ENT_QUOTES));
	$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
	$website = addslashes(htmlentities($_POST["website"], ENT_QUOTES));
	$address = addslashes(htmlentities($_POST["address"], ENT_QUOTES));
	$description = addslashes(htmlentities($_POST["description"], ENT_QUOTES));
	$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($_POST["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `recruiters` (  `name` , `profilephoto` , `email_id` , `contact_number` , `password` , `website` , `address` , `description` , `status` , `created_at` ) VALUES ( '" . $name . "' , '" . $profilephoto . "' , '" . $email_id . "' , '" . $contact_number . "' , '" . md5($password) . "', '" . $website . "' , '" . $address . "' , '" . $description . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `recruiters` SET  `name` =  '" . $name . "' , `profilephoto` =  '" . $profilephoto . "' , `email_id` =  '" . $email_id . "' , `contact_number` =  '" . $contact_number . "' , `website` =  '" . $website . "' , `address` =  '" . $address . "' , `description` =  '" . $description . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `recruiters` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "recruiters.php");
}

if ($cat == "students" || $cat_get == "students") {
	$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
	$profile_photo = addslashes(htmlentities($_POST["profile_photo"], ENT_QUOTES));
	$email_id = addslashes(htmlentities($_POST["email_id"], ENT_QUOTES));
	$contact_number = addslashes(htmlentities($_POST["contact_number"], ENT_QUOTES));
	$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
	$college_id = addslashes(htmlentities($_POST["college_id"], ENT_QUOTES));
	$dob = addslashes(htmlentities($_POST["dob"], ENT_QUOTES));
	$bio = addslashes(htmlentities($_POST["bio"], ENT_QUOTES));
	$address = addslashes(htmlentities($_POST["address"], ENT_QUOTES));
	$website = addslashes(htmlentities($_POST["website"], ENT_QUOTES));
	$skills = addslashes(htmlentities($_POST["skills"], ENT_QUOTES));
	$languages = addslashes(htmlentities($_POST["languages"], ENT_QUOTES));
	$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($_POST["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `students` (  `name` , `profile_photo` , `email_id` , `contact_number` , `password` , `college_id` , `dob` , `bio` , `address` , `website` , `skills` , `languages` , `status` , `created_at` ) VALUES ( '" . $name . "' , '" . $profile_photo . "' , '" . $email_id . "' , '" . $contact_number . "' , '" . md5($password) . "', '" . $college_id . "' , '" . $dob . "' , '" . $bio . "' , '" . $address . "' , '" . $website . "' , '" . $skills . "' , '" . $languages . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `students` SET  `name` =  '" . $name . "' , `profile_photo` =  '" . $profile_photo . "' , `email_id` =  '" . $email_id . "' , `contact_number` =  '" . $contact_number . "' , `college_id` =  '" . $college_id . "' , `dob` =  '" . $dob . "' , `bio` =  '" . $bio . "' , `address` =  '" . $address . "' , `website` =  '" . $website . "' , `skills` =  '" . $skills . "' , `languages` =  '" . $languages . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `students` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "students.php");
}

if ($cat == "tests" || $cat_get == "tests") {
	$test_name = addslashes(htmlentities($_POST["test_name"], ENT_QUOTES));
	$description = addslashes(htmlentities($_POST["description"], ENT_QUOTES));
	$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($_POST["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `tests` (  `test_name` , `description` , `status` , `created_at` ) VALUES ( '" . $test_name . "' , '" . $description . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `tests` SET  `test_name` =  '" . $test_name . "' , `description` =  '" . $description . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `tests` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "tests.php");
}

if ($cat == "tests_attempted" || $cat_get == "tests_attempted") {
	$test_id = addslashes(htmlentities($_POST["test_id"], ENT_QUOTES));
	$student_id = addslashes(htmlentities($_POST["student_id"], ENT_QUOTES));
	$percentage = addslashes(htmlentities($_POST["percentage"], ENT_QUOTES));
	$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($_POST["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `tests_attempted` (  `test_id` , `student_id` , `percentage` , `status` , `created_at` ) VALUES ( '" . $test_id . "' , '" . $student_id . "' , '" . $percentage . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `tests_attempted` SET  `test_id` =  '" . $test_id . "' , `student_id` =  '" . $student_id . "' , `percentage` =  '" . $percentage . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `tests_attempted` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "tests_attempted.php");
}

if ($cat == "users" || $cat_get == "users") {
	$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
	$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
	$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
	$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `users` (  `name` , `email` , `password` , `role` ) VALUES ( '" . $name . "' , '" . $email . "' , '" . md5($password) . "', '" . $role . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `users` SET  `name` =  '" . $name . "' , `email` =  '" . $email . "' , `role` =  '" . $role . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act_get == "delete") {
		mysqli_query($link, "DELETE FROM `users` WHERE id = '" . $id_get . "' ");
	}
	header("location:" . "users.php");
}
