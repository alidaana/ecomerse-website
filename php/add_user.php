<?php
	session_start();
    include('../config/connection.php');

    if(isset($_POST["email"]) && $_POST["email"] != ""){
		$email = $_POST["email"];
	}else{
		die("Don't try to mess around bro email ;)");
	}

	if(isset($_POST["password"]) && $_POST["password"] != "" && $_POST['confirm_password']==$_POST['password']){
		$password = hash('sha256', $_POST['password']);
	}else{
		die("Don't try to mess around bro password;)");
	}

    if(isset($_POST["name"]) && $_POST["name"] != ""){
		$username = $_POST['name'];
	}else{
		die("Don't try to mess around bro name;)");
	}

    
    $x = $conn->prepare("SELECT * FROM `users` WHERE `user_email`= ?");
    $x->bind_param("s",$email);
    $x->execute();
    $result = $x->get_result();
    $user = $result->fetch_assoc();

    if($user)
    {
        header("Location:../creat_account.php");
    }
    else{
        $x = $conn->prepare("INSERT INTO users (user_name, user_email, user_password) VALUES (?, ?, ?)");
		$x->bind_param("sss", $username,$email,$password);
		$x->execute();
		$x->close();
		

		$x = $conn->prepare("SELECT * FROM `users` WHERE `user_email`= ?");
		$x->bind_param("s",$email);
		$x->execute();
		$result = $x->get_result();
		$user = $result->fetch_assoc();

		$_SESSION['user_id'] = $user['user_id'];
		$conn->close();
		
		header("Location:../user_index.php");
    }
?>