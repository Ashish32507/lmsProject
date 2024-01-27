<?php
                  $connection=mysqli_connect("localhost","root","","lmsproject");
                  $query = "update user set name='$_POST[name]',email='$_POST[email]',number='$_POST[number]',address='$_POST[address]',branch='$_POST[br]',session='$_POST[ss]'";
                  $query_run=mysqli_query($connection, $query);
                  
?>
<script type="text/javascript">
    alert("Profile Update Successfully....");
    window.location.href="user_dashboard.php";
</script>