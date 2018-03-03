<?php
    require 'config.php';

    $user_ID = htmlspecialchars($_GET["id"]);
    $person_no = htmlspecialchars($_GET["id2"]);

    session_start();
//    $user_ID = $_SESSION['user_ID'];
//    $person_no = $_SESSION['person_no'];





    try{
        if(empty($_POST['person_phone_no'])){
//            $person_no = htmlspecialchars($_GET["id2"]);
//            $error_message = ("Give phone no");
//            echo "<script type='text/javascript'>alert('$error_message');</script>";
        }
        else{
            $person_phone_no = $_POST['person_phone_no'];
            $_SESSION['person_phone_no'] = $person_phone_no;
        }
        $statement1 = $db->prepare("SELECT person_address FROM person_about WHERE user_ID = $user_ID and person_no = $person_no");
        $statement1->execute();	
        $result1 = $statement1->fetchAll(PDO::FETCH_OBJ);

        $statement6 = $db->prepare("SELECT user_ID, person_no, person_phone_no FROM person_phone WHERE user_ID = $user_ID and person_no = $person_no");
        $statement6->execute();	
        $result6 = $statement6->fetchAll(PDO::FETCH_OBJ);
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }

?>