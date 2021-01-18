<?php

$conn=mysqli_connect("localhost","root","","studentmanagementsys");

/*retrieve the grades*/
function getGrades(){
	
	global $conn;
	
	$get_courses = "SELECT * FROM student, enrolment, course, courseoffering WHERE student.id=enrolment.studentID AND enrolment.courseofferID=courseoffering.id AND courseoffering.courseID=course.id";
	
	global $conn;
	$Results = mysqli_query($conn,$get_courses);
	
	while($row=mysqli_fetch_array($Results)){
		
		$courseid=$row['courseofferID'];
		$name=$row['name'];
		$mark=$row['mark'];
		$grade=$row['grade'];
		
		echo("	
				<tr> 
					<td>$name</td> 
					<td>$courseid</td>
					<td>$mark</td>
					<td>$grade</td>
				</tr>
				");
	} // end while

} // end function
?>