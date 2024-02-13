<?php
session_start();
$get_user=$_SESSION['user'];
$get_user_type=$_SESSION['user_type'];
if($get_user=="")
{
    header("location:1_login.php");
}
include 'db.php';
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

       
         .head{
        background-color: rgb(105, 193, 231);
        text-align: center;
         }
         table{
            width: 100%;
            height: 20px;
            text-align: center;

        }
        th{
            height: 40px;
            background-color: azure;
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

<div class="head">
    <h1><span ><b>ISSUE BOOK HISTORY</b></span></h1>
    <table>
        <thead>
            <tr>
                <th>S.NO</th>
                <th>STUDENT ID</th>
                <th>STUDENT NAME</th>
                <th>BOOK ID</th>
                <th>BOOK NAME</th>
                <th>ISSU DATE</th>
                
             </tr>
                </thead> 
</table>
</div>
<div class="box2d" style=" margin-left: 1120px; position:fixed; bottom:0;" >
 
            <h2>developed by mehul</h2>
        </div>

</body>
</html>