<?php
  // Create database connection
  $db = mysqli_connect("localhost", "skay", "skaySAMMY1234@.", "secondyear");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    
   
    



    $names = mysqli_real_escape_string($db, $_POST['names'] );
$gender =  mysqli_real_escape_string($db, $_POST['gender']);
$numbers = mysqli_real_escape_string($db,  $_POST['numbers']);
$email = mysqli_real_escape_string($db,  $_POST['email'] );
$tims =mysqli_real_escape_string($db,  $_POST['tims'] );
$dats = mysqli_real_escape_string($db,  $_POST['dats'] );
$county =  mysqli_real_escape_string($db, $_POST['county']);
$subcounty =mysqli_real_escape_string($db,  $_POST['subcounty'] );
$statuses = mysqli_real_escape_string($db, $_POST['statuses']);
$latitude= mysqli_real_escape_string($db,$_POST["latitude"]);
$longitude= mysqli_real_escape_string($db, $_POST["longitude"]);

  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "uploads/".basename($image);
    
  	$sql = "INSERT INTO report (names, gender, numbers, email, tims, dats, county, subcounty,statuses, latitude,longitude,image,image_text) VALUES ('$names', '$gender', '$numbers', '$email', '$tims', '$dats', '$county', '$subcounty','$statuses','$latitude','$longitude', '$image', '$image_text')";
      
  	// execute query
  	mysqli_query($db, $sql);
      
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
     echo "Form submitted successfully";
  }

  $result = mysqli_query($db, "SELECT * FROM report");
?>
<!DOCTYPE html>
<html>
<head>
<title>ACCIDENT REPORT FORM</title>
<link rel="stylesheet" href="../css/accidents.css">
<script type="text/javascript">
    function validate(){
        var names = document.getElementById("names");
        var gender = document.getElementById("gender");
        var numbers = document.getElementById("numbers");
        var email = document.getElementById("email");
        var tims = document.getElementById("tims");
        var dats = document.getElementById("dats");
        var county = document.getElementById("county");
        var subcounty = document.getElementById("subcounty");
        var statuses = document.getElementById("statuses");
        var latitude = document.getElementById("latitude");
        var longitude = document.getElementById("longitude");
        var image = document.getElementById("image");
        var image_text = document.getElementById("image_text");

        var names_value=names.value;
        alert(names_value);
        var gender_value=gender.value;
        alert(gender_value);
        var numbers_value=numbers.value;
        alert(numbers_value);
        var email_value=email.value;
        alert(email_value);
        var tims_value=tims.value;
        alert(tims_value);
        var dats_value=dats.value;
        alert(dats_value);
        var county_value=county.value;
        alert(county_value);
        var subcounty_value=subcounty.value;
        alert(subcounty_value);
        var statuses_value=statuses.value;
        alert(statuses_value);
        var latitude_value=latitude.value;
        alert(latitude_value);
        var longitude_value=longitude.value;
        alert(longitude_value);
        var image_value=image.value;
        alert(image_value);
        var image_text_value=image_text.value;
        alert(image_text_value);
      
      return false;
    }
    </script>
</head>
<body onload="getlocation();"rep>
    <a href="citizenhome.php">Back to HomePage</a>
 
    

  <form  class="myForm"autocomplete="off"method="POST"  action="report.php"enctype="multipart/form-data"onsubmit="return validate();">
	<input type="hidden" name="_next"value="http://localhost/secondYearProject/php/thankyou.php" required>
  	<input type="hidden" name="size" value="1000000" required>
    <div>
    <label for="name">Name</label>
        <input type="text" placeholder="Surname Middle First" id="names"name="names" required >
       
        </div>
        <div class="input-group">
        <label for="name">Gender</label>
        
        <select name="gender" id="gender" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Bi-sexual">Bi-sexual</option>
        </select>
       
        </div>
        <div class="input-group">
        <label for="name">Phone Number</label>
        <input type="text" placeholder="0712345678"id="numbers" name="numbers" required>
        
        </div>
        <div class="input-group">
        <label for="name">Email</label>
        <input type="email" placeholder="email@gmail.com"id="email"name="email"  required>
       
        </div>
        <div class="input-group">
        <label for="name">Time of accident</label>
        <input type="time" id="tims"name="tims" required >
        
        </div>
        <div class="input-group">
        <label for="name">Date of Accident</label>
        <input type="date" id="dats"name="dats" required>
       
        </div>
        <div class="input-group">
        <label for="name">County</label>
         <select name="county" id="county"name="county" >
