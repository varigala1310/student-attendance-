<?php
include_once("../includes/db_connect.php");
include_once("../includes/functions.php");
if($_REQUEST(act)=="save_course")
{
}
save_course();
exit;
if($_REQUEST(act)=="delete_course")
{
delete_course();
exit;
}
###Code for save course#####
function save_course()
{
global Scan;
$R=$_REQUEST;
/////////////////////////////////
Şimage_name = $_FILES[course_image][name];
$location = $_FILES(course_image][tmp_name];
if($image_name!="")
{
move_uploaded_file($location,"./uploads/".$image_name);
}
Else
{
$image_name $R[avail_image];
}
if($R[course_id])
{
Statement = "UPDATE course SET":
$cond =
"WHERE course_id '$R[course_id]";
$msg = "Data Updated Successfully.",
}
else
{
Statement = "INSERT INTO course SET";
$cond = "";
$msg="Data saved successfully.",
}
$SQL= $statement."
"course_title = "$R[course_title]',
course_year' = '$R[course_year]',
course semester = 'AT[course semester)',
'course fees = 'SR[course_fees)'
"course_code = $R[course_code]".
$cond;
$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
header("location.../course-report.php?msg=$msg");
}
########## Function for delete course#########3
function delete _course()
{
global Scan;
///////Delete the record//////
SQL="DELETE FROM course WHERE course_id = $_REQUEST[course_id]":
mysqli_query($con,$SQL) or die(mysqli_error($con));
header("Location:./course-report.php?msg=Deleted Successfully."):
}
?>
