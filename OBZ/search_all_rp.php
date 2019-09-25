<?php 

$sql = "SELECT research_no_id,research_title,research_info FROM research_paper";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Research Paper: " . $row["research_no_id"] . " <br> ". $row["research_title"]. "<br>  <br>" . $row["research_info"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
 ?>