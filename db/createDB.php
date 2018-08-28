<?php
    
    $host = "localhost";    //Host name
    $user = "root"; //Database iser name
    $password = ""; //Database password
    $DBname = "lmsDB";  //Database name
    
    if($mysqli = new mysqli($host, $user, $password)){  //To create connection to the database server.
        echo "Connected successfully.<br/>";
        
        if($mysqli->query('CREATE DATABASE '.$DBname)){
            echo "Database created successfully<br/>";
            
            $sql = "CREATE TABLE $DBname.users(
                    `sn` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    `usrnm` VARCHAR(50) NOT NULL,
                    `password` VARCHAR(100) NOT NULL
                    )";
            
            if($mysqli->query($sql)){
                echo "Table users created successfully.<br/>";
                
                $user = array(1=>"admin", 2=>"user");
                $pass = array(1=>"admin", 2=>"user");

                for($i=1; $i<3; $i++){
                    $hash = password_hash($pass[$i],PASSWORD_BCRYPT); //To generate a hash of enterd password

                    $sql1 = "INSERT INTO $DBname.users(usrnm, password)VALUES('$user[$i]', '$hash')";                
                    if($mysqli->query($sql1)){
                        echo "Data entered into the table successfully.<br/>";
                    }else{
                        echo $mysqli->error;
                    }
                }
            }else{
                echo $mysqli->error;
            }
        }else{
            echo $mysqli->error;
        }
        
    }else{
        echo $mysqli->connect_error;
    }

?>