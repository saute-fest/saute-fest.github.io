<?php
//VARS PINNED IN THE DISCORD
$servername = "remotemysql.com";
$username = "47l2llZFr2";
$password = "92Mb7L9qCW";
$dbname = "47l2llZFr2";
$conn = mysqli_connect($servername, $username, $password, $dbname);




$target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $fileType != "pdf" && $fileType != "docx") {
    echo "Sorry, only JPG, JPEG, PNG, DOCX & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $sql = "INSERT INTO file
    VALUES (DEFAULT, 'hfif', '$target_file', 'hfi')";
    if (mysqli_query($conn, $sql)) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}

        ?>
