<?php
        $connection=mysqli_connect("localhost","root","","lmsproject");
        $query="delete from category where cat_id = $_GET[aid]";
        $query_run=mysqli_query($connection,$query);
?>

<script type="text/javascript">
    alert("Deleted Successfully........ ");
    window.location.href="admin_dashboard.php";
</script>