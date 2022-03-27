<?php

    // include parser
    include './environment/envParser.php';
    (new DotEnv(__DIR__ . '/.env'))->load();

    $dbserver = getenv('DB_HOST_LOCAL');
    $db = getenv('DB_DATABASE');
    $db_user = getenv('DB_USERNAME');
    $db_password = getenv('DB_PASSWORD');

    $conn = new mysqli($dbserver, $db, $db_password, $db_user);
    if (!$conn)
    {
        die("Sikertelen kapcsolodas a szerverhez!" . mysqli_connect_error());
    }
    $sql = 'SELECT * FROM contact ORDER BY id DESC';
    $query = mysqli_query($conn, $sql);
    // echo mysqli_fetch_array($query);
    if(!$query) // TODO refaktoráld ezt a részt
    {
        die ('error'.mysqli_error($conn));
    }
    // header('Content-Type: application/json; charset=utf-8');
    // $res = mysqli_fetch_array($query);
    // echo json_encode($res);
        echo "
        <table class='table'>
        <tr>
             <th>Nev</th>
             <th>E-mail</th>
             <th>Uzenet</th>
             <th>Datum</th>
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
