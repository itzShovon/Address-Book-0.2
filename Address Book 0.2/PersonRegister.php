<?php
    include("PersonRegistrationValidation.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Input Data</title>
        <link rel="icon" href="Data/Icon.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="Data/RegisterStyle.css">
        <script src="Data/Main.js"></script>
    </head>

    <body>
        <script src="Data/Main.js"></script>
        <form name="signup_form" method="post" action="PersonRegister.php?id=<?php echo $user_ID;?>" enctype="multipart/form-data">
            <div class="BodyX" id="BodyX">
                <div class="Body" id="Body">
                    <div class="BOption">
                        <a href="Default.php">Homw</a>
                        <a href="Document.php?id=<?php echo $user_ID; ?>">Back</a>
                        <a href="Login.php">Login</a>
                        <a href="Register.php">Register</a>
                    </div>

                    <div class="Header"></div>

                    <div class="Middle" id="Middle">
                        <div class="MTop" id="MTop">
                            <h3>Data Input Form</h3>
                        </div>
                        <div class="MBody" id="MBody">
                            <hr>
                            <form name="Register" target="Index.php" method="post">
                                <table>
                                    <tr>
                                        <th colspan="4">User Information</th>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>Full Name</td>
                                        <td><input class="person_full_name" id="person_full_name" name="person_full_name" type="text" placeholder="Full Name" autofocus></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Nick Name</td>
                                        <td><input class="person_nick_name" id="person_nick_name" name="person_nick_name" type="text" placeholder="Nick Name"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Website</td>
                                        <td><input class="person_website" id="person_website" name="person_website" type="text" placeholder="Website"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>No.</td>
                                        <td><input class="person_no" id="person_no" name="person_no" type="number" placeholder="No."></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Birthday</td>
                                        <td><input class="person_birthday" id="person_birthday" name="person_birthday" type="text" placeholder="Birthday"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Phone No.</td>
                                        <td><input class="person_phone_no" id="person_phone_no" name="person_phone_no" type="text" placeholder="Phone No."></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Address</td>
                                        <td><input class="person_address" id="person_address" name="person_address" type="text" placeholder="Address"></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <hr>
                                <div class="Button">
                                    <button type="submit" name="user_submit" onclick="return RegisterValidation();">Submit</button>
                                    <button type="reset">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="Footer"></div>
                </div>
            </div>
        </form>
    </body>

    </html>
