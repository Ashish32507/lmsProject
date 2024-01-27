<?php
      session_start();
      function issuebook_count(){ 
           $issue_book=0;
           $connection=mysqli_connect("localhost","root","","lmsproject");
           $query = "select count(*) as issue_book from issuedbook where studentid = $_SESSION[sid]";
           $query_run=mysqli_query($connection, $query);
           while($row=mysqli_fetch_assoc($query_run))
           {
            $issue_book = $row['issue_book'];
           }
           return $issue_book;

      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Home</title>
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
            /* #ul{
                margin-right:150px;
            } */
            
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="user_dashboard.php">Library Management System</a>
        </div>
        <span><strong class="text-white">Welcome - <?php echo $_SESSION['name'];?></strong></span>
        <span><strong class="text-white">Email :- <?php echo $_SESSION['email'];?></strong></span>
        <ul class="nav navbar-nav navbar-right dropdown">
           <li class="nav-item" >
                <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" >My Profile</a>
                <div id="ul">
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="view_profile.php">View Profile</a></li>
                        <li><a class="dropdown-item" href="edit_profile.php">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="change_password.php">Change Password</a></li>
                    </ul>
                </div>
            </li>
            <a class="nav-link text-white" href="logout.php" >Logout</a>
       </ul>
    </div>  
</nav>
<hr>
<div class="bg-success mar text-white"><marquee>This Is Library Management Project. Library Open At 9:00 AM And Close At 3:00 PM</marquee></div>
<br>
<div class="row">
    <div class="col-md-3">
    <div class="card bg-light" style="width:300px">
                <div class="card-header">Issued Book</div>
                      <div class="card-body">
                          <p class="card-text">No Of Total Issue Book :<?php echo issuebook_count();?></p>
                          <a href="view_issuedbook.php" class="btn btn-danger" target="_blank">View Issue Book</a>
                      </div>
                </div>
            </div>
    </div>
</div>
</body>
</html>