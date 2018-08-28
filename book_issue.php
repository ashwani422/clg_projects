<?php
	require_once('db/DBconnect.php');

	if(isset($_POST['sbmt'])){

		$issue_to = $_POST['i_t'];
		$quantity = $_POST['quantity'];
		$bn = $_POST['bn'];
		$bt = $_POST['bt'];
		$i_d = $_POST['i_d'];
		$r_d = $_POST['r_d'];
		$stts = $_POST['status'];
		$i_id = $_POST['i_id'];

		$sql = "INSERT INTO book_issue (issued_to, quantity, book_number, book_title, issue_date, return_date, status, issued_id) VALUES('$issue_to', '$quantity', '$bn', '$bt', '$i_d', '$r_d', '$stts', '$i_id')";

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
		<h1>Issued Books of the Library</h1>
		<hr color="#BD4D3D" height="2px" />

		<div id="cntnt" onclick="getNAME(this.name);">
			<table>
				<tr>
					<th>Serial NO.</th>
					<th>Issued To</th>
					<th>No. of Books</th>
					<th>Book No.</th>
					<th>Book Title</th>
					<th>Issue Date</th>
					<th>Returned Date</th>
					<th>Status</th>
					<th>Issue ID.</th>
					<th>Delete Row</th>
				</tr>
			</table>
			<br />
			<?php

				require_once('db/DBconnect.php');

				$sql = "SELECT * FROM book_issue";

				if($result = $mysqli->query($sql)){
					 					
					while($show = $result->fetch_assoc()){
						
						$sn = $show['sn'];
						$issue_to = $show['issued_to'];
						$quantity = $show['quantity'];
						$bn = $show['book_number'];
						$bt = $show['book_title'];
						$i_d = $show['issue_date'];
						$r_d = $show['return_date'];
						$stts = $show['status'];
						$i_id = $show['issued_id'];

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
									var td9 = document.createElement('td');
									var td10 = document.createElement('td');

									var a1 = document.createElement('a');
									var a2 = document.createElement('a');
									var a3 = document.createElement('a');
									var a4 = document.createElement('a');
									var a5 = document.createElement('a');
									var a6 = document.createElement('a');
									var a7 = document.createElement('a');
									var a8 = document.createElement('a');
									var a9 = document.createElement('a');
									var a9 = document.createElement('a');
									var a10 = document.createElement('a');

									a1.innerHTML=\"$sn\";
									a2.innerHTML=\"$issue_to\";
									a3.innerHTML=\"$quantity\";
									a4.innerHTML=\"$bn\";
									a5.innerHTML=\"$bt\";
									a6.innerHTML=\"$i_d\";
									a7.innerHTML=\"$r_d\";
									a8.innerHTML=\"$stts\";
									a9.innerHTML=\"$i_id\";
									
									a10.href = \"\";
									a10.innerHTML = \"Delete\";

									td1.appendChild(a1);
									td2.appendChild(a2);
									td3.appendChild(a3);
									td4.appendChild(a4);
									td5.appendChild(a5);
									td6.appendChild(a6);
									td7.appendChild(a7);
									td8.appendChild(a8);
									td9.appendChild(a9);
									td10.appendChild(a10).className = \"delete\";

									a10.name = \"$sn\";

									tr.appendChild(td1);
									tr.appendChild(td2);
									tr.appendChild(td3);
									tr.appendChild(td4);
									tr.appendChild(td5);
									tr.appendChild(td6);
									tr.appendChild(td7);
									tr.appendChild(td8);
									tr.appendChild(td9);
									tr.appendChild(td9);
									tr.appendChild(td10);

									tbl[0].appendChild(tr);

									

								</script>
							";

					}

				}else
					echo $mysqli->error;

			?>
			<a href="home.php?p=add_issue_book.php" class="btn" >Add New</a>

		</div>

		<script src="js/jquery.js"></script>
		<script>
			
			function getNAME(e){

				e = e || window.event;
				e = e.target || e.srcElement;

				var eVal = e.name;
				var table = "book_issue";

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