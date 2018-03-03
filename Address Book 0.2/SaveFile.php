<?php
    require 'config.php';

    $user_ID = htmlspecialchars($_GET["id"]);


    header('Content-Type: application/excel');
    header('Content-Disposition: attachment; filename="contacts.csv"');

    $file = fopen('php://output', 'w');

//    $file = fopen("contacts.csv","w");

    $statement1 = $db->prepare("SELECT * FROM person_about, person_contact, person_phone");
    $statement1->execute();
    $result1 = $statement1->fetchAll(PDO::FETCH_OBJ);

    fputcsv($file, array("Person No.","Nick Name","Full Name","Website","Phone No.","Address","Birthday"));
    foreach ($result1 as $row){
        fputcsv($file, array($row->person_no, $row->person_nick_name, $row->person_full_name, $row->person_website, $row->person_phone_no, $row->person_address, $row->person_birthday));
    }

    fclose($file);

//    header ('Location: Document.php?id='."$user_ID");
?>