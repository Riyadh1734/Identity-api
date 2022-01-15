<?php
$con = mysqli_connect("localhost","root","","api-data");
$response = array();
if ($con) {
	$sql = "SELECT * from data";
	$result = mysqli_query($con,$sql);
	if ($result) {
		$i=0;
		while ($row = mysqli_fetch_assoc($result)) {
			$response[$i]['id'] = $row ['id'];
			$response[$i]['name'] = $row ['name'];
			$response[$i]['email'] = $row ['email'];
			$response[$i]['age'] = $row ['age'];
			$i++;
		}
		echo json_encode($response,JSON_PRETTY_PRINT);
	}
}
else{
	echo "Database connection failed";
}
?>