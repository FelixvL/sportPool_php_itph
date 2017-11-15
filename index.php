<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="teams.php">maak teams aan</a>
        <br> kleine verbetering aa
<?php

    $hostname='localhost';
    $databasenaam='sport_pool';
    $username='root';
    $password='';
    
    $conn = new mysqli($hostname, $username, $password, $databasenaam);
    $sql = "SELECT * FROM `elftal`;";
    $result = $conn->query($sql);
    echo "<select>";
    for($x = 0; $x < $result->num_rows; $x++){
        $row = $result->fetch_assoc();
        echo "<option>";
        echo $row['naam'];
        echo "</option>";
    }
    echo "</select>";
        
 //       <select>
 //           <option>a</option>
 //           <option>b</option>
 //       </select>

?>




    </body>
</html>
