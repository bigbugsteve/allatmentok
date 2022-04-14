<div class="bg-purple text-white text-center text-size-large p-0 m-0 mb-2">
    <h1 class="page-title">Üzenetek</h1>
</div>
<?php
    $dbserver = getenv('DB_HOST_LOCAL');
    $db = getenv('DB_DATABASE');
    $db_user = getenv('DB_USERNAME');
    $db_password = getenv('DB_PASSWORD');

    $conn = new mysqli($dbserver,$db,$db_password,$db_user);
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
        <table class='table table-striped mt-5 px-5'>
        <thead>
        <tr>
            <th>Név</th>
            <th>E-mail</th>
            <th>Üzenet</th>
            <th>Dátum</th>
            <th>Szerző</th>
        </tr>
        </thead>";


        while ($row = mysqli_fetch_array($query))
        {
            echo "<tr>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[message]</td>
            <td>$row[date]</td>
            <td>$row[anonym]</td>
            </tr>";
        }
        echo "</table>";
    // $res = $query;
    mysqli_close($conn);