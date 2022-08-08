<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	    <?php
		    $value = $_GET["number"];
			$conn= mysqli_connect('localhost','root','','mydb');
			$statement = $conn ->prepare("insert into data (sensorvalue) values(?); ");
            $statement->bind_param("i",$value);
            $statement->execute();
            echo"Done";
		
		?>

    </body>
</html>
