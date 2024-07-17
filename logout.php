<?php
session_start();
unset($_SESSION['islogin']);
unset($_SESSION['user_name']);
echo "<script>alert('logout Successfully');location.href='index.php'</script>";

?>
