
<?php
session_start();
$id=$_SESSION[id];
$don=mysqli_connect('localhost','root','','users');
if(isset($_POST['sub1']))
{
 echo 'chirag';
 $desp=$_POST['post'];
 $numb=$_POST['mob'];
 $don=mysqli_connect('localhost','root','','users');
$query3="INSERT INTO users.posts_rent (user-id,description,numbers) VALUES ('$id','$desp','$numb')";
$data=mysqli_query($don,$query3) OR die('not');
}
?>
<form  action="examplu.php" method="post">
  <input type="text" name="username"  disabled>
  <br/>
  <textarea name="post" rows="2" cols="10"></textarea>
  <br/>

  <br/> <input type="number" name="mob" required>
  <input type="submit" name="sub1" value="Submit">
</form>
