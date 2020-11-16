<html>
<body>
<?php
 $x = $_POST['name'];
 $conn = new mysqli("localhost", "root", "", "high");

 if($conn->connect_error) {
     die("$conn->connect_error");
 } else {
     echo "Successful connection" . "<br>";
 }

 $sql = "SELECT firstName, lastName FROM h";
 $sql2 = "INSERT INTO h (firstName, lastName) VALUES ('ade', 'itunnu')";
 $res = $conn->query($sql);

 if ($conn->query($sql2) === TRUE) {
    echo "record created<br>";
 } else {
     echo "Error: $conn->error";
 }
    


if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        echo $row["firstName"]. " " . $row["lastName"]. " " . $x;
    }
}




?>    
</body>
</html>