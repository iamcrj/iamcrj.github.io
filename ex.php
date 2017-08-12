<?php
if(isset($_POST['sub']))
{
$username=$_POST['user'];
$password=$_POST['pass'];
echo md5($password);
}

?>
<form action="ex.php" method="POST">
Username:<input type="text" name="user"/>
Password :<input type="password" name="pass" />
<input type="submit" name="sub"/>
</form>