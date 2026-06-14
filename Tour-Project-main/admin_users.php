<?php

session_start();

include 'db.php';

$result =
mysqli_query(
$conn,
"SELECT * FROM users ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html>
<head>

<title>Manage Users</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
padding:30px;
}

table{
width:100%;
border-collapse:collapse;
background:white;
}

th{
background:#0F4C81;
color:white;
padding:12px;
}

td{
padding:12px;
border:1px solid #ddd;
}

</style>

</head>

<body>

<h1>Manage Users</h1>

<table>

<tr>
<th>ID</th>
<th>Full Name</th>
<th>Email</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['fullname']; ?></td>

<td><?php echo $row['email']; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>