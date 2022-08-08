<html lang='en'>
<head>
	<title>Intger values</title>
	
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
	body {
	  background-color: #D3D3D3;
	}

	form {
	  text-align: center;
	}
	
	    table.mytable {
          border: 1px solid black;
           border-collapse: collapse;
		   background-color:white;

        }
 

	</style>
	
	</head>

	<body>
	<form action="php.php" method="get">
	  
	Enter an integer number please:	<br><br>
	<input type="text" name="number"> 
   <input type="submit" name="submit" value="send">
   
    </form>
	
	<center>
	<?php

    $conn = new mysqli("localhost","root","","mydb");
    $statement = $conn ->prepare("select * from data ");
    $statement ->execute();

    $result = $statement->get_result();
    echo"<hr>";
    echo"The numbers that stored in the database:";
    echo"<br/>"."<br/>";
    echo"";
    echo "<table class='mytable'";
    while($row = $result->fetch_assoc()){
        echo "<tr><td style=width:20%>". $row ['sensorvalue']."</td></tr>";
    }
    echo "</table>"
    ?>
	</center>
	</body>
	</html>
