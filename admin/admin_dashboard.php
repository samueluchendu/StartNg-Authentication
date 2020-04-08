<?php session_start();
if($_SESSION['user_info']['designation'] !== 'Admin'){
  header('location: ../login.php');
}
?>

<h3> WELCOME ADMIN</h3>   <p><a href='../logout.php'>LOGOUT</a></p>

<?php if(isset($_SESSION['success'])){ echo "<span style='color:green';>". $_SESSION['success']. "</span><br>"; unset($_SESSION['success']); } ?>


<p> Name:<?php echo $_SESSION['user_info']['firstname']."<br>"; ?> </p>
<p> Designation:<?php echo $_SESSION['user_info']['designation']."<br>"; ?> </p>
<p> Registration time:<?php echo  $_SESSION['user_info']['reg_time']."<br>"; ?> </p>
<p> Registration Date:<?php echo  $_SESSION['user_info']['reg_date']."<br>"; ?> </p>
<p> Login Time:<?php echo $_SESSION['user_info']['login_time']."<br>"; ?> </p>
<p> Login Date:<?php echo $_SESSION['user_info']['login_date']."<br>"; ?> </p>
<p> Logout Time:<?php echo $_SESSION['user_info']['logout_time']."<br>"; ?> </p>
<p> Logout Date:<?php echo $_SESSION['user_info']['logout_date']."<br>"; ?> </p>



<h3>
<p><a href="Admin_register.php">Add User</a></p>

</h3>
