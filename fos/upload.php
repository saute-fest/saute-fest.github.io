<?php 
//DONT U DARE FUCKING UPLOAD THE VARS TO IT HUB BTW THIS IS WHERE U PUT THEM
$conn = mysqli_connect($servername, $username, $password, $dbname);


$target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    

    $sql = "INSERT INTO file 
    VALUES (DEFAULT, 'hfif', '$target_file', 'hfi')";
    if (mysqli_query($conn, $sql)) {
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

?>