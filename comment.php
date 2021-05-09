<link rel="stylesheet" href="styles2.scss">
<?php

//inserting data into data base
function setComments($conn){
    if(isset($_POST['commentSubmit'])){
        $name = $_POST['name'];
        $comment = $_POST['comment'];

        $sql = "INSERT INTO commentary (name, comment) 
        VALUES ('$name', '$comment')";

        $result = $conn->query($sql);
    }
}

function getComments($conn){
    $sql = "SELECT * FROM commentary";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<div style='border: 1px solid #000; padding: 20px; height: 40px; width: 400px; padding-bottom: 8px; 
        line-height: 14px; border-radius: 10px; font-weight: bold; margin-bottom: 5px; position: relative;
        left: 34%;'>";
            echo $row['name']. ":". "<br>";
            echo $row['comment'];
        echo "</div>";
    }
    
}