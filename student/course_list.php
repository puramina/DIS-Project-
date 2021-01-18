<!-- Course DIS Project: Student Management Systems 
			Ref:www.w3schools.com -->
<?php

$conn=mysqli_connect("localhost","root","","studentmanagementsys");

/*retrieve the grades*/
function getCourse(){
	
	global $conn;
	
	$get_courses = "SELECT * FROM student, enrolment, course, courseoffering WHERE student.id=enrolment.studentID AND enrolment.courseofferID=courseoffering.id AND courseoffering.courseID=course.id";
	
	global $conn;
	$Results = mysqli_query($conn,$get_courses);
	
	while($row=mysqli_fetch_array($Results)){
		
		$courseid=$row['courseofferID'];
		$name=$row['name'];
		
		echo("	
				<tr> 
					<td>$courseid</td>
					<a><td>$name</td> </a>
				</tr>
				
			");
	} // end while

} // end function
?>