<?php
                  $connection=mysqli_connect("localhost","root","","lmsproject");
                  $query = "update admin set name='$_POST[name]',email='$_POST[email]',number='$_POST[number]',address='$_POST[address]'";
                  $query_run=mysqli_query($connection, $query);
                  
?>
<script type="text/javascript">
    alert("Profile Update Successfully....");
    window.location.href="admin_dashboard.php";
</script>