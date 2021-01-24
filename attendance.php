<?php
include_once("./includes/db_connect.php");
include_once("./includes/functions.php");
if($_REQUEST(act)=="save_attendance")
{
save_attendance();
exit;
}
if($_REQUEST[act]=="delete attendance")
{
delete_attendance();
exit;
}
##Code for save attendance####
function save_attendance()
{
global Scon;
$R=S_REQUEST;
///////////////////
Simage_name = $_FILES[attendance_image][name];
Slocation = $_FILES[attendance_imageltmp_name);
if(Simage_namel="")
{
move_uploaded_file(Slocation,"./uploads/".Image_name);
}
else
{
Simage_name = SR[avail_image];
}
if(SR[attendance id])
{
Statement = "UPDATE attendance SET":
Scond = "WHERE attendance _id = 'STR attendance _id":
Smsg="Data Updated Successfully."
}
else
{
Statement = "INSERT INTO 'attendance' SET";
Scond = "";
Smsg="Data saved successfully.";
}
$SQL= Statement."
'attendance student idR{attendance student id)',
attendance months = 'AR attendance months)".
attendance date='SRi attendance date]".
attendance Intime = 'SUR[attendance intime
attendance outtime - "SAR{attendance out time",
attendance description = 'SR attendance description"
Scond;
Srs = mysql_query(Scom SQL) or die(mysqli error(Scon));
header("Location:/attendance-report.php?msg Smsg");
}
#########Function for delete attendance########
function delete attendance()
{
Elobal Scon
/Delete the record/// /////Delete record/
$SQL="DELETE FROM attendance WHERE attendance _id = 5_REQUEST attendance
_id":
mysqli_query(Con,SQL) or die(mysqli_error(Con):
header("Location:../attendance report.php?msg-Deleted successfully.");
}
<?
