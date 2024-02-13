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
$book_details="select * from editbook where id='$get_id'";
$result_book=mysqli_query($con,$book_details);
$row=mysqli_fetch_array($result_book);
if(isset($_POST['editbook']))
{
  $getid=$_POST['bid'];
  $getbookid=$_POST['book_id'];
  $getouthor=$_POST['outhor'];
  $getname=$_POST['name'];
  $getpublish=$_POST['publish'];
  $getbooktype=$_POST['booktype'];
  $getprice=$_POST['price'];
  $getfine=$_POST['fine'];
  $getstock=$_POST['stock'];

  $editbook="update addbook set book_id='$getbookid',outhor='$getouthor',name='$getname',publish='$getpublish',booktype='$getbooktype',price='$getprice',fine='$getfine',stock='$getstock' where id='$getid'";
  $result=mysqli_query($con,$editbook);
  if($result==true)
  {
    $msg="Book Successfully Edited";
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
        margin-top: 50px;


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
    <th colspan="2">   EDIT BOOK </th>
  </tr>
  <tr>
    <td>BOOK ID</td>
    <input type="hidden" name="bid" value="<?php echo $row['id'];?>"/>
    <td><input type="text" name="book_id" value="<?php echo $row['book_id'];?>"/></td>
</tr>

  <tr>
    <td>BOOK OUTHOR</td>
    <td><input type="text" name="outhor" value="<?php echo $row['outhor'];?>"/></td>
</tr>
<tr>
    <td>BOOK NAME</td>
    <td><input type="text" name="name" value="<?php echo $row['name'];?>"/></td>
</tr>
<tr>
    <td>BOOK PUBLISH</td>
    <td><input type="text" name="publish" value="<?php echo $row['publish'];?>"/></td>
</tr>
<tr>
    <td>BOOK TYPE</td>
    <td><input type="text" name="booktype" value="<?php echo $row['booktype'];?>"/></td>
</tr>
<tr>
    <td>BOOK PRICE</td>
    <td><input type="text" name="price" value="<?php echo $row['price'];?>"/></td>
</tr>
<tr>
<td>BOOK FINE</td>
    <td><input type="text" name="fine" value="<?php echo $row['fine'];?>"/></td>
</tr>
<td>BOOK STOCK</td>
    <td><input type="text" name="stock" value="<?php echo $row['stock'];?>"/></td>
</tr>
<tr>
<td colspan="2" align="center"> 
     <input type="submit" value="Edit Book" name="editbook"/>
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