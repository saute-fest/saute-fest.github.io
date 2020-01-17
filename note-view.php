<?php

//vars here DONT FUCKING UPLOAD THIS TO GITHUB WITH THE FUCKING VARS IN THIS USE IT ON YOU LOCAL MACHINE GITHUB PAGES DOESNT EVEN TO SQL 

$conn = mysqli_connect($servername, $username, $password, $dbname);

    

    $sql = "SELECT * FROM file LIMIT 1";
    $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $path = $row['path'];
        }
  
        ?>
