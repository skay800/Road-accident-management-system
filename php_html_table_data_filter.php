<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `report` WHERE county='{$valueToSearch}'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `report`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "skay", "skaySAMMY1234@.", "secondyear");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>ACCIDENTS REPORTED</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    <a href="officerhome.php">Go back to homepage</a>
        <form action="php_html_table_data_filter.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Location To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
              
			<th>Time of accident</th>
			<th>Date of accident</th>
			<th>Status of citizen</th>
			<th>County</th>
			<th>Subcounty</th>
			
			<th>Statement</th>
			<th>Image of scene</th>
			<th>Location on map</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
    
	<td><?php echo $row['tims']; ?></td>
	<td><?php echo $row['dats']; ?></td>
	<td><?php echo $row['county']; ?></td>
	<td><?php echo $row['subcounty']; ?></td>
	<td><?php echo $row['statuses']; ?></td>
	<td><?php echo $row['image_text']; ?></td>
	<td> <img src="uploads/<?php echo $row['image'];?>" width="260px" height="200px"></td>
	<td style="width:450px;height:450px;"><iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>,
        <?php echo $row["longitude"]; ?>&hl=es;z=14&output=embed'></iframe></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
       
    </body>
</html>
