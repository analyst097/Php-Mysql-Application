<?php

$pdo = new PDO('mysql:host=localhost; port=3306; dbname=misc', 'fred', 'zap');
$stmt = $pdo->query("SELECT name, email, pass FROM USERS");
echo '<table border=1>'."\n";

while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
    print_r($row);

    echo "<tr><td>";
    echo($row['name']);
    echo "</td><td>";
    echo "</td><td>";
    echo($row['email']);
    echo "</td><td>";
    echo "</td><td>";
    echo($row['pass']);
    echo "</td></tr>\n";
}

echo "</table>\n";
?>