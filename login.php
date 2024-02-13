<?php
include 'db.php';

if(isset($_POST['login']))
{
    $getuser=$_POST['user'];
    $getpass=$_POST['pass'];
    $getusertype=$_POST['usertype'];

    $login="select * from login where user='$getuser' and password='$getpass'";
    $result=mysqli_query($con,$login);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        session_start();
        $_SESSION['user']=$getuser;
        $_SESSION['user_type']=$getusertype;
        header("location:2_welcome.php");
    }
    else
    {
        $msg="User and Password is incorrect";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(169, 186, 243);
        }
     h1{
         text-align: center;
         background-color: rgb(214, 230, 231);
         color: rgb(0, 0, 0);
     }  
    
    
     .table{
         float:left;
         background:#FF9900;
         margin-left:300px;
         margin-top:100px;
        
        
     }
     h2{
         text-align: end;
         background-color: rgb(221, 240, 240);

     }

    
    </style>
</head>
<body>

       <h1>LIBRARY MANAGEMENT SYSTEM</h1> 
       <div class="bos2" style="float:left;">
       <img src="image/image2.jpg.webp" width="600px">
    </div>

        <form acttion="#" method="post">
         <table border="1" align="center" class="table" >
             <tr>
                 <th colspan="2">Login</th>
    </tr>
         <tr>
         <td>Login Type</td>
         <td>
         <select name="usertype">
         <option>user type</option> 
         <option>admin</option>
         <option>student</option>   
         </select>    
         </td>    
         </tr>  
         <tr>
             <td>USER</td>
             <td> <input type="text" id="user" name="user"> </td>
         </tr> 
         <tr>
             <td>PASSWORD</td>
             <td><input type="password" id="pass" name="pass"></td>
         </tr> 
         <tr>
            
             <td colspan="2" align="center"><input type="submit" value="Login" name="login"/></td>
         </tr> 
         <tr>
             <td colspan="2" align="center"><?php echo @$msg;?></td>
    </tr>
         </table>   
        </form>
        
        <div class="box2d" style=" margin-left: 1120px; position:fixed; bottom:0;" >
 
 <h2>developed by mehul</h2>
</div>

    
    

</body>
</html>