<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/indxstyle.css" />
    </head>
    <body>
        <center>
            <h1>Library Management System</h1>
            
            <?php
                require_once("db/DBconnect.php");

                    if(isset($_POST['sbmt'])){
                
                        $sql = "SELECT usrnm, password FROM users";

                        $result = $mysqli->query($sql);

                        while($show = $result->fetch_assoc()){
                            $Duser = $show['usrnm'];    //User stored in database.
                            $Dpass = $show['password']; //Password stored in database.

                            echo $Duser;
                            echo $Dpass;

                            $Euser = $_POST['usrnm'];   //Username entered.
                            $Epass = $_POST['pswrd'];   //Password entered.

                            
                            if($Duser == $Euser){
                                if(password_verify($Epass, $Dpass)){    //Stored password goes after the entered password.

                                    session_start();
                                    header('location: home.php');
                                }else{
                                    echo "Password not match.<br/>";
                                }

                            }else{
                                echo "Username not matched.<br/>";
                            }

                        }
                    }
                    
            ?>

            <div id="box">
                <h3>Log in</h3>
                <br/>
                <form action="index.php" method="POST" autocomplete="off">
                    <label>Username:</label><br/>
                    <input type="text" name="usrnm" required /><br />
                    <br />
                    <label>Password:</label><br/>
                    <input type="password" name="pswrd" required /><br />
                    <br/>
                    <label>Forgot Password-></label>&nbsp;<a href="">Click here</a><br/>
                    <br/>
                    <input type="submit" value="LogIn" name="sbmt" />
                </form>
            </div>
	   </center>
    </body>
</html>
