<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Admin Section</title>
    <style>
            hr{
                margin-top:0px;
            }
            .mr{
                margin-top:25px;
                height: 150px;
            }
            #side_bar{
              background-color: whitesmoke;
              padding:50px;
              width:300px;
              height:400px;
            }
            #btn{
              margin-bottom:50px;
            }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../admin/index.php">Library Management System</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link text-white" href="../admin/index.php">Admin Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../singin.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../index.php">Login</a>
          </li>
        </ul>
    </div>  
</nav>
<hr>
<div class="bg-success mar text-white"><marquee>This Is Library Management Project. Library Open At 9:00 AM And Close At 3:00 PM</marquee></div>
<br>
<!-- login section  left secion-->
<div class="row">
            <div class="col-mad-4" id="side_bar">
                <h5>Library Timing</h5>
                <ul>
                  <li>Opening Time : 9:00AM</li>
                  <li>Closing Time : 3:00 PM</li>
                  <li>Saturday & Sunday Off</li>
                </ul>
                <h5>What We Provide</h5>
                <ul>
                  <li>News Paper</li>
                  <li>Free Wi-fi</li>
                  <li>Discusion Room</li>
                  <li>Pacefull Environment</li>
                </ul>
            </div>
            <div class="col-md-8" id="main_content">
                 <center><h3>Admin Login</h3></center> 
                 <form action="" method="POST">
    
                            <label for="stid">Email ID :</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email-Id" name="email" required>
                   
                         <br>
                        
                            <label for="stid">Password :</label>
                            <input type="password" class="form-control" placeholder="Enter The Password" name="pass" required>
                   
                        <br>
                               <button type="submit" class="btn btn-primary" name="login">Login</button> <span>|<a href="../lmproject/singin.php"> Not Register Yet </a></span>
                 </form>  
             <?php
                session_start();
                if(isset($_POST['login']))
                {
                  $connection=mysqli_connect("localhost","root","","lmsproject");
                  // $email=$_POST['email'];
                  // $query = "insert into user(stid,name,email,password,number,address) values ($_POST[stid],'$_POST[stname]','$_POST[email]','$_POST[pass]','$_POST[mobile]','$_POST[add]')";
                  $query = "select * from admin where email= '$_POST[email]'";
                  $query_run=mysqli_query($connection, $query);
                  while($row=mysqli_fetch_assoc($query_run))
                  {
                    if($row['email']==$_POST['email'])
                    {
                      if($row['password']==$_POST['pass'])
                      {
                         $_SESSION['sid'] = $row['stid'];
                         $_SESSION['name'] = $row['name'];
                         $_SESSION['email'] = $row['email'];
                         $_SESSION['number'] = $row['number'];
                         $_SESSION['address'] = $row['address'];
                         header("location:admin_dashboard.php");
                      }
                      else
                      {
                        // echo "Wrong Password ";
                        // <script type="text/javascript">
                        //     alert("Registration Successfully........ You May Login Now.");
                        //     window.location.href="index.php";
                        // </script>
                        ?>
                        <br><br><center><span>Wrong Password</span></center>
                        <?php
                      }
                    }
                    else
                    {
                      echo "Wrong Email-Id";
                      // <br><br><center><span class="alert-danger">Wrong Password</span></center>
                    }
                  }
                }
             ?>
            </div>
</div>

</body>
</html>