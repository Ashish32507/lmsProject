<?php
        session_start();
        $connection=mysqli_connect("localhost","root","","lmsproject");
        $pass="";
        $query = "select * from admin where email = '$_SESSION[email]'";
        $query_run=mysqli_query($connection, $query);
        while($row=mysqli_fetch_assoc($query_run))
        {
            $pass = $row['password'];
        }    
        if($pass==$_POST['oldpass'])
        {
            $query = "update admin set password	 = '$_POST[npass]' where email = '$_SESSION[email]'";
            $query_run=mysqli_query($connection, $query);
        }
        else
        {
            ?>
                        <br><br><center><span>Wrong Password</span></center>
                        <?php
        }
        ?>
        
        <script type="text/javascript">
           alert("Password Update Successfully....");
           window.location.href="admin_dashboard.php";
       </script>  
