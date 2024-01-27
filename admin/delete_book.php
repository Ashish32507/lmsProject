<?php
        $connection=mysqli_connect("localhost","root","","lmsproject");
        $query="delete from book where bookid = $_GET[bn]";
        $query_run=mysqli_query($connection,$query);
?>

<script type="text/javascript">
    alert("Book Deleted Successfully........ ");
    window.location.href="admin_dashboard.php";
</script>