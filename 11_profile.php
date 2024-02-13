<?php
session_start();
$get_user=$_SESSION['user'];
$get_user_type=$_SESSION['user_type'];
if($get_user=="")
{
    header("location:1_login.php");
}
include 'db.php';
if(isset($_POST['profile']))
{
  $getuser=$_POST['user'];
  $getname=$_POST['name'];
  $getemail=$_POST['email'];
  $getmobile=$_POST['mobile'];
 
  $profile="insert into profile(id,user,,name,email,mobile) value('','$getuser','$getname','$getemail','$getmobile')";
  $result=mysqli_query($con,$profile);
  if($result==true)
  {
    $ms="profile Successfully Submited";
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
        background-color:  blanchedalmond;
        margin-top: 100px;


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
    <th colspan="2">  PROFILE </th>
  </tr>
  <tr>
    <td>USER</td>
    <td><input type="text" name="user"/></td>
</tr>
<tr>
    <td>NAME</td>
    <td><input type="text" name=" name"/></td>
</tr>
<tr>
    <td>EMAIL ID</td>
    <td><input type="text" name="email"/></td>
</tr>
<tr>
    <td>MOBILE NO</td>
    <td><input type="text" name="mobile"/></td>
</tr>
<tr>
<td colspan="2" align="center"> 
     <input type="submit" value="login" name="profile"/>
</td>
</tr>
</table>
</form>
<div class="box2d" style=" margin-left: 1120px; position:fixed; bottom:0;" >
 
            <h2>developed by mehul</h2>
        </div>


</body>
</html>