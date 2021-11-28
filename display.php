<html>
<head>
<title>FETCHED DATA</title>
</head>
<body>

<table border="2">

<tr>
<th>name</th>
<th>email</th>
<th>number</th>
<th>message</th>
</tr>


<?php
include("connection.php");
$query = "SELECT * FROM dellsupport";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0){
	
	while($result = mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['name']."</td>
		<td>".$result['email']."</td>
		<td>".$result['number']."</td>
        <td>".$result['message']."</td>
		</tr>
		";
	}
}
else
{
	echo "No records found";
}
?>
</table>
</body>
</html>