<?php
	require_once('db/DBconnect.php');

	if(isset($_POST['sbmt'])){

		$b_no = $_POST['bn'];
		$b_tit = $_POST['bt'];
		$i_date = $_POST['i_d'];
		$due_dy = $_POST['d_d'];
		$r_date = $_POST['r_d'];
		$mem = $_POST['mem'];
		$qntty = $_POST['qntty'];
		$fn = $_POST['fn'];
		$stts = $_POST['stts'];

		$sql = "INSERT INTO returned (book_number, book_title, issue_date, due_days, return_date, member, quantity, fine, status) VALUES('$b_no', '$b_tit', '$i_date', '$due_dy', '$r_date', '$mem', '$qntty', '$fn', '$stts')";

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
		<h1>Returned Books Status</h1>
		<hr color="#BD4D3D" height="2px" />

		<div id="cntnt" onclick="getNAME(this.name);">
			<table>
				<tr>
					<th>Serial NO.</th>
					<th>Book No.</th>
					<th>Book Title</th>
					<th>Issue Date</th>
					<th>Due Days</th>
					<th>Return Date</th>
					<th>Member</th>
					<th>Book Quantity</th>
					<th>Fine</th>
					<th>Status</th>
					<th>Delete</th>
				</tr>
			</table>
			<br />
			<?php

				require_once('db/DBconnect.php');

				$sql = "SELECT * FROM returned";

				if($result = $mysqli->query($sql)){
					 					
					while($show = $result->fetch_assoc()){
						
						$sn = $show['sn'];
						$b_no = $show['book_number'];
						$b_tit = $show['book_title'];
						$i_date = $show['issue_date'];
						$due_dy = $show['due_days'];
						$r_date = $show['return_date'];
						$mem = $show['member'];
						$qntty = $show['quantity'];
						$fn = $show['fine'];
						$stts = $show['status'];

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
									var td10 = document.createElement('td');
									var td11 = document.createElement('td');

									var a1 = document.createElement('a');
									var a2 = document.createElement('a');
									var a3 = document.createElement('a');
									var a4 = document.createElement('a');
									var a5 = document.createElement('a');
									var a6 = document.createElement('a');
									var a7 = document.createElement('a');
									var a8 = document.createElement('a');
									var a9 = document.createElement('a');
									var a10 = document.createElement('a');
									var a11 = document.createElement('a');

									a1.innerHTML=\"$sn\";
									a2.innerHTML=\"$b_no\";
									a3.innerHTML=\"$b_tit\";
									a4.innerHTML=\"$i_date\";
									a5.innerHTML=\"$due_dy\";
									a6.innerHTML=\"$r_date\";
									a7.innerHTML=\"$mem\";
									a8.innerHTML=\"$qntty\";
									a9.innerHTML=\"$fn\";
									a10.innerHTML=\"$stts\";
									
									a11.href = \"\";
									a11.innerHTML = \"Delete\";

									td1.appendChild(a1);
									td2.appendChild(a2);
									td3.appendChild(a3);
									td4.appendChild(a4);
									td5.appendChild(a5);
									td6.appendChild(a6);
									td7.appendChild(a7);
									td8.appendChild(a8);
									td9.appendChild(a9);
									td10.appendChild(a10);
									td11.appendChild(a11).className = \"delete\";

									a11.name = \"$sn\";

									tr.appendChild(td1);
									tr.appendChild(td2);
									tr.appendChild(td3);
									tr.appendChild(td4);
									tr.appendChild(td5);
									tr.appendChild(td6);
									tr.appendChild(td7);
									tr.appendChild(td8);
									tr.appendChild(td9);
									tr.appendChild(td10);
									tr.appendChild(td11);

									tbl[0].appendChild(tr);

									

								</script>
							";

					}

				}else
					echo $mysqli->error;

			?>
			<a href="home.php?p=book_return_form.php" class="btn" >Add New</a>

		</div>

		<script src="js/jquery.js"></script>
		<script>
			
			function getNAME(e){

				e = e || window.event;
				e = e.target || e.srcElement;

				var eVal = e.name;
				var table = "returned";

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