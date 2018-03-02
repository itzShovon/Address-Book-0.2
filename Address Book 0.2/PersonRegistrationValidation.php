<?php
    include ("config.php");

    try{
        
        $user_ID = htmlspecialchars($_GET["id"]);
        
        
        $statement1 = $db->prepare("SELECT user_ID FROM user_info");
        $statement1->execute();												
        $result1 = $statement1->fetchAll(PDO::FETCH_OBJ);
        
        $statement2 = $db->prepare("SELECT user_ID, person_no, person_birthday, person_address FROM person_about");
        $statement2->execute();
        $result2 = $statement2->fetchAll(PDO::FETCH_OBJ);
        
        $statement3 = $db->prepare("SELECT user_id, person_no, person_full_name, person_nick_name, person_website FROM person_contact");
        $statement3->execute();												
        $result3 = $statement3->fetchAll(PDO::FETCH_OBJ);
        
        $statement4 = $db->prepare("SELECT user_id, person_no, person_phone_no FROM person_phone");
        $statement4->execute();												
        $result4 = $statement4->fetchAll(PDO::FETCH_OBJ);
        
        
        
        
        
        
    
        if(isset($_POST['user_submit'])){
            
                if(isset($_POST['person_full_name']))
                    $person_full_name = $_POST['person_full_name'];
                if(isset($_POST['person_nick_name']))
                    $person_nick_name = $_POST['person_nick_name'];
                if(isset($_POST['person_website']))
                    $person_website = $_POST['person_website'];
                if(isset($_POST['person_no']))
                    $person_no = $_POST['person_no'];
                if(isset($_POST['person_birthday']))
                    $person_birthday = $_POST['person_birthday'];
                if(isset($_POST['person_phone_no']))
                    $person_phone_no = $_POST['person_phone_no'];
                if(isset($_POST['person_address']))
                    $person_address = $_POST['person_address'];
            
            
            
                
                $statement = $db->prepare("INSERT INTO person_about 
				(
					user_ID,
					person_no, 
					person_birthday,
                    person_address
				) 
				VALUES (?,?,?,?)");
				$statement->execute(array(		
					$user_ID,
					$person_no,
					$person_birthday,
                    $person_address
				));
                
                $statement = $db->prepare("INSERT INTO person_contact 
				(
					user_ID,
					person_no, 
					person_full_name,
                    person_nick_name,
                    person_website
				) 
				VALUES (?,?,?,?,?)");
				$statement->execute(array(		
					$user_ID,
					$person_no,
					$person_full_name,
                    $person_nick_name,
                    $person_website
				));
                
                $statement = $db->prepare("INSERT INTO person_phone 
				(
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
