<?php
    include("DocumentConnection.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Contained Doc.</title>
        <link rel="icon" href="Data/Icon.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="Data/DocumentStyle.css">
    </head>

    <body>
        <div class="Header" id="Header">
            <div class="HeaderX">
                <a class="Menu" href="Default.php">Home</a>
                <a class="Menu" href="Login.php">Login</a>
                <a class="Menu" href="Register.php">Register</a>
                <a class="Menu" href="Search.php?id2=<?php echo $user_ID; ?>">Search</a>
            </div>
        </div>
        <div class="Middle" id="Middle">
            <div class="MDocuments" id="MDocuments">
                <a class="Menu" href="PersonRegister.php?id=<?php echo $user_ID; ?>">Add Document</a><br>
                <div class="MDTable">
                    <div class="MDTCol1">
                        <strong>No.</strong><br>
                        <?php foreach($result2 as $row){ ?>
                        <?php if(empty($row->person_no)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->person_no ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol2">
                        <strong>Name</strong><br>
                        <?php foreach($result3 as $row){ ?>
                        <?php if(empty($row->person_nick_name)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->person_nick_name ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol3">
                        <strong>Website</strong><br>
                        <?php foreach($result3 as $row){ ?>
                        <?php if(empty($row->person_website)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->person_website ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol4">
                        <strong>Birthday</strong><br>
                        <?php foreach($result2 as $row){ ?>
                        <?php if(empty($row->person_birthday)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->person_birthday ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol6">
                        <strong>Action</strong><br>
                        <?php foreach($result2 as $row){ ?>
                        <?php if(empty($row->person_no)){ ?>
                        <br>
                        <?php } ?>
                        
                        <?php $_SESSION["person_no"] = $row->person_no; ?>
                        <?php $_SESSION["user_ID"] = htmlspecialchars($_GET["id"]); ?>
                        
                        
                        
                        <div class="ActionTemp">
                            
                            <a class="DeleteAction" href="Delete.php?id=<?php echo $_SESSION["user_ID"]; ?>&id2=<?php echo $_SESSION["person_no"]; ?>">Delete</a>
                            <a class="DeleteAction" href="Update.php?id=<?php echo $_SESSION["user_ID"]; ?>&id2=<?php echo $_SESSION["person_no"]; ?>">Update</a>
<!--                            <a class="DeleteAction" href="Phone.php?id=<?php echo $_SESSION["user_ID"]; ?>&id2=<?php echo $_SESSION["person_no"]; ?>">Phone</a>-->
                            <a class="DeleteAction" href="AddressPhone.php?id=<?php echo $_SESSION["user_ID"]; ?>&id2=<?php echo $_SESSION["person_no"]; ?>">Address/Phone</a><br>
                        </div>
                        <?php } ?>
                    </div>
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
    </body>

    </html>
