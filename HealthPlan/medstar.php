<?php include('server.php') ?>
<!Doctype html>
    <html>
        <head>
            <title>Login- MedStar</title>
           
            <style>
               
               body{
                    margin-left: 140px;
                    margin-right: 140px;
                }
                
                
                #blue{
                    background-color: lightblue;    
                }

                #lightblue{
                    background-color:aliceblue;
                        
                }

                p{
                    margin-right: 20px;
                }

                p.yes{
                    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                    font-size: 25px;
                }

                p.wd{
                    font-family:cursive;
                    font-size: 15px;
                }

                input[type="submit"] {
                padding: 9px;
                width: 10em;
                height:3em;
                }
            </style>
        </head>

        <body>
            welcome<? php echo $_GET["fname"];?

            <div id="blue">
                <form name="myForm" action ="medstar.php" onsubmit = "return validateForm()" method="POST">
                    <table>
                        <tr>
                            <td>
                                <img src=".\images\youthtech.png" alt="logo" usemap="#myShape">
                                    <map name ="myShape">
                                        <area shape ="rect" coords = "1,88,208,1" href="http://MedStarFamilyChoice.com" target="_blank"></a>
                                    </map>
                            </td>
                        </tr>
                    </table>
            </div>
                    <br>
                    
                    <table align="left">
                        <tr>
                            <td><img src =".\images\Capture.png" alt="capture"></td>
                        </tr>    
                    </table>

                    <p id = "demo"></p>  
                        <script>
                            var d = new Date(); 
                            document.getElementsById("demo").innerHTML = d;
                        </script>
                    
                    
                <div id="lightblue">
                    <table align="center">
                        <tr>
                            <td><img src =".\images\typo.png" alt="capture"></td>
                        </tr>
                        
                         <tr>
                            <td>Username</td>
                         </tr>
                         
                         <tr>
                            <td><input type="text" name ="username" size ="35" required></td>
                         </tr>

                        <tr>
                            <td>Password</td>
                        </tr>

                        <tr>
                            <td><input type="password" name ="password" size ="35" required></td>
                        </tr>

                        <tr>
                            <td><input type ="submit" value="Log in" name="login_user"></td>
                                <tr>
                                    <td>
                                        <a href="forgot-password.php">Forgot Password</a> 
                                       | <a href="./Username.html">Forgot Username</a> 
                                    </td>
                                </tr>        
                        </tr>
                    </div>

                        <tr>
                            <td>
                                <p class="wd">First Time Users</p>
                                <p><a href="SignupForm.php" target = "_blank">Click here to sign up</a></p>
                            </td>
                        </tr>
                        </table>
                </form>       
            </body>
            <p>&copy; 1996-2020 corner Corporations All Rights Reserved</p>  
    </html>