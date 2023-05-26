<?php
session_start();
?>

<html>
<head>
	<title>Login</title>
</head>
<body style="background: gray;">
	<center>
		<h1 style='background:darkorange; color: ghostwhite;'> Login Here </h1>
		<form name="form" method="post" action="Login.php">
		<table border="1" cellpadding="4" cellspacing="5" style='background:slateblue; color:white'>
			<tr><td> User Name: </td>

            <td> <input class="form-control" placeholder="User Name" name="email" type="text" autofocus>  </td> </tr>
            <tr> <td> Password: </td>
            	<td> <input class="form-control"  placeholder="Password" name="pass" type="Password" value=""> </td></tr>
            	<tr> <td colspan="2" align="right"> <input type="submit"  value="login" name="login"> </td>
            	</tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php 
$con = mysqli_connect('localhost', 'root','', 'amazon');

if(isset($_POST['login'])) 
{
	$user_email=$_POST['email'];
	$user_pass=$_POST['pass'];

	$check_user="select * from users WHERE user='$user_email' AND passw='$user_pass'";

  $run=mysqli_query($con,$check_user);
  if(mysqli_num_rows($run))
{
	echo "<script>window.open('welcome.php','_self')</script>";

	$_SESSION['email']=$user_email;
}
else
{
	echo "<script>alert('Email pr password is incorrect!')</script>";

}
}
?>
<a href="regular.php" style="color:white"> Register here to SignUp! </a>
<h1 style='background:greenyellow; color:darkcyan;'> by Devaraj </h1>