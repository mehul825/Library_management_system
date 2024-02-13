<?php
session_start();
$get_user=$_SESSION['user'];
$get_user_type=$_SESSION['user_type'];
if($get_user=="")
{
    header("location:1_login.php");
}
include 'db.php';

$book_details="select * from addstudent";
$result_book=mysqli_query($con,$book_details);
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
    <h1><span ><b>STUDENT DETAILS</b></span></h1>
    <table>
        <thead>
            <tr>
                <th>S.NO</th>
                <th>NANE</th>
                <th>STUDENT-ID</th>
                <th> ROLL NO</th>
                <th>CLASS</th>
                <th>SECTION</th>
                <th>EMAIL</th>
                <th>MOBILE</th>
                <th>ACTION</th>
             </tr>
             </thead> 
                <?php
                $i=1;
                while($row=mysqli_fetch_array($result_book))
                {?>
                <tr>
                <th><?php echo $i;?></th>
                <th><?php echo $row['name'];?></th>
                <th><?php echo $row['student_id'];?></th>
                <th><?php echo $row['roll'];?></th>
                <th><?php echo $row['class'];?></th>
                <th><?php echo $row['section'];?></th>
                <th><?php echo $row['email'];?></th>
                <th><?php echo $row['mobile'];?></th>
              
                <th><a href="14_editstudent.php?id=<?php echo $row['id'];?>">Edit</a></th>

             </tr>
             <?php
             $i++;
                }
                ?>

            
</table>         
</div>
<div class="box2d" style=" margin-left: 1120px; position:fixed; bottom:0;" >
 
            <h2>developed by mehul</h2>
        </div>

</body>
</html>