<?php
    include("RegistrationValidation.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>User Registeration</title>
        <link rel="icon" href="Data/Icon.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="Data/RegisterStyle.css">
        <script src="Data/Main.js"></script>
    </head>

    <body>
        <script src="Data/Main.js"></script>
        <form name="signup_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
            <div class="BodyX" id="BodyX">
                <div class="Body" id="Body">
                    <div class="BOption">
                        <a href="Default.php">Back</a>
                        <a href="Login.php">Login</a>
                        <a href="Register.php">Register</a>
                    </div>

                    <div class="Header"></div>

                    <div class="Middle" id="Middle">
                        <div class="MTop" id="MTop">
                            <h3>User Registration Form</h3>
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
                                        <td>User Name</td>
                                        <td><input class="user_name" id="user_name" name="user_name" type="text" placeholder="User Name" autofocus></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>User E-mail</td>
                                        <td><input class="user_email" id="user_email" name="user_email" type="email" placeholder="User E-mail"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>User ID</td>
                                        <td><input class="user_ID" id="user_ID" name="user_ID" type="text" placeholder="User ID"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>User Password</td>
                                        <td><input class="user_password" id="user_password" name="user_password" type="password" placeholder="User Password"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Conform Password</td>
                                        <td><input class="user_password_temp" id="user_password_temp" name="user_password_temp" type="password" placeholder="Conform Password"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Phone Number</td>
                                        <td><input class="user_phone_no" id="user_phone_no" name="user_phone_no" type="text" placeholder="Phone Number"></td>
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
