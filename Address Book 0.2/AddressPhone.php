<?php include 'AddressPhoneConnection.php' ?>

<!DOCTYPE html>
<html>

<head>
    <title>Home Page...</title>
    <link rel="icon" href="Data/Icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="Data/SearchStyle.css">
</head>

<body>
    <div class="BodyX">
        <div class="Body">
            <div class="Header">
                <div class="HeaderX">
                    <a class="Menu" href="Default.php">Home</a>
                    <a class="Menu" href="Document.php?id=<?php echo $_SESSION["user_ID"]; ?>">Back</a>
                    <a class="Menu" href="Login.php">Login</a>
                    <a class="Menu" href="Register.php">Register</a>
                </div>
            </div>
            <div class="Middle">
                <div class="MSearchBar">
                    <form name="address_phone_form" method="post" action="AddressPhoneAdd.php" enctype="multipart/form-data">
                        <input class="person_phone_no" id="person_phone_no" name="person_phone_no" type="text" placeholder="Add Phone No." autofocus>
                        <button type="submit" name="user_submit">Add</button>
                    </form>
                </div>

                <div class="MSResult">
                    <div class="Info">
                        <h4>Address</h4>
                        <?php foreach($result1 as $row){ ?>
                        <p>
                            <?php echo $row->person_address; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>Phone No.</h4>
                        <?php foreach($result6 as $row){ ?>
                        <p>
                            <?php echo $row->person_phone_no; ?>
                        </p>
                        <?php
                            $_SESSION['user_ID'] = $user_ID;
                            $_SESSION['person_no'] = $person_no;
//                            $_SESSION['person_phone_no'] = $person_phone_no;
                        ?>
                        <a href="AddressPhoneDelete.php?id=<?php echo $row->user_ID; ?>&p=<?php echo $row->person_no; ?>&n=<?php echo $row->person_phone_no; ?>" class="phone_delete">Delete</a>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <div class="Footer">
                <div class="FLeft">
                    <h3>Contact Me</h3>
                    <a href="http://github.com/itzShovon"><img src="Data/github.svg"></a>
                    <a href="mailto:zahidul.cse14@gmail.com?Subject=Hello%20again" target="_top"><img src="Data/Gmail_Icon.png"></a>
                </div>
                <div class="FRight">
                    <p>Copyright by &copy; Shovon</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
