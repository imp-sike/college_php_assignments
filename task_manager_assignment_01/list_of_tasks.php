<?php



require_once("connection.php");

$sql = "SELECT * FROM tasks";
$result = $mysqli->query($sql);

if($result->num_rows == 0 ) {
    echo "No data available! Please add from above form.";
}

while ($row = $result->fetch_assoc()) {
?>
    <li>
        <span class='title'><?php echo $row['title'];?></span><br>
        <span class='subtitle'><?php echo $row['contents'];?></span>
        <a href="delete_task.php?id=<?php echo $row['id'];?>"><span class='button_cross'><i class='fa fa-close'></i></span></a>
    </li>
<?php
}