<option value="Mombasa">Mombasa</option>
<option value="Kwale">Kwale</option>
<option value="Kilifi">Kilifi</option>
<option value="Tana River">Tana River</option>
<option value="Lamu">Lamu</option>
<option value="Taita-Taveta">Taita-Taveta</option>
<option value="Garissa">Garissa</option>
<option value="Wajir">Wajir</option>
<option value="Mandera">Mandera</option>
<option value="Marsabit">Marsabit</option>
<option value="Isiolo">Isiolo</option>
<option value="Meru">Meru</option>
<option value="Tharaka-Nithi">Tharaka-Nithi</option>
<option value="Embu">Embu</option>
<option value="Kitui">Kitui</option>
<option value="Machakos">Machakos</option>
<option value="Makueni">Makueni</option>
<option value="Nyandarua">Nyandarua</option>
<option value="Nyeri">Nyeri</option>
<option value="Kirinyaga">Kirinyaga</option>
<option value="Murang'a">Murang'a</option>
<option value="Kiambu">Kiambu</option>
<option value="Turkana">Turkana</option>
<option value="West Pokot">West Pokot</option>
<option value="Samburu">Samburu</option>
<option value="Trans-Nzoia">Trans-Nzoia</option>
<option value="Uasin Gishu">Uasin-Gishu</option>
<option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option>
<option value="Nandi">Nandi</option>
<option value="Baringo">Baringo</option>
<option value="Laikipia">Laikipia</option>
<option value="Nakuru">Nakuru</option>
<option value="Narok">Narok</option>
<option value="Kajiado">Kajiado</option>
<option value="Kericho">Kericho</option>
<option value="Bomet">Bomet</option>
<option value="Kakamega">Kakamega</option>
<option value="Vihiga">Vihiga</option>
<option value="Bungoma">Bungoma</option>
<option value="Busia">Busia</option>
<option value="Siaya">Siaya</option>
<option value="Kisumu">Kisumu</option>
<option value="Homabay">Homabay</option>
<option value="Migori">Migori</option>
<option value="Kisii">Kisii</option>
<option value="Nyamira">Nyamira</option>
<option value="Nairobi">Nairobi</option>

        </select>
        </div>
    <div class="input-group">
    <label for="name">Sub-County</label>
        <input type="name" placeholder="Awendo"id="subcounty"name="subcounty" required>
        </div>
        <div>
        <label for="name">Status</label>
         <select name="statuses" id="statuses"name="statuses"  >
         <option value="witness">Witness</option>
         <option value="casualty">Casualty</option>
         </select>
    </div>
     <div class="input-group">
    <input type="hidden" name ="latitude" value=""><br>
<input type="hidden" name ="longitude" value=""><br>
</div>
    <div class="input-group">
    
  	  <input type="file" name="image">
  	
  
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	
  	
  	
      <div class="input-group">
    <button class="btn" type="submit"name="upload"value="Save">Post</button>
    </div>
    </div>
    <div class="input-group">
    <button class="btn"type="reset">Clear</button>
    </div>
    
  </form>
</div>
<script type="text/javascript">
    function getlocation(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition,showError);
        }
    }
    function showPosition(position){
        document.querySelector('.myForm input[name="latitude"]').value=position.coords.latitude;
        document.querySelector('.myForm input[name="longitude"]').value=position.coords.longitude;
    }
    function showError(error){
        switch(error.code){
            case error.PERMISSION_DENIED:
                alert("You must Allow The Request for Geolocation To Fill Out the form");
                location.reload();
                break;
        }
    }
    </script>
   
 </body>
</html>


