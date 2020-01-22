<?php 

$file = $_FILES['file'];
$name = $file['name'];
$path = "../documents" . basename($name);
if (move_uploaded_file($file['tmp_name'], $path)) {
    // Move succeed.
} else {
    // Move failed. Possible duplicate?
}
$servername = "remotemysql.com";
$username = "47l2llZFr2";
$password = "92Mb7L9qCW";
$dbname = "47l2llZFr2";
$conn = mysqli_connect($servername, $username, $password, $dbname);

    

    $sql = 'INSERT INTO file VALUES ("test", "$path", "test");';
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

?>