<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
<?php
    $conn = new mysqli('localhost','mestervi_allatmentok','Allat2000','mestervi_allatmentok');
    if (!$conn)
    {
        die("Sikertelen kapcsolodas a szerverhez!" . mysqli_connect_error());
    }
    $sql = 'SELECT * FROM contact';
    $query = mysqli_query($conn, $sql);

    if(!$query)
    {
        die ('error'.mysqli_error($conn));
    }
        echo "
        <table class='table'>
        <tr>
            <th>Nev</th>
            <th>E-mail</th>
            <th>Uzenet</th>
        </tr>";

        while ($row = mysqli_fetch_array($query))
        {
            echo "<tr>
            <td>$row[nev]</td>
            <td>$row[email]</td>
            <td>$row[szoveg]</td>
            </tr>";
        }
        echo "</table>";
    
    mysqli_close($conn);

?>
	</body>
</html>