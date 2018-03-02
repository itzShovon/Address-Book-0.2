<?php
    require 'config.php';
    try{
        
    
        $user_ID = "";
        $user_ID = htmlspecialchars($_GET["id"]);
        $temp =  1;
        
        $i=0;												
        $statement1 = $db->prepare("SELECT user_ID FROM user_info WHERE user_ID=$user_ID");
        $statement1->execute();
        $result1 = $statement1->fetchAll(PDO::FETCH_OBJ);
        
        $statement2 = $db->prepare("SELECT user_ID, person_no, person_birthday FROM person_about WHERE user_ID=$user_ID");
        $statement2->execute();
        $result2 = $statement2->fetchAll(PDO::FETCH_OBJ);
        
        $statement3 = $db->prepare("SELECT person_nick_name, person_website FROM person_contact WHERE user_ID=$user_ID");
        $statement3->execute();												
        $result3 = $statement3->fetchAll(PDO::FETCH_OBJ);
        
        
//        session_start();
//        $_SESSION["user_ID"] = "$user_ID";
//        $person_no = $_SESSION['person_no'];
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }

    foreach($result1 as $row){
        if($row->user_ID == $user_ID)
            $temp = 1;
    }
    if($temp == 0)
        header('Location: Default.php');
?>
