<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Singin Here</title>
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
<body onload="random_number()">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Library Management System</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link text-white" href="../lmproject/admin/index.php">Admin Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../lmproject/index.php">Login</a>
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
                 <center><h3>User Registration </h3></center> 
                 <form action="register.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                        
                            <label for="stid">Student Id :</label>
                            <input type="number" class="form-control"   name="stid" id="sid" readonly>
                        <br>  
                        
                             <label for="stid">Student Name :</label>
                             <input type="text" class="form-control " placeholder="Enter The Full Name"  name="stname" required >
                        <br>  
                        
                            <label for="stid">Gender :</label>
                            <select name="gender" class="form-control" required>
                                 <option value="0" class="form-control" required>Select</option>
                                 <option value="Male" class="form-control" required>Male</option>
                                 <option value="Female" class="form-control" required>Female</option>
                            </select>
                        
                        <br>
                      
                            <label for="stid">Date Of Birth :</label>
                            <input type="date" class="form-control " placeholder="Enter Your Date Of Birth" name="dob" required> 
                        <br> 
                            <label for="stid">Email ID :</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email-Id" name="email" required>
                   
                         <br>
                        
                            <label for="stid">Password :</label>
                            <input type="password" class="form-control" placeholder="Enter The Password" name="pass" required>
                   
                        <br>
                         
                              <label for="stid">Mobile Number :</label>
                              <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="mobile" required>
                    
                         <br>  
                    
                                <label for="stid">Address :</label>
                                <textarea id="" cols="40" rows="3" class="form-control" name="add" placeholder="Enter your Address"></textarea>

                         <br>
                                <label for="stid">Branch :</label>
                                <input type="text" class="form-control" placeholder="Enter Your Branch" name="br" required> 
                         <br> 
                                <label for="stid">Session :</label>
                                <input type="text" class="form-control" placeholder="Enter Your Session" name="ss" required>
                         <br>
                               <button type="submit" class="btn btn-primary" id="btn">Register</button>
                 </form>     
            </div>
</div>

</body>
<script>
       function random_number()
       {
         
           let num = Math.floor(Math.random()*1000000);
           var n = document.getElementById('sid').value=num;
       }
      function validateForm() {
          var email = document.forms["loginForm"]["email"].value;
          var password = document.forms["loginForm"]["pass"].value;
          var number = document.forms["loginForm"]["number"].value;
          var dob = document.forms["loginForm"]["dob"].value;

          
          // Validate Email
          var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(email)) {
              alert("Invalid email format");
              return false;
          }
          
          // Validate Password (you can add more complex criteria)
          if (password.length < 6) {
              alert("Password should be at least 6 characters long");
              return false;
          }
          
          // Validate Number (you can add more specific criteria)
          if (isNaN(number) || number.length !== 10) {
              alert("Invalid phone number");
              return false;
          }
          var today = new Date();
            var dobDate = new Date(dob);
            var threeYearsAgo = new Date(today.getFullYear() - 3, today.getMonth(), today.getDate());
            if (dobDate > threeYearsAgo) {
                alert("Date of Birth should be at least 3 years in the past");
                return false;
            }
      }
</script>
</html>