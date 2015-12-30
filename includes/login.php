<?php
require "init.php";
require_once 'CamsDatabase.php';
require_once 'users.php';
if (!empty($_POST)){
	$username = htmlspecialchars($_POST['userid']);
    $password = htmlspecialchars($_POST['password']);	
	if (empty($username) || empty($password)){
		$_SESSION["login_error"] = 'User Name and Password cannot be blank';
	} else if (!userExists($username)){
		$_SESSION["login_error"] = 'User Does not exist.';
	} else{
		$user=userLogin($username, $password);
		if (!$user){
			$_SESSION["login_error"] = 'incorrect password';	
		}else{
			$_SESSION['FirstName'] = $user['FirstName'];
			$_SESSION['LastName'] = $user['LastName'];
			$_SESSION['userid'] = $user['userid'];
			$_SESSION['Email'] = $user['Email'];
            $_SESSION['Empno'] = $user['Empno'];
			$_SESSION['Phone'] = $user['Phone'];
            $_SESSION['Role'] = $user['Role'];
			$_SESSION['Agy'] = $user['Agy'];
            $_SESSION['Dpt'] = $user['Dpt'];
		}
	}
header('Location: ../index.php');
 
}
?>
