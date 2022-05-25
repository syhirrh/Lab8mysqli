<?php
include 'conn.php';

echo "<table boarder ='1'><tr><th>First Name</th><th>Last Name</th>";
echo "<th>E-mail</th><th>Password</th><th>Registration Date</th></tr>";

$result = mysqli_query($conn, "select * from user");
while($row = mysqli_fetch_row($result)){
    echo "<tr>";
    foreach ($row as $cell){
        echo "<td>$cell</td>";
    }   
    echo "</tr>";
}

mysqli_free_result($result);
mysqli_close($dbc);
?>