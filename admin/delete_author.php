<?php
        $connection=mysqli_connect("localhost","root","","lmsproject");
        $query="delete from author where author_id  = $_GET[aid]";
        $query_run=mysqli_query($connection,$query);
?>

<script type="text/javascript">
    alert("Author Deleted Successfully........ ");
    window.location.href="admin_dashboard.php";
</script>