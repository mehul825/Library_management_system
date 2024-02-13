<?php
session_start();
$get_user=$_SESSION['user'];
$get_user_type=$_SESSION['user_type'];
if($get_user=="")
{
    header("location:1_login.php");
}
include 'db.php';

if(isset($_POST['addbook']))
{
  $getbookid=$_POST['book_id'];
  $getouthor=$_POST['outhor'];
  $getname=$_POST['name'];
  $getpublish=$_POST['publish'];
  $getbooktype=$_POST['booktype'];
  $getprice=$_POST['price'];
  $getfine=$_POST['fine'];
  $getstock=$_POST['stock'];

  $addbook="insert into addbook(id,book_id,outhor,name,publish,booktype,price,fine,stock) value('',     '$getbookid','$getouthor','$getname','$getpublish','$getbooktype','$getprice','$getfine','$getstock')";
  $result=mysqli_query($con,$addbook);
  if($result==true)
  {
    $ms="Book Successfully Submited";
  }
 

}


?>


<html>

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
    .box3
    {
        text-align: center;
        font-size: 15px;
        color:  rgb(250, 88, 24);

    }
  table{
    margin-top: 100px;
    background-color:  blanchedalmond;
    border-collapse: collapse;
  }
  .box2d{
        margin-top: 450px
  
    }
   
</style>
</head>

<body>
    
<div class="box3" >

    <h1><b>WELCOME TO ROOME</b></h1>

</div>
<?php include 'menubar.php'?>

<form action="#" method="post">
<table border="1" align="center">
    <tr>
    <th colspan="2">  ADD BOOK </th>
  </tr>
  <tr>
<td>BOOK ID</td>
<td><input type="text" name="book_id"/></td>
</tr>

  <tr>
    <td>BOOK OUTHOR</td>
    <td><input type="text" name="outhor"/></td>
   
</tr>
<tr>
<td>BOOK NAME</td>
<td><input type="text" name="name"/></td>
</tr>
<tr>
<td>BOOK PUBLISH</td>
<td><input type="text" name="publish"/></td>
</tr>
<tr>
<td>BOOK TYPE</td>
<td><input type="text" name="booktype"/></td>
</tr>
<tr>
<td>BOOK PRICE</td>
<td><input type="text" name="price"/></td>
</tr>
<tr>
<td>BOOK FINE</td>
<td><input type="text" name="fine"/></td>
</tr>
<tr>
<td>BOOK STOCK</td>
<td><input type="text" name="stock"/></td>
</tr>
<tr>
<td colspan="2" align="center"> 
     <input type="submit" value="ADD BOOK" name="addbook"/>
</td>
</tr>
</table>
</form>
<div class="box2d" style=" margin-left: 1120px; position:fixed; bottom:0;" >
 
            <h2>developed by mehul</h2>
        </div>

</body>
</html>