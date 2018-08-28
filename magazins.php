<?php
	require_once('db/DBconnect.php');

	if(isset($_POST['sbmt'])){

		$m_name = $_POST['name'];
		$dor = $_POST['dor'];
		$dop = $_POST['dop'];
		$magazin_page = $_POST['page'];
		$magazin_price = $_POST['price'];
		$magazin_publisher = $_POST['publisher'];

		$sql = "INSERT INTO magzins (name, date_of_receipt, date_of_published, pages, price, publisher) VALUES('$m_name', '$dor', '$dop', '$magazin_page', '$magazin_price', '$magazin_publisher')";

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
		<h1>Magazins in the Library</h1>
		<hr color="#BD4D3D" height="2px" />

		<div id="cntnt" onclick="getNAME(this.name);">
			<table>
				<tr>
					<th>Serial NO.</th>
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

				$sql = "SELECT * FROM magzins";

				if($result = $mysqli->query($sql)){
					 					
					while($show = $result->fetch_assoc()){
						
						$sn = $show['sn'];
						$m_name = $show['name'];
						$dor = $show['date_of_receipt'];
						$dop = $show['date_of_published'];
						$magazin_page = $show['pages'];
						$magazin_price = $show['price'];
						$magazin_publisher = $show['publisher'];

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

									var a1 = document.createElement('a');
									var a2 = document.createElement('a');
									var a3 = document.createElement('a');
									var a4 = document.createElement('a');
									var a5 = document.createElement('a');
									var a6 = document.createElement('a');
									var a7 = document.createElement('a');
									var a8 = document.createElement('a');

									a1.innerHTML=\"$sn\";
									a2.innerHTML=\"$m_name\";
									a3.innerHTML=\"$dor\";
									a4.innerHTML=\"$dop\";
									a5.innerHTML=\"$magazin_page\";
									a6.innerHTML=\"$magazin_price\";
									a7.innerHTML=\"$magazin_publisher\";
									
									a8.href = \"\";
									a8.innerHTML = \"Delete\";

									td1.appendChild(a1);
									td2.appendChild(a2);
									td3.appendChild(a3);
									td4.appendChild(a4);
									td5.appendChild(a5);
									td6.appendChild(a6);
									td7.appendChild(a7);
									td8.appendChild(a8).className = \"delete\";

									a8.name = \"$sn\";

									tr.appendChild(td1);
									tr.appendChild(td2);
									tr.appendChild(td3);
									tr.appendChild(td4);
									tr.appendChild(td5);
									tr.appendChild(td6);
									tr.appendChild(td7);
									tr.appendChild(td8);

									tbl[0].appendChild(tr);

									

								</script>
							";

					}

				}else
					echo $mysqli->error;

			?>
			<a href="home.php?p=magazinform.php" class="btn" >Add New</a>

		</div>

		<script src="js/jquery.js"></script>
		<script>
			
			function getNAME(e){

				e = e || window.event;
				e = e.target || e.srcElement;

				var eVal = e.name;
				var table = "magzins";

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