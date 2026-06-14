<?php

include 'db.php';

$result = mysqli_query(
$conn,
"SELECT * FROM contact ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Messages</title>
</head>
<body>

<h1>Contact Messages</h1>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Subject</th>
<th>Message</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['Email']; ?></td>
<td><?php echo $row['Phone']; ?></td>
<td><?php echo $row['Subject']; ?></td>
<td><?php echo $row['Message']; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>