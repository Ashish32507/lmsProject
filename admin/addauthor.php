<?php
    if(isset($_POST['btn']))
    {
             $connection=mysqli_connect("localhost","root","","lmsproject");
             $query = "insert into author value  ($_POST[aid],'$_POST[aname]')";
             $query_run=mysqli_query($connection, $query);
    }
    
?>
<script type="text/javascript">
    alert("Author Added Successfully........ ");
    window.location.href="admin_dashboard.php";
</script>