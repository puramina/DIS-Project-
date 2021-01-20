<?php
include('../db_conn.php');
session_start();


$id = $_GET['id'];


$sql1 = "DELETE FROM student WHERE id='$id'";

if ($conn->query($sql1) === TRUE) {
		  echo "Record deleted successfully";
		} else {
		  echo "Error deleting record: " . $conn->error;
		}

?>