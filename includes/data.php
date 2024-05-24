<?php
function mysqli_result($res, $row = 0, $col = 0)
{
	$numrows = mysqli_num_rows($res);
	if ($numrows && $row <= ($numrows - 1) && $row >= 0) {
		mysqli_data_seek($res, $row);
		$response_row = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
		if (isset($response_row[$col])) {
			return $response_row[$col];
		}
	}
	return false;
}

function qSELECT($query, $object = NULL)
{
	global $link;
	$result = mysqli_query($link, $query);
	$return = [];
	if ($result) {
		$num = mysqli_num_rows($result);
		for ($i = 0; $i < $num; $i++) {
			if (!is_null($object)) {
				$row = mysqli_fetch_object($result, MYSQLI_ASSOC);
			} else {
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			}
			$return[$i] = $row;
		}
	}
	return $return;
}

function counting($table, $what)
{
	global $link;
	$query = "SELECT COUNT(1) FROM " . $table;
	$result = mysqli_query($link, $query);
	$num = mysqli_result($result, 0, 0);
	return $num;
}

function getById($table, $id)
{
	$query = "SELECT * FROM " . $table . " WHERE id=" . $id . " ";
	$result = qSELECT($query);
	if ($result) return $result[0];
	else return $result;
}

function getAll($table)
{
	$query = "SELECT * FROM " . $table;
	$result = qSELECT($query);
	return $result;
}

function getWhere($table, $where)
{
	$query = "SELECT * FROM " . $table . " WHERE " . $where;
	$result = qSELECT($query);
	return $result;
}

function queryToSelect($table, $where, $operator, $zero_value, $key, $value, $id)
{
	$ul = '<option value="' . $zero_value . '">Please select</option>';

	$query = "SELECT * FROM " . $table . " WHERE `" . $where . "` " . $operator . " " . $zero_value . " ";
	$result = qSELECT($query);
	foreach ($result as $row) {
		$ul .= '<option value="' . $row[$key] . '" ';
		$ul .= $id == $row[$key] ? "selected" : "";
		$ul .= '>' . $row[$value] . '</option>';
	}
	return $ul;
}

