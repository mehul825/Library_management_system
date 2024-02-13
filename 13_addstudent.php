<?php
session_start();
$get_user=$_SESSION['user'];
$get_user_type=$_SESSION['user_type'];
if($get_user=="")
{
    header("location:1_login.php");
}
include 'db.php';
if(isset($_POST['addstudent']))
{
  $getname=$_POST['name'];
  $getstudent_id=$_POST['student_id'];

  $getroll=$_POST['roll'];
  $getclass=$_POST['class'];
  $getsection=$_POST['section'];
  $getemail=$_POST['email'];
  $getmobile=$_POST['mobile'];
 
  $editstudent="insert into addstudent(id,name,student_id,roll,class,section,email,mobile) value('',     '$getname','$getstudent_id','$getroll','$getclass','$getsection','$getemail','$getmobile')";
  $result=mysqli_query($con,$editstudent);
  if($result==true)
  {
    $msg="student Successfully added";
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
    <th colspan="2">  ADD STUDENT </th>
  </tr>
  <tr>
    <td>NAME</td>
    <td><input type="text" name="name"/></td>
   
</tr>
<td>STUDENT-ID</td>
    <td><input type="text" name="student_id"/></td>
   
</tr>
<tr>
<td>ROLL-NO</td>
<td><input type="text" name="roll"/></td>
</tr>
<tr>
<td>CLASS</td>
<td><input type="text" name="class"/></td>
</tr>
<tr>
<td>SECTION</td>
<td><input type="text" name="section"/></td>
</tr>
<tr>
<td>EMAIL-ID</td>
<td><input type="text" name="email"/></td>
</tr>
<tr>
<td>MOBILE</td>
<td><input type="text" name="mobile"/></td>
</tr>
<tr>
<td colspan="2" align="center"> 
     <input type="submit" value="add student" name="addstudent"/>
</td>
</tr>
</table>
</form>
<div class="box2d" style=" margin-left: 1120px; position:fixed; bottom:0;" >
 
            <h2>developed by mehul</h2>
        </div>


</body>
</html>