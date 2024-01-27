<?php
require('function.php');
session_start();
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
            <a class="navbar-brand" href="admin_dashboard.php">Library Management System</a>
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
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#e3f2fd">
     <div class="container-fluid">
        <ul class="nav navbar-nav navbar-center">
            <li>
                   <a href="admin_dashbord.php" class="nav-link text-dark">Dashboard</a>
            </li>
            <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle text-dark " href="#" data-bs-toggle="dropdown" >Book</a>
                <div id="ul">
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-dark"  href="addbook.php">Add Book</a></li>
                        <li><a class="dropdown-item text-dark"  href="regbooks.php">View Book</a></li>
                        <li><a class="dropdown-item text-dark"  href="managebook.php">Manage Book</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle text-dark " href="#" data-bs-toggle="dropdown" >Categories</a>
                <div id="ul">
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-dark"  href="addcat.php">Add New Categories</a></li>
                        <li><a class="dropdown-item text-dark"  href="regcat.php">View Category</a></li>
                        <li><a class="dropdown-item text-dark"  href="manage_category.php">Manage Categories</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle text-dark " href="#" data-bs-toggle="dropdown" >Author</a>
                <div id="ul">
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-dark"  href="new_author.php">Add New Author</a></li>
                        <li><a class="dropdown-item text-dark"  href="view_author.php">view Author</a></li>
                        <li><a class="dropdown-item text-dark"  href="mange_author.php">Manage Author</a></li>
                    </ul>
                </div>
            </li>
            <li>
                   <a href="issuebook.php" class="nav-link text-dark">Issue Book</a>
            </li>
        </ul>    
     </div>
</nav>
<hr>
<div class="bg-success mar text-white"><marquee>This Is Library Management Project. Library Open At 9:00 AM And Close At 3:00 PM</marquee></div>
<br>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="issuebb.php" method="post">
                            <label for="stid">Book Id :</label>
                            <select class="form-control" name="bid">
                                   <option style="display:flex;">Select Book ID</option>
                                  <?php
                                       $connection=mysqli_connect("localhost","root","","lmsproject");
                                       $count_user="";
                                       $query = "select bookid from book";
                                       $query_run=mysqli_query($connection, $query);
                                       while($row=mysqli_fetch_assoc($query_run))
                                       {
                                       ?>
                                       <option value="<?php echo $row['bookid'];?>"><?php echo $row['bookid'];?></option>
                                       <?php
                                       }
                                   ?>
                              </select>
                            <!-- <input type="number" class="form-control"   name="stid" id="sid"> -->
                        <br>  
                        
                             <label for="stid">Book Name :</label>
                             <select class="form-control" name="bname">
                                   <option>Select Book Name</option>
                                   <?php
                                       $connection=mysqli_connect("localhost","root","","lmsproject");
                                       $count_user="";
                                       $query = "select book_name from book";
                                       $query_run=mysqli_query($connection, $query);
                                       while($row=mysqli_fetch_assoc($query_run))
                                       {
                                       ?>
                                       <option value="<?php echo $row['book_name'];?>"><?php echo $row['book_name'];?></option>
                                       <?php
                                       }
                                   ?>
                              </select>
                             <!-- <input type="text" class="form-control " placeholder="Enter The Book Name"  name="bname" required > -->
                        <br>  
                         
                              <label for="stid">Author Name :</label>
                              <select class="form-control" name="auid">
                                   <option>Select Author</option>
                                   <?php
                                       $connection=mysqli_connect("localhost","root","","lmsproject");
                                       $count_user="";
                                       $query = "select author_name from author";
                                       $query_run=mysqli_query($connection, $query);
                                       while($row=mysqli_fetch_assoc($query_run))
                                       {
                                       ?>
                                       <option value="<?php echo $row['author_name'];?>"><?php echo $row['author_name'];?></option>
                                       <?php
                                       }
                                   ?>
                               </select>    
                        
                              <!-- <input type="text" class="form-control" placeholder="Enter The Author Name " name="auid" required> -->
                    
                         <br>  
                                <label for="stid">Student Id  :</label>
                                <select class="form-control" name="stid">
                                   <option>Select Student ID</option>
                                   <?php
                                       $connection=mysqli_connect("localhost","root","","lmsproject");
                                       $count_user="";
                                       $query = "select stid from user";
                                       $query_run=mysqli_query($connection, $query);
                                       while($row=mysqli_fetch_assoc($query_run))
                                       {
                                       ?>
                                       <option value="<?php echo $row['stid'];?>"><?php echo $row['stid'];?></option>
                                       <?php
                                       }
                                   ?>
                              </select>     
                                <!-- <input type="text" class="form-control" placeholder="Enter The Id Of Category" name="stid" required>  -->
                         <br>
                                <label for="stid">Issue Date :</label>
                                <input type="date" class="form-control" name="issuedate" required value="<?php echo date("Y-m-d");?>">
                         <br>
                               <button type="submit" class="btn btn-primary" name="btn">Issue Book</button>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
</div>    
</body>
</script>
</html>