<?php include('server.php') ?>
<!Doctype html>
    <html>
        <head>
            <title>Sign-Up</title>
            <script>
                function myFunction(){
                    var x , text
                    // get the value of the input field with id ="validate"
                    x = document.getElementById("validate").nodeValue;
                    if(isNaN(x)){
                        text = "Input invalid"
                    }  
                    else{
                        text = "input valid";
                    }
                    document.getElementById("demo").innerHTML = text;
                }
                
            </script>

            <style>
                div{
                    margin-left: 350px;
                    margin-right: 350px;
                }

                input[type="submit"] {
                padding: 9px;
                width: 13em;
                height:3em;
                }
            </style>
        </head>

    <body>
        <div> 
            <form name ="myForm" action="SignupForm.php" onsubmit="return validatForm()" method="POST">
                <table>
                    <tr>
                        <td><img src=".\images\logo.png" alt="logo"></td>
                    </tr>

                        <br><br>
                
                
                    <tr>
                        <td>Full Name:</td>
                        <td><input id="validate" type="text" name="username" size="35" required ></td>
                    </tr>  
                        
                    <tr>
                        <td>Email Address</td>
                        <td><input type="email" name="email" size="35" required></td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password_1" size="35" required></td>
                    </tr>

                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password" name="password_2" size="35" required></td>
                    </tr>

                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    
                    <tr>
                        <td><input type="submit" value="Sign-Up" name="reg_user"></td>
                        <td>
                            <p>Already a member? <a href="medstar.php">Sign in</a></p>                                   
                        </td>
                    </tr>
                    
                </table>
                <p id="demo"></p>
            </form>
        </div>
    </body>


</html>