<?php

	require_once('db/DBconnect.php');

	if(isset($_POST['sbmt'])){

		$isbn_number = $_POST['isbn_no'];
		$book_title = $_POST['title'];
		$book_type = $_POST['type'];
		$author_name = $_POST['name'];
		$book_quantity = $_POST['quantity'];
		$purchase_date = $_POST['date'];
		$book_edition = $_POST['edition'];
		$book_price = $_POST['price'];
		$book_pages = $_POST['pages'];
		$book_publisher = $_POST['publisher'];

		$sql = "INSERT INTO books (isbn_no, book_title, book_type, author_name, quantity, purchaase_date, edition, price, pages, publisher) VALUES('$isbn_number', '$book_title', '$book_type', '$author_name', '$book_quantity', '$purchase_date', '$book_edition', '$book_price', '$book_pages', '$book_publisher')";

		if($mysqli->query($sql)){
			echo "Entered successfully";
		}else
			echo "Not entered";

	}

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/memberstyle.css" />
	</head>
	<body>
		<h1>Books in the Library</h1>
		<hr color="#BD4D3D" height="2px" />

		<div id="cntnt" onclick="getNAME(this.name);">
			<table>
				<tr>
					<th>Serial NO.</th>
					<th>ISBN NO.</th>
					<th>Title</th>
					<th>Type</th>
					<th>Author Name</th>
					<th>Quantity</th>
					<th>Purchase Date</th>
					<th>Edution</th>
					<th>Price</th>
					<th>Pages</th>
					<th>Publisher</th>
					<th>Delete</th>
				</tr>
			</table>
			<br />
			<?php

				require_once('db/DBconnect.php');

				$sql = "SELECT * FROM books";

				if($result = $mysqli->query($sql)){
					 					
					while($show = $result->fetch_assoc()){
						
						$sn = $show['sn'];
						$isbn_no = $show['isbn_no'];
						$title = $show['book_title'];
						$type = $show['book_type'];
						$a_name = $show['author_name'];
						$quantity = $show['quantity'];
						$pur_date = $show['purchaase_date'];
						$edition = $show['edition'];
						$price = $show['price'];
						$pages = $show['pages'];
						$publisher = $show['publisher'];

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
									var td12 = document.createElement('td');

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
									var a12 = document.createElement('a');

									a1.innerHTML=\"$sn\";
									a2.innerHTML=\"$isbn_no\";
									a3.innerHTML=\"$title\";
									a4.innerHTML=\"$type\";
									a5.innerHTML=\"$a_name\";
									a6.innerHTML=\"$quantity\";
									a7.innerHTML=\"$pur_date\";
									a8.innerHTML=\"$edition\";
									a9.innerHTML=\"$price\";
									a10.innerHTML=\"$pages\";
									a11.innerHTML=\"$publisher\";
									
									a12.href = \"\";
									a12.innerHTML = \"Delete\";

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
									td11.appendChild(a11);
									td12.appendChild(a12).className = \"delete\";

									a12.name = \"$sn\";

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
									tr.appendChild(td12);

									tbl[0].appendChild(tr);

									

								</script>
							";

					}

				}else
					echo $mysqli->error;

			?>
			<a href="home.php?p=addbook.php" class="btn" >Add New</a>

		</div>

		<script src="js/jquery.js"></script>
		<script>
			
			function getNAME(e){

				e = e || window.event;
				e = e.target || e.srcElement;

				var eVal = e.name;
				var table = "books";

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