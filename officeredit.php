<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">EDIT Police Officer</h6>
    </div>
    <div class="card-body">
        <?php
        $db= mysqli_connect("localhost","skay","skaySAMMY1234@.","secondyear");
    if(isset($_POST['edit_btn']))

{
    $username= $_POST['edit_username'];
    $query= "SELECT * FROM users WHERE username='$username'";
    $query_run= mysqli_query($db,$query);
   foreach($query_run as $row)
   {
       ?>
 <form action="officers.php" method="POST">

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="edit_username" value="<?php echo $row['username']?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="edit_email"value="<?php echo $row['email']?>" >
  	</div>
	  <div class="input-group">
  		<label>Policenumber</label>
  		<input type="text" name="edit_policenumber" required value="<?php echo $row['policenumber']?>">
  	</div>
  	
      <a href="officers.php" class="btn btn-danger"> CANCEL</a>
      <button type="submit"name="updatebtn"class="btn btn-primary">Update</button>

   </form>
      <?php
   }
}
?>
  	
  
    </div>
</div>

<?php
session_start();

$db= mysqli_connect("localhost","skay","skaySAMMY1234@.","secondyear");
if(isset($_POST['edit_btn']))

{
    $username= $_POST['edit_username'];
    $query= "SELECT * FROM users WHERE username='$username'";
    $query_run= mysqli_query($db,$query);
   
}

if(isset($_POST['delete_btn']))
{
    
$username = $_POST['delete_username'];


$query = "DELETE FROM users WHERE username ='$username'";
$query_run = mysqli_query($db, $query);

if($query_run)
{
$_SESSION['success']= "Your data is deleted";
header('Location: officers.php');
}
    else{
        $_SESSION['status']= "Your data is NOT updated";
        header('Location:officers.php');
        exit(0);
    }

}

if(isset($_POST['updatebtn']))
{
    
$username = $_POST['edit_username'];
$email= $_POST['edit_email'];
$policenumber = $_POST['edit_policenumber'];

$query = "UPDATE users SET username ='$username', email='$email', policenumber='$policenumber',  WHERE username ='$username'";
$query_run = mysqli_query($db, $query);

if($query_run)
{
$_SESSION['success']= "Your data is updated";
header('Location:officers.php');
}
    else{
        $_SESSION['status']= "Your data is NOT updated";
        header('Location:officers.php');
        exit(0);
    }

}












?>