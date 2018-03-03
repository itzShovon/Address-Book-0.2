<?php
    $person_no = htmlspecialchars($_GET['id2']);
    $user_ID = htmlspecialchars($_GET["id"]);

    session_start();
    $_SESSION["user_ID"] = $user_ID;
    $_SESSION["person_no"] = $person_no;

    $user_ID = $_SESSION['user_ID'];
    $person_no = $_SESSION['person_no'];

    try{
        include ("config.php");
        
        
        
        
//        $user_ID= htmlspecialchars($_GET["id"]);
        
        if(isset($_POST['user_submit'])){
            
//            if(($_SESSION["person_no"]) == 4){
            
                if(isset($_POST['person_full_name']))
                    $person_full_name = $_POST['person_full_name'];
                if(isset($_POST['person_nick_name']))
                    $person_nick_name = $_POST['person_nick_name'];
                if(isset($_POST['person_website']))
                    $person_website = $_POST['person_website'];
    //            if(isset($_POST['person_no']))
    //                $person_no = $_POST['person_no'];
            
                $person_no = $_SESSION['person_no'];
            
                if(isset($_POST['person_birthday']))
                    $person_birthday = $_POST['person_birthday'];
                if(isset($_POST['person_address']))
                    $person_address = $_POST['person_address'];
            
            
            
            
                $sql = "UPDATE person_about SET user_ID=?, person_address=?, person_birthday=? WHERE person_no=?";
                $db->prepare($sql)->execute([$user_ID, $person_address, $person_birthday, $person_no]);
            
                $sql = "UPDATE person_contact SET user_ID=?, person_full_name=?, person_nick_name=?, person_website=? WHERE person_no=?";
                $db->prepare($sql)->execute([$user_ID, $person_full_name, $person_nick_name, $person_website, $person_no]);


//                $person_no= htmlspecialchars($_GET["id2"]);

//                $sql = "UPDATE person_about SET user_ID = :user_ID, person_no = :person_no, person_address = :person_address, person_birthday = :person_birthday WHERE person_no = :person_no";
//                $statement = $db->prepare($sql);
//                $statement->bindParam(':user_ID', $_POST['user_ID'], PDO::PARAM_STR);       
//                $statement->bindParam(':person_no', $_POST['person_no'], PDO::PARAM_STR);    
//                $statement->bindParam(':person_address', $_POST['person_address'], PDO::PARAM_STR);
//                // use PARAM_STR although a number  
//                $statement->bindParam(':person_birthday', $_POST['person_birthday'], PDO::PARAM_STR);
//                $count = $statement->execute();
//
//                $sql = "UPDATE person_contact SET user_ID = :user_ID, person_no = :person_no, person_nick_name = :person_nick_name, person_full_name = :person_full_name, person_website = :person_website WHERE person_no = :person_no";
//                $statement = $db->prepare($sql);
//                $statement->bindParam(':user_ID', $_POST['user_ID'], PDO::PARAM_STR);       
//                $statement->bindParam(':person_no', $_POST['person_no'], PDO::PARAM_STR);    
//                $statement->bindParam(':person_nick_name', $_POST['person_nick_name'], PDO::PARAM_STR);
//                // use PARAM_STR although a number  
//                $statement->bindParam(':person_full_name', $_POST['person_full_name'], PDO::PARAM_STR);
//                $statement->bindParam(':person_website', $_POST['person_website'], PDO::PARAM_STR);
//                $count = $statement->execute();

                $message = "Thanks! information is Saved successfully.";
                echo "<script type='text/javascript'>alert('$message');</script>";
                //throw new Exception("Thanks! information is Saved.!");


                header("Location: Document.php?id=".$user_ID);
                exit;
//            }
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>