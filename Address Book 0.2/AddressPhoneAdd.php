<?php
    require 'config.php';

    session_start();
    $user_ID = $_SESSION['user_ID'];
    $person_no = $_SESSION['person_no'];
//    $person_phone_no = $_SESSION['person_phone_no'];

    if(isset($_POST['user_submit'])){
        if(isset($_POST['person_phone_no']))
            $person_phone_no = $_POST['person_phone_no'];

        $statement = $db->prepare("INSERT INTO person_phone(
            user_ID,
            person_no, 
            person_phone_no
        ) 
        VALUES (?,?,?)");
        $statement->execute(array(		
            $user_ID,
            $person_no,
            $person_phone_no
        ));
    }
    header("Location: AddressPhone.php?id=".$user_ID."&id2=".$person_no);
?>