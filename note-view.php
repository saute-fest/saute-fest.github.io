<?php

//DONT FUCKING PUT THE VARS ON GITHUB BUT THIS IS WHERE THEY GO


$conn = mysqli_connect($servername, $username, $password, $dbname);

    

    $sql = "SELECT * FROM file LIMIT 1";
    $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $path = $row['path'];
        }
  
        ?>
