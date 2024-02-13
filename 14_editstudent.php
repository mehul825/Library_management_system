<?php
session_start();
$get_user=$_SESSION['user'];
$get_user_type=$_SESSION['user_type'];
if($get_user=="")
{
    header("location:1_login.php");
}
include 'db.php';
$get_id=$_REQUEST['id'];
$student_details="select * from addstudent where id='$get_id'";
$result_book=mysqli_query($con,$student_details);
$row=mysqli_fetch_array($result_book);
if(isset($_POST['editstudent']))
{
  $getid=$_POST['sid'];
  $getname=$_POST['name'];
  $getstudent_id=$_POST['student_id'];
  $getroll=$_POST['roll'];
  $getclass=$_POST['class'];
  $getsection=$_POST['section'];
  $getemail=$_POST['email'];
  $getmobile=$_POST['mobile'];

  $editstudent="update addstudent set name='$getname',student_id='$getstudent_id',roll='$getroll',class='$getclass',section='$getsection',email='$getemail',mobile='$getmobile' where id='$getid'";
  $result=mysqli_query($con,$editstudent);
  if($result==true)
  {
    $msg="student Successfully Edited";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Study</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="css/bootstraps.css" rel="stylesheet">
  <link href="css/menubar.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
         body{
        background-color: rgb(205, 235, 248);

    }
        table{
            margin-top: 80px;
            background-color:  blanchedalmond;

        }
        .box3
    {
        text-align: center;
        font-size: 15px;
        color:  rgb(250, 88, 24);

    }
    .box2d{
        margin-top: 450px
  
    }

    </style>
</head>
<body>
<div class="box3"> 
    <h1><b>WELCOME TO ROOME</b></h1>
</div>
<?php include 'menubar.php'?>


<form action="#" method="post">
<table border="1" align="center">
    <tr>
    <th colspan="2">  EDIT STUDENT </th>
  </tr>
  <tr>
    <td>NAME</td>
    <input type="hidden" name="sid" value="<?php echo $row['id'];?>"/>

    <td><input type="text" name="name" value="<?php echo $row['name'];?>"/></td>
   
</tr>
<tr>
<td>STUDENT-ID</td>
<td><input type="text" name="student_id" value="<?php echo $row['student_id'];?>"/>   </td>
</tr>

<tr>
<td>ROLL-NO</td>
<td><input type="text" name="roll" value="<?php echo $row['roll'];?>"/>   </td>
</tr>
<tr>
<td>CLASS</td>
<td><input type="text" name="class"  value="<?php echo $row['class'];?>"/></td>
</tr>
<tr>
<td>SECTION</td>
<td><input type="text" name="section" value="<?php echo $row['section'];?>"/></td>
</tr>
<tr>
<td>EMAIL-ID</td>
<td><input type="text" name="email" value="<?php echo $row['email'];?>"/></td>
</tr>
<tr>
<td>MOBILE</td>
<td><input type="text" name="mobile" value="<?php echo $row['mobile'];?>"/></td>
</tr>
<tr>
<td colspan="2" align="center"> 
     <input type="submit" value="edit student" name="editstudent"/>
</td>
</tr>
</table>
<div align="center"><?php echo @$msg;?></div>

</form>
<div class="box2d" style=" margin-left: 1120px; position:fixed; bottom:0;" >
 
            <h2>developed by mehul</h2>
        </div>

</body>
</html>