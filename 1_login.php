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
        background: url("image/img7.jpg.webp") fixed center  ;

       }
     h1{
         text-align: center;
         /* color: rgb(0, 0, 0); */
         text-shadow: 3px 5px 3px rgb(224, 18, 18);

     }  
     form{
        float:left;
         margin-left:850px;
         margin-top:120px;
         font-size: 30px;


     }
     table{
        border: 3px solid black;
            box-shadow: 30px 40px 50px 40px rgb(78, 73, 73);
            border-collapse: collapse;

     }
    
    
     /* h2{
         text-align: end;
         background-color: rgb(221, 240, 240);

     } */
     .box2d{
        margin-top: 500px
     }
    
    </style>
</head>
<body>

       <h1>LIBRARY MANAGEMENT SYSTEM</h1> 
     

        <form acttion="#" method="post">
         <table border="1" align="center" class="table" >
             <tr>
                 <th colspan="2">LOGIN</th>
    </tr>
         <tr>
         <td>LOGIN TYPE</td>
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
        
        <div class="box2d" style=" margin-left: 1120px; position:fixed; " >

 
 <h2>developed by mehul</h2>
</div>

    
    

</body>
</html>