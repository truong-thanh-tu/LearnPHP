<?php
$query = "SELECT id, title FROM posts ORDER BY id";
$result = mysqli_query($connection, $query);

while ($post = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr><td>".$post["id"]."</td><td>".$post["title"]."</td></tr>";
}