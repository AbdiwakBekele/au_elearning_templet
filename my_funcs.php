<?php

$db = NULL;

//5542#UF;

function connect_db(){
	global $db;
	$db = mysqli_connect("localhost", "root", "", "au_elearning");
}

function close_db(){
	global $db;
	mysqli_close($db);
}

function strip_sql($s){
	global $db;
	return mysqli_escape_string($db, $s);
}

function data_exist($table, $cname, $rname){
	global $db;
	$r = $db->query("SELECT * FROM $table WHERE $cname = '". mysqli_real_escape_string($db, $rname)."'");
	return mysqli_num_rows($r) ? true : false;
}

function a_match($e, $password, $table){
	global $db;
	$ret = mysqli_fetch_assoc($db->query("SELECT * FROM $table WHERE email = '".mysqli_real_escape_string($db, $e)."'"));

	if(md5($password) == $ret["password"]){
        return $ret['ID'];
	}
	return 0;
}

function add_student($sid, $name, $gender, $email, $phone){
	global $db;
	$sid_s = strip_sql($sid);
	$fullname_s = strip_sql($name);
	$gender_s = strip_sql($gender);
	$email_s = strip_sql($email);
	$phone_s = strip_sql($phone);
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_"; // Generating Password
	$password = substr( str_shuffle( $chars ), 0, 8 );
	$result = $db->query("INSERT INTO student (student_id, full_name, gender, email, phone, password) VALUES ('$sid_s', '$fullname_s','$gender_s', '$email_s', '$phone_s', '$password')");

	if($result){
		return $db->insert_id;
	}
	return 0;
}

function add_teacher($name, $email, $image=NULL){
	global $db;
	$fullname_s = strip_sql($name);
	$email_s = strip_sql($email);
	$result = $db->query("INSERT INTO teacher (name, email) VALUES ('$fullname_s', '$email_s')");
	if($result)
		return $db->insert_id;
	return 0;
}


?>