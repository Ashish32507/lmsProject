<?php
    if(isset($_POST['btn']))
    {
             $connection=mysqli_connect("localhost","root","","lmsproject");
             $query = "insert into category value ($_POST[cid],'$_POST[cname]')";
             $query_run=mysqli_query($connection, $query);
    }
    
?>
<script type="text/javascript">
    alert("Categories Add Successfully........ ");
    window.location.href="admin_dashboard.php";
</script>