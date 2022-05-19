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
 $db= mysqli_connect("localhost","skay","skaySAMMY1234@.","secondyear");
$query="SELECT username FROM users ORDER BY username";
$query_run = mysqli_query($db,$query);
$row = mysqli_num_rows($query_run);
echo " <h1> $row</h1>";
?>

            
    <span>Officers</span>
</div>
<div>
<span class="las la-users"></span>
        </div>

    </div>
  
</div> 

    <div class="projects">
        <div class="card">
<div class="card-header">
    <h3>Registered police officers</h3>
    
</div>
<?php
if(isset($_SESSION['success'])&& $_SESSION['success']!=''){
echo '<h2>'.$_SESSION['success'].'</h2>';
unset($_SESSION['success']);

}
if(isset($_SESSION['status'])&& $_SESSION['status']!=''){
    echo '<h2 class="bg-info">'.$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
    
    }
?>
   <div class="table-responsive">
       <?php
      
       $db=mysqli_connect("localhost","skay","skaySAMMY1234@.","secondyear");
       $query="SELECT * FROM users";
       $query_run = mysqli_query($db,$query);
       ?>
   <table width="100%">
<thead>
    <tr>
        <td> Name</td>
        <td>Email</td>
        <td> Police number</td>
        <td> EDIT </td>
        <td> DELETE </td>
    </tr>
</thead>
<tbody>
<?php
if(mysqli_num_rows($query_run)>0)
{
while($row = mysqli_fetch_assoc($query_run))
{
    ?>
   
<tr>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['policenumber'];?></td>
    
<td>
    <form action="officeredit.php" method="post">
        <input type="hidden"name="edit_username"value="<?php echo $row['username'];?>">
    <button type="submit"name="edit_btn"class="btn btn-success">EDIT</button>
    </form>
</td>
<td>
    <form action="adminserver.php"method="post">
        <input type="hidden"mame="delete_username"value="<?php echo $row['username']?>">
    <button type="submit"name="delete_btn"class="btn btn-danger">DELETE</button>
</form>
</td>
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










































