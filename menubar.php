
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Bar</title>
    <style>
      div{
        margi-bottom: 20px;
      }
      </style>
    </head>
<body>
    <div class="navbar">
        <a href="2_welcome.php">Home</a>
        <a href="11_profile.php">PROFILE</a>
        <a href="12_changepass.php">CHANGE PASSWORD</a>

        <div class="dropdown">
          <button class="dropbtn">BOOK SETTINGS
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="3_addbook.php">ADD BOOK</a>
            <a href="5_editboook.php">EDIT BOOK</a>
            <a href="4_bookdetails.php">BOOK DETAILS</a>

          </div>
        </div> 
        <div class="dropdown">
          <button class="dropbtn">ISSUE BOOK
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="7_issuebook.php">ISSUE BOOK</a>
            <a href="8_issuhistory.php">ISSUE BOOK HISTORY</a>

          </div>
          </div> 
        <div class="dropdown">
          <button class="dropbtn">RETURN BOOK
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="9_returnbook.php">RETURN BOOK</a>
            <a href="10_returnhistory.php">RETURN BOOK HISTORY</a>

          </div>
          </div> 
        <div class="dropdown">
          <button class="dropbtn">STUDENT
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="13_addstudent.php">ADD STUDENT</a>
            <a href="14_editstudent.php">EDIT STUDENT</a>
            <a href="6_student-details.php">STUDENT DETAILS</a>


          </div>



        </div> 
        <a href="2_logout.php">Log Out</a>
      </div>

</body>

</html>