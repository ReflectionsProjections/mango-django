<?php

require_once('dbconnect.php');
$mysqli = new mysqli($db_host,$db_user,$db_pass, $db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL";
}

$firstname = $mysqli->real_escape_string($_POST['firstname']);
$lastname = $mysqli->real_escape_string($_POST['lastname']);
$netid = $mysqli->real_escape_string($_POST['netid']);

$tmp_file = $_FILES['resume']['tmp_name'];
$filesize = $_FILES['resume']['size'];
$filename =  $_FILES['resume']['name'];
$filetype = $_FILES['resume']['type'];
$file_obj = fopen($tmp_file, "r");
$data = addslashes(fread($file_obj, filesize($tmp_file)));
fclose($file_obj);

$netid_id = $mysqli->query("SELECT id FROM netid_ids WHERE netid=".$netid);
if (!$netid_rows) {
   $mysqli->query("INSERT INTO netid_ids (netid) VALUES ('$netid')");
   $netid_id = $mysqli->insert_id;
}

$mysqli->query("INSERT INTO resumes (firstname, lastname, netid, file, filename, filesize, filetype) VALUES ('$firstname','$lastname','$netid_id','$data','$filename','$filesize','$filetype')");
$id = $mysqli->insert_id;

header("Location: resumes.php?status=ok");
exit;
?>