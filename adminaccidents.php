<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
     <title>Uhai RANS admin</title>
     <link rel="stylesheet" href="../css/admins.css">
     <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
 </head>
 <body>
     <input type="checkbox"id="nav-toggle">
     <div class="sidebar">
         <div class="sidebar-brand">
             <h2><span class="lab la-accusoft"></span><span>Uhai Road accident notification system </span></h2>
            </div>

         <div class="sidebar-menu">
        
             <ul>
                 <li>
                     <a href="admin.php"><span class="lab la-accusoft"></span><span>Dashboard</span></a>
                 </li>
                 <li>
                     <a href="adminaccidents.php"><span class="lab la-accusoft"></span><span>View accident</span></a>
                 </li>
                 <li>
                     <a href="officers.php"><span class="lab la-accusoft"></span><span>View officer</span></a>
                 </li>
               
             </ul>
            </div>
        </div>

<div class="main-content">
<header>
    <h2>
        <label for="nav-toggle">
            <span class="las la-bars"></span>
        </label>
        <a class="ctn"href="NEW.php">Back to Homepage</a>
    </h2>

  
</header>
<main>
    <div class="cards">
        <div class="card-single">
            <div>
            <?php
 $conn= mysqli_connect("localhost","skay","skaySAMMY1234@.","secondyear");
 $valueToSearch = $_POST['valueToSearch'];
 $query = "SELECT * FROM `report` WHERE county='{$valueToSearch}'";
$query_run = mysqli_query($conn,$query);
$row = mysqli_num_rows($query_run);
echo " <h1> $row</h1>";
?>

    <span>Reports</span>
</div>
<div>
<span class="las la-users"></span>
        </div>

    </div>
  
</div> 

    <div class="projects">
        <div class="card">
<div class="card-header">

    <h3>Accidents reported</h3>
    
</div>

   <div class="table-responsive">
       <?php
      
       $conn=mysqli_connect("localhost","skay","skaySAMMY1234@.","secondyear");
       $query="SELECT * FROM report";
       $query_run = mysqli_query($conn,$query);
       ?>
       <form action="adminaccidents.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Location To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
</form>
   <table width="100%">
<thead>
    <tr>
    <th>Names</th>
			<th>Gender</th>
			<th>Phonenumber</th>
			<th>Email</th>
			<th>Time of accident</th>
			<th>Date of accident</th>
			<th>Status of citizen</th>
			<th>County</th>
			<th>Subcounty</th>
			
			<th>Statement</th>
			<th>Image of scene</th>
			<th>Location on map</th>
    </tr>
</thead>
<tbody>
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


if(mysqli_num_rows($query_run)>0)
{
while($row = mysqli_fetch_assoc($search_result))
{
    ?>
   
<tr>
<td><?php echo $row['names']; ?></td>
	<td><?php echo $row['gender']; ?></td>
	<td><?php echo $row['numbers']; ?></td>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['tims']; ?></td>
	<td><?php echo $row['dats']; ?></td>
	<td><?php echo $row['county']; ?></td>
	<td><?php echo $row['subcounty']; ?></td>
	<td><?php echo $row['statuses']; ?></td>
	<td><?php echo $row['image_text']; ?></td>
	<td> <img src="uploads/<?php echo $row['image'];?>" width="260px" height="200px"></td>
	<td style="width:450px;height:450px;"><iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>,
        <?php echo $row["longitude"]; ?>&hl=es;z=14&output=embed'></iframe></td>
    
<td>
    
</tr>
<?php
}

}
else{
    echo "No record found";
}



?>





   





</tbody>
    </table>
</div>
</div>
</div>

    


</main>

 </body>
 </html>