function education($act, $id, $args)
{
	global $link;
	$student_id = addslashes(htmlentities($args["student_id"], ENT_QUOTES));
	$college_name = addslashes(htmlentities($args["college_name"], ENT_QUOTES));
	$course = addslashes(htmlentities($args["course"], ENT_QUOTES));
	$duration = addslashes(htmlentities($args["duration"], ENT_QUOTES));
	$score = addslashes(htmlentities($args["score"], ENT_QUOTES));
	$status = addslashes(htmlentities($args["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($args["created_at"], ENT_QUOTES));

	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `educations` (  `student_id` , `college_name` , `course` , `duration` , `score` , `status` , `created_at` ) VALUES ( '" . $student_id . "' , '" . $college_name . "' , '" . $course . "' , '" . $duration . "' , '" . $score . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `educations` SET  `student_id` =  '" . $student_id . "' , `college_name` =  '" . $college_name . "' , `course` =  '" . $course . "' , `duration` =  '" . $duration . "' , `score` =  '" . $score . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act == "delete") {
		mysqli_query($link, "DELETE FROM `educations` WHERE id = '" . $id . "' ");
	}
}


function experience($act, $id, $args)
{
	global $link;
	$student_id = addslashes(htmlentities($args["student_id"], ENT_QUOTES));
	$company_name = addslashes(htmlentities($args["company_name"], ENT_QUOTES));
	$role = addslashes(htmlentities($args["role"], ENT_QUOTES));
	$duration = addslashes(htmlentities($args["duration"], ENT_QUOTES));
	$description = addslashes(htmlentities($args["description"], ENT_QUOTES));
	$status = addslashes(htmlentities($args["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($args["created_at"], ENT_QUOTES));

	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `experiences` (  `student_id` , `company_name` , `role` , `duration` , `description` , `status` , `created_at` ) VALUES ( '" . $student_id . "' , '" . $company_name . "' , '" . $role . "' , '" . $duration . "' , '" . $description . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `experiences` SET  `student_id` =  '" . $student_id . "' , `company_name` =  '" . $company_name . "' , `role` =  '" . $role . "' , `duration` =  '" . $duration . "' , `description` =  '" . $description . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act == "delete") {
		mysqli_query($link, "DELETE FROM `experiences` WHERE id = '" . $id . "' ");
	}
}

function accomplishment($act, $id, $args)
{
	global $link;
	$student_id = addslashes(htmlentities($args["student_id"], ENT_QUOTES));
	$title = addslashes(htmlentities($args["title"], ENT_QUOTES));
	$description = addslashes(htmlentities($args["description"], ENT_QUOTES));
	$date = addslashes(htmlentities($args["date"], ENT_QUOTES));
	$status = addslashes(htmlentities($args["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($args["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `accomplishments` (  `student_id` , `title` , `description` , `date` , `status` , `created_at` ) VALUES ( '" . $student_id . "' , '" . $title . "' , '" . $description . "' , '" . $date . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `accomplishments` SET  `student_id` =  '" . $student_id . "' , `title` =  '" . $title . "' , `description` =  '" . $description . "' , `date` =  '" . $date . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act == "delete") {
		mysqli_query($link, "DELETE FROM `accomplishments` WHERE id = '" . $id . "' ");
	}
}

function project($act, $id, $args)
{
	global $link;
	$student_id = addslashes(htmlentities($args["student_id"], ENT_QUOTES));
	$title = addslashes(htmlentities($args["title"], ENT_QUOTES));
	$description = addslashes(htmlentities($args["description"], ENT_QUOTES));
	$url = addslashes(htmlentities($args["url"], ENT_QUOTES));
	$status = addslashes(htmlentities($args["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($args["created_at"], ENT_QUOTES));

	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `projects` (  `student_id` , `title` , `description` , `url` , `status` , `created_at` ) VALUES ( '" . $student_id . "' , '" . $title . "' , '" . $description . "' , '" . $url . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `projects` SET  `student_id` =  '" . $student_id . "' , `title` =  '" . $title . "' , `description` =  '" . $description . "' , `url` =  '" . $url . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act == "delete") {
		mysqli_query($link, "DELETE FROM `projects` WHERE id = '" . $id . "' ");
	}
}

function college($act, $id, $args)
{
	global $link;
	$name = addslashes(htmlentities($args["name"], ENT_QUOTES));
	$profile_photo = addslashes(htmlentities($args["profile_photo"], ENT_QUOTES));
	$email_id = addslashes(htmlentities($args["email_id"], ENT_QUOTES));
	$contact_number = addslashes(htmlentities($args["contact_number"], ENT_QUOTES));
	$password = addslashes(htmlentities($args["password"], ENT_QUOTES));
	$address = addslashes(htmlentities($args["address"], ENT_QUOTES));
	$website = addslashes(htmlentities($args["website"], ENT_QUOTES));
	$about_us = addslashes(htmlentities($args["about_us"], ENT_QUOTES));
	$status = addslashes(htmlentities($args["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($args["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `colleges` (  `name` , `profile_photo` , `email_id` , `contact_number` , `password` , `address` , `website` , `about_us` , `status` , `created_at` ) VALUES ( '" . $name . "' , '" . $profile_photo . "' , '" . $email_id . "' , '" . $contact_number . "' , '" . md5($password) . "', '" . $address . "' , '" . $website . "' , '" . $about_us . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `colleges` SET  `name` =  '" . $name . "' , `profile_photo` =  '" . $profile_photo . "' , `email_id` =  '" . $email_id . "' , `contact_number` =  '" . $contact_number . "' , `address` =  '" . $address . "' , `website` =  '" . $website . "' , `about_us` =  '" . $about_us . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act == "delete") {
		mysqli_query($link, "DELETE FROM `colleges` WHERE id = '" . $id . "' ");
	}
}

function job($act, $id, $args)
{
	global $link;
	$recruiter_id = addslashes(htmlentities($args["recruiter_id"], ENT_QUOTES));
	$title = addslashes(htmlentities($args["title"], ENT_QUOTES));
	$role = addslashes(htmlentities($args["role"], ENT_QUOTES));
	$description = addslashes(htmlentities($args["description"], ENT_QUOTES));
	$ctc = addslashes(htmlentities($args["ctc"], ENT_QUOTES));
	$elegibility = addslashes(htmlentities($args["elegibility"], ENT_QUOTES));
	$skills_required = addslashes(htmlentities($args["skills_required"], ENT_QUOTES));
	$experience = addslashes(htmlentities($args["experience"], ENT_QUOTES));
	$course = addslashes(htmlentities($args["course"], ENT_QUOTES));
	$status = addslashes(htmlentities($args["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($args["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `jobs` (  `recruiter_id` , `title` , `role` , `description` , `ctc` , `elegibility` , `skills_required` , `experience` , `course` , `status` , `created_at` ) VALUES ( '" . $recruiter_id . "' , '" . $title . "' , '" . $role . "' , '" . $description . "' , '" . $ctc . "' , '" . $elegibility . "' , '" . $skills_required . "' , '" . $experience . "' , '" . $course . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `jobs` SET  `recruiter_id` =  '" . $recruiter_id . "' , `title` =  '" . $title . "' , `role` =  '" . $role . "' , `description` =  '" . $description . "' , `ctc` =  '" . $ctc . "' , `elegibility` =  '" . $elegibility . "' , `skills_required` =  '" . $skills_required . "' , `experience` =  '" . $experience . "' , `course` =  '" . $course . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act == "delete") {
		mysqli_query($link, "DELETE FROM `jobs` WHERE id = '" . $id . "' ");
	}
}

function recruiter($act, $id, $args)
{
	global $link;
	$name = addslashes(htmlentities($args["name"], ENT_QUOTES));
	$profilephoto = addslashes(htmlentities($args["profilephoto"], ENT_QUOTES));
	$email_id = addslashes(htmlentities($args["email_id"], ENT_QUOTES));
	$contact_number = addslashes(htmlentities($args["contact_number"], ENT_QUOTES));
	$password = addslashes(htmlentities($args["password"], ENT_QUOTES));
	$website = addslashes(htmlentities($args["website"], ENT_QUOTES));
	$address = addslashes(htmlentities($args["address"], ENT_QUOTES));
	$description = addslashes(htmlentities($args["description"], ENT_QUOTES));
	$status = addslashes(htmlentities($args["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($args["created_at"], ENT_QUOTES));

	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `recruiters` (  `name` , `profilephoto` , `email_id` , `contact_number` , `password` , `website` , `address` , `description` , `status` , `created_at` ) VALUES ( '" . $name . "' , '" . $profilephoto . "' , '" . $email_id . "' , '" . $contact_number . "' , '" . md5($password) . "', '" . $website . "' , '" . $address . "' , '" . $description . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `recruiters` SET  `name` =  '" . $name . "' , `profilephoto` =  '" . $profilephoto . "' , `email_id` =  '" . $email_id . "' , `contact_number` =  '" . $contact_number . "' , `website` =  '" . $website . "' , `address` =  '" . $address . "' , `description` =  '" . $description . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act == "delete") {
		mysqli_query($link, "DELETE FROM `recruiters` WHERE id = '" . $id . "' ");
	}
}

function student($act, $id, $args)
{
	global $link;
	$name = addslashes(htmlentities($args["name"], ENT_QUOTES));
	$profile_photo = addslashes(htmlentities($args["profile_photo"], ENT_QUOTES));
	$email_id = addslashes(htmlentities($args["email_id"], ENT_QUOTES));
	$contact_number = addslashes(htmlentities($args["contact_number"], ENT_QUOTES));
	$password = addslashes(htmlentities($args["password"], ENT_QUOTES));
	$college_id = addslashes(htmlentities($args["college_id"], ENT_QUOTES));
	$dob = addslashes(htmlentities($args["dob"], ENT_QUOTES));
	$bio = addslashes(htmlentities($args["bio"], ENT_QUOTES));
	$address = addslashes(htmlentities($args["address"], ENT_QUOTES));
	$website = addslashes(htmlentities($args["website"], ENT_QUOTES));
	$skills = addslashes(htmlentities($args["skills"], ENT_QUOTES));
	$languages = addslashes(htmlentities($args["languages"], ENT_QUOTES));
	$status = addslashes(htmlentities($args["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($args["created_at"], ENT_QUOTES));


	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `students` (  `name` , `profile_photo` , `email_id` , `contact_number` , `password` , `college_id` , `dob` , `bio` , `address` , `website` , `skills` , `languages` , `status` , `created_at` ) VALUES ( '" . $name . "' , '" . $profile_photo . "' , '" . $email_id . "' , '" . $contact_number . "' , '" . md5($password) . "', '" . $college_id . "' , '" . $dob . "' , '" . $bio . "' , '" . $address . "' , '" . $website . "' , '" . $skills . "' , '" . $languages . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `students` SET  `name` =  '" . $name . "' , `profile_photo` =  '" . $profile_photo . "' , `email_id` =  '" . $email_id . "' , `contact_number` =  '" . $contact_number . "' , `college_id` =  '" . $college_id . "' , `dob` =  '" . $dob . "' , `bio` =  '" . $bio . "' , `address` =  '" . $address . "' , `website` =  '" . $website . "' , `skills` =  '" . $skills . "' , `languages` =  '" . $languages . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act == "delete") {
		mysqli_query($link, "DELETE FROM `students` WHERE id = '" . $id . "' ");
	}
}

function tests_attempted($act, $id, $args)
{
	global $link;
	$test_id = addslashes(htmlentities($args["test_id"], ENT_QUOTES));
	$student_id = addslashes(htmlentities($args["student_id"], ENT_QUOTES));
	$percentage = addslashes(htmlentities($args["percentage"], ENT_QUOTES));
	$status = addslashes(htmlentities($args["status"], ENT_QUOTES));
	$created_at = addslashes(htmlentities($args["created_at"], ENT_QUOTES));

	if ($act == "add") {
		mysqli_query($link, "INSERT INTO `tests_attempted` (  `test_id` , `student_id` , `percentage` , `status` , `created_at` ) VALUES ( '" . $test_id . "' , '" . $student_id . "' , '" . $percentage . "' , '" . $status . "' , '" . $created_at . "' ) ");
	} elseif ($act == "edit") {
		mysqli_query($link, "UPDATE `tests_attempted` SET  `test_id` =  '" . $test_id . "' , `student_id` =  '" . $student_id . "' , `percentage` =  '" . $percentage . "' , `status` =  '" . $status . "' , `created_at` =  '" . $created_at . "'  WHERE `id` = '" . $id . "' ");
	} elseif ($act == "delete") {
		mysqli_query($link, "DELETE FROM `tests_attempted` WHERE id = '" . $id . "' ");
	}
}

function resetPassword($table, $id, $password)
{
	global $link;
	mysqli_query($link, "UPDATE `".$table."` SET  `password` =  '" . $password . "' WHERE `id` = '" . $id . "' ");
}

function uploadImage($tempname, $filename)
{	
	if (move_uploaded_file($tempname, "../uploads/${filename}")) {
		return true;
	} else {
		return false;
	}
}
