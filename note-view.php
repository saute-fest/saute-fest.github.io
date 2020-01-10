<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>

        $(document).load(function() {
            
        });


        


    </script>
</head>
<body>
    <div class="ribbon">Placeholder</div>
    <?php

$servername = "remotemysql.com";
$username = "47l2llZFr2";
$password = "PVXhNkpCeT";
$dbname = "47l2llZFr2";

$conn = mysqli_connect($servername, $username, $password, $dbname);

    

    $sql = "SELECT * FROM file LIMIT 1";
    $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $path = $row['path'];
            echo '<iframe class="notes" src="'.$path.'">';
        }
  
        ?>
</body>
</html>