<?php
    try{
        include ("config.php");
    
        if(isset($_POST['user_submit'])){
            if(empty($_POST['user_email'])){
                $error_message = ("Give your email ID");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_ID'])){
                $error_message = ("Give your ID");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_password'])){
                $error_message = ("Give your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_password_temp'])){
                $error_message = ("Re-write your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(($_POST['user_password']) != ($_POST['user_password_temp'])){
                $error_message = ("Password didn't match");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_name'])){
                $error_message = ("Give your name");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_phone_no'])){
                $error_message = ("Give your phone_no");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else{
                if(isset($_POST['user_name']))
                    $user_name = $_POST['user_name'];
                if(isset($_POST['user_email']))
                    $user_email = $_POST['user_email'];
                if(isset($_POST['user_ID']))
                    $user_ID = $_POST['user_ID'];
                if(isset($_POST['user_phone_no']))
                    $user_phone_no = $_POST['user_phone_no'];
                if(isset($_POST['user_password']))
                    $user_password = $_POST['user_password'];
                
                $statement = $db->prepare("INSERT INTO user_info 
				(
					user_ID,
					user_password, 
					user_name, 
					user_email,
                    user_phone_no
				) 
				VALUES (?,?,?,?,?)");
				$statement->execute(array(		
					$user_ID,
					$user_password,
					$user_name,
					$user_email,
                    $user_phone_no
				));
                
				$message = "Thanks! information is Saved successfully.";
				echo "<script type='text/javascript'>alert('$message');</script>";
				//throw new Exception("Thanks! information is Saved.!");
                
                header("Location: Document.php?id=".$user_ID);
                exit;
            }
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>
