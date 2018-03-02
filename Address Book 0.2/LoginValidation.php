<?php
    try{
        include ("config.php");
        
        if(isset($_POST['SISubmit'])){
            if(empty($_POST['user_ID']) AND empty($_POST['user_password'])){
                $error_message = ("Give your ID/E-mail and your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_ID'])){
                $error_message = ("Give your ID/E-mail");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_password'])){
                $error_message = ("Give your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else{
                $user_ID = "";
                $user_password = "";
                
                if(isset($_POST['user_ID']))
                    $user_ID = $_POST['user_ID'];
                if(isset($_POST['user_password']))
                    $user_password = $_POST['user_password'];
                
                $i=0;
                $statement = $db->prepare("SELECT user_password FROM user_info WHERE user_ID=$user_ID OR user_email=$user_ID");
                $statement->execute();
                $result = $statement->fetch();
                foreach($result as $row){
                    if($user_password == $row){
                        header ('Location: Document.php?id='."$user_ID");
                    }
                    else
                        header ('Location: Login.php');
                }
            }
            
            session_start();
            $_SESSION['user_ID'] = $user_ID;
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>
