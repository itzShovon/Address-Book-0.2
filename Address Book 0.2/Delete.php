<?php
    require 'config.php';
    $person_no= htmlspecialchars($_GET["id2"]);
    $sql1 = "DELETE FROM person_about WHERE person_no = $person_no";
    $sql2 = "DELETE FROM person_contact WHERE person_no = $person_no";
    $sql3 = "DELETE FROM person_phone WHERE person_no = $person_no";

    try {
        $stmt1 = $db->prepare($sql1);
        $stmt1->bindValue(":person_no", $person_no);

        $stmt1->execute();
        $res1 = $stmt1->rowCount();
        if ($res1 > 0) {
            $_SESSION["errorType"] = "success";
            $_SESSION["errorMsg"] = "Contact deleted successfully.";
        } else {
            $_SESSION["errorType"] = "info";
            $_SESSION["errorMsg"] = "Failed to delete contact.";
        }

        $stmt2 = $db->prepare($sql2);
        $stmt2->bindValue(":person_no", $person_no);

        $stmt2->execute();
        $res2 = $stmt2->rowCount();
        if ($res2 > 0) {
            $_SESSION["errorType"] = "success";
            $_SESSION["errorMsg"] = "Contact deleted successfully.";
        } else {
            $_SESSION["errorType"] = "info";
            $_SESSION["errorMsg"] = "Failed to delete contact.";
        }

        $stmt3 = $db->prepare($sql3);
        $stmt3->bindValue(":person_no", $person_no);

        $stmt3->execute();
        $res3 = $stmt3->rowCount();
        if ($res3 > 0) {
            $_SESSION["errorType"] = "success";
            $_SESSION["errorMsg"] = "Contact deleted successfully.";
        } else {
            $_SESSION["errorType"] = "info";
            $_SESSION["errorMsg"] = "Failed to delete contact.";
        }

    } catch (Exception $ex) {
        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = $ex->getMessage();
    }

    $user_ID= htmlspecialchars($_GET["id"]);

    header("Location: Document.php?id=".$user_ID);
?>
