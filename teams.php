<?php
    $hostname='localhost';
    $databasenaam='sport_pool';
    $username='root';
    $password='';
    
    $conn = new mysqli($hostname, $username,$password,$databasenaam);
    if(isset($_GET['naam'])){
        $sql = "INSERT INTO `elftal`(`naam`, `plaats`)VALUES('".$_GET['naam']."','".$_GET['plaats']."')";
        $conn->query($sql);
    }
 ?>


<html>
    <head>
        
    </head>
    <body>
        <script type="text/javascript" src="sportPool.js"></script>
        <a href="index.php">terug</a>
        <form action="teams.php" method="get">
            Naam:<input type="text" name="naam">
            <br>
            Plaats:<input type="text" name="plaats">
            <br>
            <input type="submit" value="voeg toe">
        </form>
    </body>
</html>