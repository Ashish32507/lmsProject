<?php
  if(isset($_POST['addbook']))
   {
           $connection=mysqli_connect("localhost","root","","lmsproject");
           $query = "insert into book value (null,$_POST[bid],'$_POST[bname]','$_POST[auid]','$_POST[bcat]','$_POST[bookprice]')";
           $query_run=mysqli_query($connection, $query);
   }
?> 
<script type="text/javascript">
    alert("Book Added Successfully........ ");
    window.location.href="admin_dashboard.php";
</script>