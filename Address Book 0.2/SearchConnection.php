<?php
    require 'config.php';

    session_start();
    $user_ID = $_SESSION['user_ID'];
    $person_no = $_SESSION['person_no'];

    try{        
        if(empty($_POST['person_no'])){
            $person_no = htmlspecialchars($_GET["id2"]);
            $error_message = ("Give person no");
            echo "<script type='text/javascript'>alert('$error_message');</script>";
        }
        else{
            $person_no = $_POST['person_no'];
        }
        $statement1 = $db->prepare("SELECT person_address FROM person_about WHERE user_ID = $user_ID AND person_no = $person_no");
        $statement1->execute();	
        $result1 = $statement1->fetchAll(PDO::FETCH_OBJ);

        $statement2 = $db->prepare("SELECT person_birthday FROM person_about WHERE user_ID = $user_ID AND person_no = $person_no");
        $statement2->execute();	
        $result2 = $statement2->fetchAll(PDO::FETCH_OBJ);

        $statement3 = $db->prepare("SELECT person_full_name FROM person_contact WHERE user_ID = $user_ID AND person_no = $person_no");
        $statement3->execute();	
        $result3 = $statement3->fetchAll(PDO::FETCH_OBJ);

        $statement4 = $db->prepare("SELECT person_nick_name FROM person_contact WHERE user_ID = $user_ID AND person_no = $person_no");
        $statement4->execute();	
        $result4 = $statement4->fetchAll(PDO::FETCH_OBJ);

        $statement5 = $db->prepare("SELECT person_website FROM person_contact WHERE user_ID = $user_ID AND person_no = $person_no");
        $statement5->execute();	
        $result5 = $statement5->fetchAll(PDO::FETCH_OBJ);

        $statement6 = $db->prepare("SELECT person_phone_no FROM person_phone WHERE user_ID = $user_ID AND person_no = $person_no");
        $statement6->execute();	
        $result6 = $statement6->fetchAll(PDO::FETCH_OBJ);
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>
