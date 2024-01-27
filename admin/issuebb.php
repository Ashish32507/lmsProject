<?php
    if(isset($_POST['btn']))
    {
             $connection=mysqli_connect("localhost","root","","lmsproject");
             $query = "insert into issuedbook value (null,$_POST[bid],'$_POST[bname]','$_POST[auid]','$_POST[stid]',1,'$_POST[issuedate]')";
             $query_run=mysqli_query($connection, $query);
    }
    
?>
<script type="text/javascript">
    alert("Book Issued Successfully........ ");
    window.location.href="admin_dashboard.php";
</script>