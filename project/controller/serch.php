<?php
	//sleep(3);
		
		require_once('../model/config.php');
	$name = $_REQUEST['name'];

	
	$sql = "select * from product where username like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td>ID</td>
						<td>Product_name</td>
						<td>Quantity</td>
						<td>Price</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['id']}</td>
							<td>{$row['product_name']}</td>
							<td>{$row['quantity<']}</td>
							<td>{$row['price']}</td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;

?>