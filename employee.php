<!DOCTYPE html>
<html lang="en">
  
<?php include('template/header.php'); ?>

<div class="login">
  

   <div class="login-card">
   <h4 class="employee-detail">For Employee</h4>
   <form class="white" action="employee.php" method="post">
      <div>
      <label>Email:</label>
    <input type="text" name="email">
    <label>Password:</label>
    <input type="password" name="password">
    <input type="hidden" name="action" value="login">
</div>
    <div class="center">
    <input type="submit" name="submit" value="submit" class="btn z-depth-0">
   </div>
</form>
    
   <h4 class="manager-detail">For Manager</h4>
   <form class="white" action="employee.php" method="post">
      <div>
      <label>Email:</label>
    <input type="text" name="email">
    <label>Password:</label>
    <input type="password" name="password">
    <input type="hidden" name="action" value="login">
</div>
    <div class="center">
    <input type="submit" name="submit" value="Submit" class="btn z-depth-0">
   </div>

   </form>
   </div>


</div>
<?php 
  


?>

<?php include('template/footer.php'); ?>
 


</html>