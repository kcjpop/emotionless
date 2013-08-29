<?php 
	include('database.php');
	$connect=mysqli_connect($HOST, $USERNAME, $PASSWORD, $DATABASE) or die('cannot connect to database!');
	$sql="INSERT INTO `users` (`id`, `username`, `password`, `email`)
			VALUES (NULL, '$_POST[username]', md5($_POST[password]), '$_POST[email]')";
	if (isset($_POST['username'])){
		if (isset($_POST['password'])){
			if(isset($_POST['password-retype'])){
				if ($_POST['password']==$_POST['password-retype']){
					if (isset($_POST['email'])){
						$query=mysqli_query($connect, $sql) or die('fail');
						echo 'success!';
					}
					else{
						echo 'email fail';
					}
				}
				else{
					echo 'pwd-retype dont match';
				}
			}
			else{
				echo 'pwd-retype fail';
			}
		}
		else{
			echo 'pwd fail';
		}
	}
	else{
		echo 'username fail';
	}
?>
