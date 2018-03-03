<?php
    $user_ID = htmlspecialchars($_GET["id"]);
    $person_no = htmlspecialchars($_GET["p"]);
    $person_phone_no = htmlspecialchars($_GET["n"]);


    require 'config.php';
    $sql = "DELETE FROM person_phone WHERE user_ID=$user_ID AND person_no=$person_no AND person_phone_no=$person_phone_no";

    try {
        $stmt = $db->prepare($sql);

        $stmt->execute();
//        $res = $stmt->rowCount();
//        if ($res > 0) {
//            $_SESSION["errorType"] = "success";
//            $_SESSION["errorMsg"] = "Contact deleted successfully.";
//        } else {
//            $_SESSION["errorType"] = "info";
//            $_SESSION["errorMsg"] = "Failed to delete contact.";
//        }
    } catch (Exception $ex) {
        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = $ex->getMessage();
    }

    header("Location: AddressPhone.php?id=".$user_ID."&id2=".$person_no);
?>