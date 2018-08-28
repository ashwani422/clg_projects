<?php
	require_once('db/DBconnect.php');

	if(isset($_POST['sbmt'])){

		$p_language = $_POST['language'];
		$p_paper_name = $_POST['paper_name'];
		$p_dor = $_POST['dor'];
		$p_dop = $_POST['dop'];
		$p_page = $_POST['page'];
		$p_price = $_POST['price'];
		$p_publisher = $_POST['publisher'];

		$sql = "INSERT INTO newspapers (language, name, date_of_reciept, date_of_published, pages, price, publisher) VALUES('$p_language', '$p_paper_name', '$p_dor', '$p_dop', '$p_page', '$p_price', '$p_publisher')";

		if($mysqli->query($sql)){
			echo "Entered successfully";
		}else{
			echo $mysqli->error;
		}

	}

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/memberstyle.css" />
	</head>
	<body>
		<h1>Newspapers in the Library</h1>
		<hr color="#BD4D3D" height="2px" />

		<div id="cntnt" onclick="getNAME(this.name);">
			<table>
				<tr>
					<th>Serial NO.</th>
					<th>Language</th>
					<th>Name</th>
					<th>Date of Receipt</th>
					<th>Date of Published</th>
					<th>Pages</th>
					<th>Price</th>
					<th>Publisher</th>
					<th>Delete</th>
				</tr>
			</table>
			<br />
			<?php

				require_once('db/DBconnect.php');

				$sql = "SELECT * FROM newspapers";

				if($result = $mysqli->query($sql)){
					 					
					while($show = $result->fetch_assoc()){
						
						$sn = $show['sn'];
						$lang = $show['language'];
						$p_name = $show['name'];
						$dor = $show['date_of_reciept'];
						$dop = $show['date_of_published'];
						$p_page = $show['pages'];
						$p_price = $show['price'];
						$P_publisher = $show['publisher'];

						echo "
								<script>
									var tbl = document.getElementsByTagName('tbody');

									var tr = document.createElement('tr');

									var td1 = document.createElement('td');
									var td2 = document.createElement('td');
									var td3 = document.createElement('td');
									var td4 = document.createElement('td');
									var td5 = document.createElement('td');
									var td6 = document.createElement('td');
									var td7 = document.createElement('td');
									var td8 = document.createElement('td');
									var td9 = document.createElement('td');

									var a1 = document.createElement('a');
									var a2 = document.createElement('a');
									var a3 = document.createElement('a');
									var a4 = document.createElement('a');
									var a5 = document.createElement('a');
									var a6 = document.createElement('a');
									var a7 = document.createElement('a');
									var a8 = document.createElement('a');
									var a9 = document.createElement('a');

									a1.innerHTML=\"$sn\";
									a2.innerHTML=\"$lang\";
									a3.innerHTML=\"$p_name\";
									a4.innerHTML=\"$dor\";
									a5.innerHTML=\"$dop\";
									a6.innerHTML=\"$p_page\";
									a7.innerHTML=\"$p_price\";
									a8.innerHTML=\"$P_publisher\";
									
									a9.href = \"\";
									a9.innerHTML = \"Delete\";

									td1.appendChild(a1);
									td2.appendChild(a2);
									td3.appendChild(a3);
									td4.appendChild(a4);
									td5.appendChild(a5);
									td6.appendChild(a6);
									td7.appendChild(a7);
									td8.appendChild(a8);
									td9.appendChild(a9).className = \"delete\";

									a9.name = \"$sn\";

									tr.appendChild(td1);
									tr.appendChild(td2);
									tr.appendChild(td3);
									tr.appendChild(td4);
									tr.appendChild(td5);
									tr.appendChild(td6);
									tr.appendChild(td7);
									tr.appendChild(td8);
									tr.appendChild(td9);

									tbl[0].appendChild(tr);

									

								</script>
							";

					}

				}else
					echo $mysqli->error;

			?>
			<a href="home.php?p=newspaperform.php" class="btn" >Add New</a>

		</div>

		<script src="js/jquery.js"></script>
		<script>
			
			function getNAME(e){

				e = e || window.event;
				e = e.target || e.srcElement;

				var eVal = e.name;
				var table = "newspapers";

				$.ajax({

					method: "post",
					url: "delete.php",
					data: {eValue: eVal, tbl: table}
				})
				.done(function(data){

					$('#message').html(data);
					location.load();
				});
			}
		</script>

	</body>
</html>