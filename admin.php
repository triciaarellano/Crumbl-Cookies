<?php

session_start();

function redirect()
{
	header("Location: admin-invalid.php");
	exit();
}

if(!isset($_SESSION["customer_id"]))
{
	$_SESSION["admin_error"] = "You must be logged in to access this page.";
	redirect();
}

if(!isset($_SESSION["email"]) || $_SESSION["email"] != "admin@privilege.com")
{
	$_SESSION["admin_error"] = "You don't have the privileges to access this page.";
	redirect();
}

$conn = mysqli_connect("localhost", "root", "", "hoteldb");

if(isset($_GET["selected_id"]))
{
	$selected_id = $_GET["selected_id"];

	$sql_fetch = "SELECT room_id FROM reservations WHERE reservation_id = $selected_id";
	$query_fetch = $conn->query($sql_fetch);
	$result_fetch = $query_fetch->fetch_assoc();
	if($result_fetch)
	{
		$room_id = $result_fetch["room_id"];
	}
	else
	{
		die("Error: Reservation cannot be deleted!");
	}

	$sql_update = "UPDATE rooms SET is_available = 1 WHERE room_id = $room_id";
	$query_update = mysqli_query($conn, $sql_update);

	$sql_delete = "DELETE FROM reservations WHERE reservation_id = $selected_id";
	$query_delete = mysqli_query($conn, $sql_delete);
}

$sql = "SELECT * FROM reservations";
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

</body>
</html>