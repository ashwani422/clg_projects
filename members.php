<?php
	require_once('db/DBconnect.php');

	if(isset($_POST['sbmt'])){

		$member_no = $_POST['no'];
		$member_name = $_POST['name'];
		$member_contact = $_POST['cntct'];
		$member_id = $_POST['id'];

		$sql = "INSERT INTO members (mem_id, mem_nm, contact, id_no) VALUES('$member_no', '$member_name', '$member_contact', '$member_id')";

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
		<h1>Members of the Library</h1>
		<hr color="#BD4D3D" height="2px" />

		<div id="cntnt" onclick="getNAME(this.name);">

			<div id="message"></div>

			<table>
				<tr>
					<th>Serial NO.</th>
					<th>Membership NO.</th>
					<th>Name</th>
					<th>Contact</th>
					<th>Membership ID.</th>
					<th>Delete Row</th>
				</tr>
			</table>
			<br />
			<?php

				require_once('db/DBconnect.php');

				$sql = "SELECT * FROM members";

				if($result = $mysqli->query($sql)){
					 					
					while($show = $result->fetch_assoc()){
						
						$sn = $show['sn'];
						$m_id = $show['mem_id'];
						$m_name = $show['mem_nm'];
						$m_contact = $show['contact'];
						$m_id_no = $show['id_no'];

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

									var a1 = document.createElement('a');
									var a2 = document.createElement('a');
									var a3 = document.createElement('a');
									var a4 = document.createElement('a');
									var a5 = document.createElement('a');
									var a6 = document.createElement('a');

									a1.innerHTML=\"$sn\";
									a2.innerHTML=\"$m_id\";
									a3.innerHTML=\"$m_name\";
									a4.innerHTML=\"$m_contact\";
									a5.innerHTML=\"$m_id_no\";
									
									a6.href = \"\";
									a6.innerHTML = \"Delete\";

									td1.appendChild(a1);
									td2.appendChild(a2);
									td3.appendChild(a3);
									td4.appendChild(a4);
									td5.appendChild(a5);
									td6.appendChild(a6).className = \"delete\";

									a6.name = \"$sn\";

									tr.appendChild(td1);
									tr.appendChild(td2);
									tr.appendChild(td3);
									tr.appendChild(td4);
									tr.appendChild(td5);
									tr.appendChild(td6);

									tbl[0].appendChild(tr);

									

								</script>
							";

					}

				}else
					echo $mysqli->error;

			?>
			<a href="home.php?p=memberform.php" class="btn" >Add New</a>

		</div>

		<script src="js/jquery.js"></script>
		<script>
			
			function getNAME(e){

				e = e || window.event;
				e = e.target || e.srcElement;

				var eVal = e.name;
				var table = "members";

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