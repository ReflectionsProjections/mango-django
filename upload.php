<?php

require_once('dbconnect.php');
$mysqli = new mysqli($db_host,$db_user,$db_pass, $db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL";
}

$firstname = $mysqli->real_escape_string($_POST['firstname']);
$lastname = $mysqli->real_escape_string($_POST['lastname']);
$netid = $mysqli->real_escape_string($_POST['netid']);
$data = addslashes(fread(fopen($form_data, "r"), filesize($form_data)));

$mysqli->query("INSERT INTO resumes (firstname, lastname, netid, file, filename, filesize, filetype) VALUES ('$firstname','$lastname','$netid','$data','$form_data_name','$form_data_size','$form_data_type')");
$id = $mysqli->insert_id;
$res = $mysqli->query("SELECT * FROM resumes WHERE id=".$id);
$row = $res->fetch_assoc();

print "<p>File ID: <b>$id</b><br>";
print "<p>File Name: <b>$form_data_name</b><br>";
print "<p>File Size: <b>$form_data_size</b><br>";
print "<p>File Type: <b>$form_data_type</b><p>";
?>