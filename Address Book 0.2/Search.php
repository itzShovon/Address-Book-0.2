<?php include 'SearchConnection.php' ?>

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
                    <form name="search_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                        <input class="person_no" id="person_no" name="person_no" type="text" placeholder="Search by Person No." autofocus>
                        <button type="submit" name="user_submit">Search</button>
                    </form>
                </div>

                <div class="MSResult">
                    <div class="Info">
                        <h4>Nick Name</h4>
                        <?php foreach($result4 as $row){ ?>
                        <p>
                            <?php echo $row->person_nick_name; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>Full Name</h4>
                        <?php foreach($result3 as $row){ ?>
                        <p>
                            <?php echo $row->person_full_name; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>Website</h4>
                        <?php foreach($result5 as $row){ ?>
                        <p>
                            <?php echo $row->person_website; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>Birthday</h4>
                        <?php foreach($result2 as $row){ ?>
                        <p>
                            <?php echo $row->person_birthday; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>Phone No.</h4>
                        <?php foreach($result6 as $row){ ?>
                        <p>
                            <?php echo $row->person_phone_no; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>Address</h4>
                        <?php foreach($result1 as $row){ ?>
                        <p>
                            <?php echo $row->person_address; ?>
                        </p>
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
