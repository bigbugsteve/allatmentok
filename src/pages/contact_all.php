<?php

    $dbserver = getenv('DB_HOST_LOCAL');
    $db = getenv('DB_DATABASE');
    $db_user = getenv('DB_USERNAME');
    $db_password = getenv('DB_PASSWORD');

    $conn = new mysqli('localhost','mestervi_allatmentok','Allat2000','mestervi_allatmentok');
    if (!$conn)
    {
        die("Sikertelen kapcsolodas a szerverhez!" . mysqli_connect_error());
    }
    $sql = 'SELECT * FROM contact ORDER BY id DESC';
    $query = mysqli_query($conn, $sql);
    // echo mysqli_fetch_array($query);
    if(!$query)
    {
        die ('error'.mysqli_error($conn));
    }
    // header('Content-Type: application/json; charset=utf-8');
    // $res = mysqli_fetch_array($query);
    // echo json_encode($res);
        echo "
        <table class='table'>
        <tr>
             <th>Név</th>
             <th>E-mail</th>
             <th>Üzenet</th>
             <th>Dátum</th>
         </tr>";

         while ($row = mysqli_fetch_array($query))
         {
             echo "<tr>
             <td>$row[name]</td>
             <td>$row[email]</td>
             <td>$row[message]</td>
             <td>$row[date]</td>
             </tr>";
         }
         echo "</table>";
    // $res = $query;
    mysqli_close($conn);

?>