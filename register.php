<?php
    $connection=mysqli_connect("localhost","root","","lmsproject");
    $query = "insert into user(stid,name,gender,dob,email,password,number,address,branch,session) values ($_POST[stid],'$_POST[stname]','$_POST[gender]','$_POST[dob]','$_POST[email]','$_POST[pass]','$_POST[mobile]','$_POST[add]','$_POST[br]','$_POST[ss]','0')";
    $query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Registration Successfully........ You May Login Now.");
    window.location.href="index.php";
</script>