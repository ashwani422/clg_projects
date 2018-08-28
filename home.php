<?php
	
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/hmstyle.css" />
    </head>
    <body>
        <div id="navBar">
            <ul>
            	<li><a href="home.php">Dashboard</a></li>
            	<li><a href="home.php?p=members.php">Members</a></li>
            	<li><a href="home.php?p=books.php">Books</a></li>
            	<li><a href="home.php?p=newspapers.php">Newspapers</a></li>
            	<li><a href="home.php?p=magazins.php">Magazins</a></li>
            	<a class="lobtn" href="home.php?p=logout">Log out</a>
            </ul>
        </div>

        <?php
        	if(isset($_GET['p'])){
        		if($_GET['p'] == "logout"){
        			if(session_destroy() || session_cache_expire()){
                        header('location: index.php');
                    }
        		}
        	}

        ?>

        <div id="content">

        	<?php

	        	if(isset($_GET['p'])){
	        		$page = $_GET['p'];

	        		if(file_exists($page))
	        			include($page);

	        		else
	        			echo "Page not found";

	        	}
	        	else
	        	 	include("dashboard.php");

        	?>

        </div>
    </body>
</html>